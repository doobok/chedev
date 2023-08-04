<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlarmRequest;
use App\Services\AirAlarmService;
use Illuminate\Http\JsonResponse;

class AlarmController extends Controller
{
    /**
     * @param AlarmRequest $request
     *
     * @return JsonResponse
     */
    public function webhook(AlarmRequest $request): JsonResponse
    {
        return (new AirAlarmService($request))->handler();
    }
}
