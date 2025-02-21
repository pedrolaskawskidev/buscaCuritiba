<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'domain';

    public function owner(){
        return $this->belongsTo(Owner::class, 'owner_id');
    }
}
