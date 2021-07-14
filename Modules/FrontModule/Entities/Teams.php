<?php

namespace Modules\FrontModule\Entities;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    protected $fillable = ['ar_title','en_name','en_job','ar_job','img'];
}
