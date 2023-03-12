<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artifact extends Model
{
    use HasFactory;
    // table name
    protected $table = 'artifact';
    // Create id column
    protected $fillable = [
        'id',
        'text',
        'guide_id'
    ];

    // no timestamps
    public $timestamps = false;
}
