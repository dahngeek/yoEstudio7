<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class Article extends Base
{
    use HasImages;

    /**
        * Add date fields
        *
        * @var array
    */
    protected $dates = ['date'];

    /**
        * Validation rules
        *
        * @var array
    */
    public static $rules = [
        'title' => 'required',
        'slug' => 'alpha_dash|unique:articles',
        'body' => 'required',
        'date' => 'required',
        'images.default' => 'required|mimes:jpeg',
        'images.marquee' => 'required',
    ];

    /**
        * Orders instances of this model in the admin as well as default ordering
        * to be used by public site implementation.
        *
        * @param  Illuminate\Database\Query\Builder $query
        * @return void
    */
    public function scopeOrdered($query) {
        $query->orderBy('date', 'desc');
    }

    /**
        * Return the URI to instances of this model
        *
        * @return string A URI that the browser can resolve
    */
    public function getUriAttribute() {
        return url('article', $this->slug);
    }
}
