<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    protected $primaryKey =  'id_voyage';
    public function publications()
    {
        return $this->hasMany('App\Publication', 'voyages_id_voyage');
    }
}
