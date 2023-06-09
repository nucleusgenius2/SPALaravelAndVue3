<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{


    /**
     * table db
     * @var string
     */
    protected $table = 'news';


    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'content',
        'short_description',
        'seo_title',
        'seo_description',
        'img',
        'id_category',
        'author',
    ];

}
