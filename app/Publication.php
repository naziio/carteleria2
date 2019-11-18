<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    protected $primaryKey =  'id_pub';
    public function voyage()
    {
        return $this->hasOne('App\Voyage','id_voyage','voyages_id_voyage');
    }

    public function galleries()
    {
        return $this->hasMany('App\Gallery','publications_id_pub');
    }

}
