<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_name',
        'event_desc',
        'event_date',
        'event_price',
        'event_organizer',
        'event_link',
        'event_image',
        'event_status'
    ];
}