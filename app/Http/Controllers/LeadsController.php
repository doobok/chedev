<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Notifications\TelegramNewLead;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class LeadsController extends Controller
{
    // захват лида
    public function addLead(Request $request)
    {
        $this->validate($request, [
            'tempy' => 'required',
        ]);

        // проверяем наличие лида в БД
        $lead = Lead::where('tempy', $request->tempy)->orderBy('id', 'desc')->first();

        // если нет лида в БД то создаем нового
        if ($lead === null) {

            // обрабатываем
            return self::saveToDB($request);

        } else {
            // блокируем отправку на n часов
            $now = Carbon::now();
            // если время в БД+n часов больше реального - блокируем
            if ($lead->created_at->addHours(5) > $now) {

                return response()->json(['success' => 'false', 'msg' => __('site.phone-sended-alert')]);

            } else {
                // иначе обрабатываем
                return self::saveToDB($request);
            }
        }
    }

    public function saveToDB($request)
    {
        $lead = new Lead;

        $lead->name = $request->name;
        $lead->phone = $request->phone;
        $lead->tempy = $request->tempy;

        $lead->save();

        // notifications
        // формируем сообщение
        $phone = '+38' . $request->phone;
        $slug = $request->slug;
        $name = $request->name;
        //telegram notification
        Notification::send('', new TelegramNewLead($slug, $phone, $name));

        return response()->json(['success' => 'true']);
    }
}
