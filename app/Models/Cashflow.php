<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cashflow extends Model
{
    use HasFactory;

    protected $table = 'cashflow';

    protected $fillable = [
        'flow',
        'category',
        'name',
        'amount',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
