<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Booking extends Model
{
    protected $fillable = ['date_time', 'add_from', 'add_to', 'comment' ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
