<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashflow extends Model
{
    use HasFactory;

    protected $table = 'cashflow';

    protected $fillable = [
        'flow',
        'category',
        'name',
        'amount'
    ];
}
