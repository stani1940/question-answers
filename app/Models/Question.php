<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=['title','slug', 'body'];
    public function User(){
        return $this->belongsTo(User::class);
    }
}
