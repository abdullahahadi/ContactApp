<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Venturecraft\Revisionable\RevisionableTrait;

class Contact extends Model

{   // to keep edits histories
    use RevisionableTrait;

    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'created_at',
    ];
}
