<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weddings extends Model
{
    use HasFactory;

    public function owner()
    {
        $this->belongsTo(User::class, 'id','user_id');
    }
}
