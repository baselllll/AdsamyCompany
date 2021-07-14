<?php

namespace Modules\FrontModule\Entities;

use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    protected $fillable = ['name','subject','email','phone','message'];
}
