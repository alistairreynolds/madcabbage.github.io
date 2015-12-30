<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

    /**
     * Returns the films assigned to  this genre
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function films()
    {
        return $this->belongsToMany('App\Film');
    }
}