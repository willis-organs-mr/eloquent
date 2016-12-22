<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fillable = ['token'];
    
    public function getRouteKeyName()
    {
        return 'token';
    }

    //can access user through Token model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
