<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sensor extends Model
{
    use HasFactory;

    protected $table = 'sensors';

    protected $fillable = [
        'name',
        'type',
        'lower_limit',
        'upper_limit'
    ];

    // Relationships
    public function devices(): BelongsToMany
    {
        return $this->belongsToMany(Device::class, 'device_sensor', 'sensor_id', 'device_id');
    }
}
