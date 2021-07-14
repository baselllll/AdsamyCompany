<?php

namespace Modules\FrontModule\Entities;

use Illuminate\Database\Eloquent\Model;

class works extends Model
{
    protected $fillable = ['ar_name','en_name','img','link'];
}
