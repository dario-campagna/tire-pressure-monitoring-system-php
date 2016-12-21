<?php

namespace Esteco\Monitoring;

class Alarm
{
    const LOW_PRESSURE_THRESHOLD = 17.0;
    const HIGH_PRESSURE_THRESHOLD = 21.0;

    /**
     * @var Sensor
     */
    private $sensor;
    /**
     * @var bool
     */
    private $alarmOn;

    public function __construct()
    {
        $this->sensor = new Sensor();
        $this->alarmOn = false;
    }

    public function check()
    {
        $psiPressureValue = $this->sensor->popNextPressurePsiValue();

        if ($psiPressureValue < self::LOW_PRESSURE_THRESHOLD || self::HIGH_PRESSURE_THRESHOLD < $psiPressureValue) {
            $this->alarmOn = true;
        }
    }

    public function isAlarmOn(): bool
    {
        return $this->alarmOn;
    }
}