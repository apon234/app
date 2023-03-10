<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'completed', 'description'];

    public function steps()
    {
        return $this->hasMany(step::class);
    }


}

