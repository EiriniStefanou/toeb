<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'afm',
        'doy',
        'address',
        'phone',
        'at',
        'protocol_num'
    ];

    public function estates()
    {
        return $this->hasMany(Estate::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
