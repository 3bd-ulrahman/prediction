<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Device extends Model
{
    use HasFactory;

    protected $table = 'devices';

    protected $fillable = [
        'user_id',
        'buyer_id',
        'buyer_name',
        'device_token',
        'vendor',
        'purchase_value',
        'purchase_date'
    ];

    // Relationships
    public function sensors(): BelongsToMany
    {
        return $this->belongsToMany(Sensor::class, 'device_sensor', 'device_id', 'sensor_id');
    }
}
