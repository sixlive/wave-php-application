<?php

namespace App;

use Illuminate\Support\Carbon;


class ReadingLog extends Model
{
    protected $casts = [
        'read_date' => 'date'
    ];
}
