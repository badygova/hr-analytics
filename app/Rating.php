<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'user_id', 'employee_id', 'criterion', 'comment', 'rating', 'period'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
