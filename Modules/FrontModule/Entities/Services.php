<?php

namespace Modules\FrontModule\Entities;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $fillable = ['ar_title','en_title','en_content','ar_content','img'];
}
