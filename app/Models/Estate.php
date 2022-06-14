<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
        'region',
        'type',
        'notes'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
