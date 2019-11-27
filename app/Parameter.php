<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    public function voyage()
    {
        return $this->belongsTo('App\Voyage','voyages_id_voyage','id_voyage');
    }
}
