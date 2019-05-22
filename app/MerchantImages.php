<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantImages extends ApiModel
{
    public $table = 'mt_merchant_images';
    public $timestamps = false;

    public function merchant(){
        return $this->hasOne("App\Merchant","id","merchant_id");
    }

}
