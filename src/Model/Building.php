<?php

declare(strict_types=1);

namespace App\Model;

class Building
{
    private float $lon;

    private float $lat;

    private Firm $firm;

    public function getLon(): float
    {
        return $this->lon;
    }

    public function setLon(float $lon): self
    {
        $this->lon = $lon;
        return $this;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;
        return $this;
    }

    public function getFirm(): Firm
    {
        return $this->firm;
    }

    public function setFirm(Firm $firm): self
    {
        $this->firm = $firm;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    public function __sleep(): array
    {
        // TODO: Implement __sleep() method.
    }

    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }
}
