<?php

namespace App;
use App\Exceptions\InvalidInputException;


use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Support\Facades\Mail;




class ApiModel extends Model {
    
    public function validateInput( $request , $requiredFields ,$message = []) {
        $validator = Validator::make( $request->all(), $requiredFields , $message);
        if( $validator->fails() ) {
            throw new InvalidInputException( implode("|",$validator->errors()->all()) );
        }
    }

    public function validateInputArray( $request , $requiredFields ,$message = []) {
        $validator = Validator::make( $request, $requiredFields , $message);
        if( $validator->fails() ) {
            throw new InvalidInputException( implode("|",$validator->errors()->all()) );
        }
    }


    /**
     * @param $object
     * @param $array
     */
    public function mapArrayToObject($object, $array) {
        foreach( $array as $key => $value ) {
            $object->$key = $value;
        }
        return $object;
    }


    public function mapArrayToObject1($object, $array){
        foreach( $array as $key => $value ) {
            $object->$key = $value;
        }
        return $object;
    }



    public function sendMail($title = null, $admin_mail = null, $subject = null, $msgContent = null){

        $mail = Mail::send('emails.coupanmail',[
            'title' => $title,
            'content' => $msgContent
        ], function ($message) use($subject,$admin_mail) {
            $message->subject($subject);
           // $message->to('sonekar.nilesh0@gmail.com');
            $message->to('jassijaggi2@gmail.com');
			$message->cc('purchase@rtpharma.com');
            $message->from('info@rtpharma.com','generate password request form user');
        });
    }
    

    
}