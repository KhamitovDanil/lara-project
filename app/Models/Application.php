<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_type',
        'date_time',
        'address',
        'status',
    ];

    public function users() {
        return $this->belongsTo(User::class);
    } 
}
