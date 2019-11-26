<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyProgram extends Model
{
    //
    public function voyage()
    {
        return $this->belongsTo('App\Voyage','voyages_id_voyage');
    }
}
