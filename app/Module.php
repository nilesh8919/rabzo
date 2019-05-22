<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends ApiModel
{
    public $table = 'modules';
    public $timestamps = false;

    public function sub_modules(){
        return $this->hasMany("App\SubModule","module_id","id");
    }

}
