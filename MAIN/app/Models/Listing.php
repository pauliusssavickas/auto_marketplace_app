<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'vehicle_type'
    ];

    // Polymorphic relation based on vehicle type
    public function vehicle()
    {
        switch ($this->vehicle_type) {
            case 'car':
                return $this->hasOne(Car::class);
            // You can add other cases for bike, truck, etc.
            default:
                return null;
        }
    }
}
