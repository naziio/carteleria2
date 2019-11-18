<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    protected $primaryKey = 'id_gallery';
    public function files()
    {
        return $this->hasMany('App\GalleryFile','galleries_id_gallery');
    }
}
