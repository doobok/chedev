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
            default => null
        };
    }
}
