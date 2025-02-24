<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'owner';

    protected $fillable = [
        'name',
        'document',
        'document_number',
        'phone',
        'email',
    ];

}
