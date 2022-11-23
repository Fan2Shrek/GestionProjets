<?php

namespace App\Classes;

class Host
{

    public function __construct(
        private int $id,
        private string $name,
        private string $code,
        private string $notes,
    )
    {
    }
    public function __toString()
    {
        return $this->id;
    }
}