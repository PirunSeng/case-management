<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
