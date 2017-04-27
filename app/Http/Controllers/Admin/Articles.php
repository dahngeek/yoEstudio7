<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Articles extends Base
{
    protected $title = 'Articulos';
    protected $description = 'Articles that appear in the News section.';
    protected $columns = [
        'Title' => 'getAdminTitleHtmlAttribute',
        'Date' => 'date',
    ];
    protected $search = [
        'title',
        'date' => 'date',
    ];
}
