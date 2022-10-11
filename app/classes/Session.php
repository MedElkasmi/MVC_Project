<?php 

class Session {

    static public function set($type,$message){

        $msglist = array($type,$message);

        return $msglist;

       /* echo '<pre>';
        var_dump($typeList);
        echo '</pre>';

        echo '<pre>';
        var_dump($messageList);
        echo '</pre>';*/


    }



}







?>