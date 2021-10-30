<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormatEvent;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tag',
        'type',
        'description',
        'term_condition',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'format_id'
    ];

    public function format_id()
    {
        return $this->hasMany(FormatEvent::class);
    }
}
