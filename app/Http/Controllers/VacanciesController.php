<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Notifications\TelegramNewVacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class VacanciesController extends Controller
{
    public function addVacancy(Request  $request) {
        $vacancy = Vacancy::create($request->all());
        Notification::send('', new TelegramNewVacancy('+38' . $request->phone, $request->name, $request->lname, $request->specialty, $request->age, $request->comment, $request->link));

        return response()->json(['success' => true]);
    }
}
