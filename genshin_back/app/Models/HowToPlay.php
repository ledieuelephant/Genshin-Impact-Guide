<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowToPlay extends Model
{
    use HasFactory;
    // table name
    protected $table = 'how_to_play';
    // Create id column
    protected $fillable = [
        'id',
        'text',
        'guide_id'
    ];

    // no timestamps
    public $timestamps = false;
}
