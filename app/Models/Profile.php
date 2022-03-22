<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable=['first_name','last_name','email','phone','bio','photo','facebook','github','linkedin','twitter','address'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
