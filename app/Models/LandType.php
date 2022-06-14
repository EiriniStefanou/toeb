<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'notes',
        'status',
        'charge_type_id'
    ];

    public function chargetype()
    {
        return $this->hasOne(ChargeType::class);
    }
}
