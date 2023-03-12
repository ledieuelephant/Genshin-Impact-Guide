<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guides extends Model
{
    use HasFactory;
    // table name
    protected $table = 'guides';
    // Create id column
    protected $fillable = [
        'id',
        'title',
        'description',
        'image'
    ];

    // no timestamps
    public $timestamps = false;
}
