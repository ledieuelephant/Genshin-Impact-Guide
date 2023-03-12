<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    // table name
    protected $table = 'team';
    // Create id column
    protected $fillable = [
        'id',
        'text',
        'guide_id'
    ];

    // no timestamps
    public $timestamps = false;
}
