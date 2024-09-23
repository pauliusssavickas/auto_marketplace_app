<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Vehicle extends Model
{
    // Common attributes for all vehicles
    protected $fillable = [
        'year',
        'mileage',
        'fuel_type',
        'condition'
    ];

    // Methods that apply to all vehicles
    public function vehicleDetails()
    {
        return "{$this->year} - {$this->mileage} miles - {$this->fuel_type}";
    }
}
