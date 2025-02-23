<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'domain';

    protected $fillable = [
        'name',
        'owner_id',
        'extension',
        'status',
        'host',
        'ip_adress',
        'cretaed',
        'expiration',
        'updated'
    ];

    public function owner(){
        return $this->belongsTo(Owner::class, 'owner_id');
    }
}
