<?php

namespace App\Models;

class Car extends Vehicle
{
    // Car-specific attributes
    protected $fillable = [
        'make',
        'car_model',
        'number_of_doors',
        'body_type',
    ];

    // Methods for cars class
    public function carDetails()
    {
        return "{$this->make} {$this->car_model} - {$this->number_of_doors} doors - {$this->body_type}";
    }
}
