<?php


namespace Esteco\Monitoring;

// The reading of the pressure value from the sensor is simulated in this implementation.
// Because the focus of the exercise is on the other class.

class Sensor
{
    const OFFSET = 16.0;

    public function popNextPressurePsiValue(): float
    {
        $pressureTelemetryValue = $this->samplePressure();
        return self::OFFSET + $pressureTelemetryValue;
    }

    private function samplePressure(): float
    {
        // placeholder implementation that simulate a real sensor in a real tire
        return 6 * mt_rand()/mt_getrandmax() * mt_rand()/mt_getrandmax();
    }
}