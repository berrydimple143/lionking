<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'date_paid',
        'status',
        'method',
        'received_by',
        'type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
