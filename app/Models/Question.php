<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=['title', 'body'];

    public function User(){
        return $this->belongsTo(User::class);
    }
    //mutator
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getUrlAttribute()
    {
        return route('questions.show', $this->id);
    }

    public function getCreateDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
