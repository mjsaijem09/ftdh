<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'socials';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'link', 'icon', 'status'
    ];
}
