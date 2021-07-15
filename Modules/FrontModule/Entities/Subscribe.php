<?php

namespace Modules\FrontModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $fillable = ['ar_title','en_title','ar_content','en_content','price'];
}
