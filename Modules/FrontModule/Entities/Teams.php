<?php

namespace Modules\FrontModule\Entities;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    protected $fillable = ['ar_name','en_name','en_job','ar_job','img'];
}
