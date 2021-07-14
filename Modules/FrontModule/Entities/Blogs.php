<?php

namespace Modules\FrontModule\Entities;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $fillable = ['ar_title','en_title','ar_content','en_content','img'];
}
