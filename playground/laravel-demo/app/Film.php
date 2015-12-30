<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Film extends Model
{
    protected $fillable = [
    	'name',
    	'released',
    	'imdb',
    	'trailer',
    	'image',
    	'summary',
    	'summary_full',
        'added_by'
    ];

    /*
     Filter shope to filter who hasn't watched a film
     both = both not watched
     al = al not watched
     tina = tina not watched
     */

    public function scopeWhoNotWatched($query, $who){
        switch ($who) {
            case 'both':
                $query->where('tina_watched', 0)
                            ->where('watched', 0);
                break;
            case 'al':
                $query->where('watched', 0);
                break;
            case 'tina':
                $query->where('tina_watched',  0);
                break;
            default:
                break;
        }
    }


    /**
     * Returns who added this film
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function addedBy()
    {
        $user = $this->addedBy();
        return $user->username();
    }

    /**
     * Shows the people that want to watch this film
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function watchList()
    {
        return $this->hasMany('App\User');

    }

    /**
     * Shows the genres of a film
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    /**
     * Returns a list of ids of genres this film has
     * This works with magic because the get, Genre, List, Attributes - all automatically assigned to the form bindings bei
     * @return mixed
     */
    public function getGenreListAttribute()
    {
        return $this->genres->lists('id')->all();
    }

}
