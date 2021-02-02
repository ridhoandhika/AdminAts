<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'news';
    protected $fillable =
    ['news_title','news_description','status'];
}
