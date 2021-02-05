<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyTranslator extends Model
{
    protected $table = 'translations';
    protected $primaryKey = 'id';
}
