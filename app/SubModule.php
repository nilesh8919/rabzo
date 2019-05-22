<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubModule extends ApiModel
{
    public $table = 'sub_modules';
    public $timestamps = false;

    public function sub_sub_modules(){
        return $this->hasMany("App\SubSubModule","sub_module_id","id");
    }
}
