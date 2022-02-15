<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type',
        'brand',
        /** Everything you would need about a vehicle */
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function license()
    {
        return $this->hasOne(License::class);
    }
}
