<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bloodinventory extends Model
{
    protected $fillable = [
        'blood_type',
        'status',
        'expiry_date',
        'collection date'
    ];

    protected $casts = [
        'expiry_date' => 'date',
        'collection_date' => 'date'
    ];
}
