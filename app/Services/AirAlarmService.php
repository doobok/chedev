<?php

namespace App\Services;


use App\Http\Requests\AlarmRequest;
use App\Models\Alarm;
use App\Notifications\AirAlarmNotification;
use Illuminate\Support\Facades\Notification;

class AirAlarmService
{
    private const STATUS_ACTIVATE = 'Activate';
    private int $regionId;
    private string $status;
    public function __construct(AlarmRequest $request)
    {
        $this->regionId     = $request->input('regionId');
        $this->status       = $request->input('status');
    }

    public function handler()
    {
        $region = $this->getRegion();

        if ($region) {
            $status = $this->status === self::STATUS_ACTIVATE;
            Notification::send('', new AirAlarmNotification($region['name'], $region['telegram_id'], $status));

            Alarm::create([
                'region_id' => $this->regionId,
                'region'    => $region['name'],
                'alarm'     => $status,
            ]);
        }

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * @return array|null
     */
    private function getRegion(): ?array
    {
        return match ($this->regionId) {
            31 => [
                'name' => 'місто Київ',
                'telegram_id' => -1001942695915,
            ],
            14 => [
                'name' => 'Київська область',
                'telegram_id' => -1001905222189,
            ],
            18 => [
                'name' => 'Одеська область',
                'telegram_id' => -1001973883075,
            ],
            22 => [
                'name' => 'Харківська область',
                'telegram_id' => -1001847983807,
            ],
//            8 => [
//                'name' => 'Волинська область',
//                'telegram_id' => -,
//            ],
//            19 => [
//                'name' => 'Полтавська область',
//                'telegram_id' => -,
//            ],
//            15 => [
//                'name' => 'Кіровоградська область',
//                'telegram_id' => -,
//            ],
//            20 => [
//                'name' => 'Сумська область',
//                'telegram_id' => -,
//            ],
//            28 => [
//                'name' => 'Донецька область',
//                'telegram_id' => -,
//            ],
//            24 => [
//                'name' => 'Черкаська область',
//                'telegram_id' => -,
//            ],
//            11 => [
//                'name' => 'Закарпатська область',
//                'telegram_id' => -,
//            ],
//            13 => [
//                'name' => 'Івано-Франківська область',
//                'telegram_id' => -,
//            ],
//            4 => [
//                'name' => 'Вінницька область',
//                'telegram_id' => -,
//            ],
//            5 => [
//                'name' => 'Рівненська область',
//                'telegram_id' => -,
//            ],
//            21 => [
//                'name' => 'Тернопільська область',
//                'telegram_id' => -,
//            ],
//            25 => [
//                'name' => 'Чернігівська область',
//                'telegram_id' => -,
//            ],
//            26 => [
//                'name' => 'Чернівецька область',
//                'telegram_id' => -,
//            ],
//            17 => [
//                'name' => 'Миколаївська область',
//                'telegram_id' => -,
//            ],
//            23 => [
//                'name' => 'Херсонська область',
//                'telegram_id' => -,
//            ],
//            27 => [
//                'name' => 'Львівська область',
//                'telegram_id' => -,
//            ],
//            3 => [
//                'name' => 'Хмельницька область',
//                'telegram_id' => -,
//            ],
//            10 => [
//                'name' => 'Житомирська область',
//                'telegram_id' => -,
//            ],
//            12 => [
//                'name' => 'Запорізька область',
//                'telegram_id' => -,
//            ],
//            9 => [
//                'name' => 'Дніпропетровська область',
//                'telegram_id' => -,
//            ],
            default => null
        };
    }
}
