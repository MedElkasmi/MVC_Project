<?php 


class Functions {

    protected static $full_name = null;
    protected static $hire_date = null;
    protected static $cnss_check = null;
    protected static $birth_date = null;
    protected static $email_check = null;
    protected static $phone_check = null;
    protected static $error_inputs = array();

    static public function checkinputs($data){


        if(!empty($data['full_name']) && !empty($data['hire_date']) && !empty($data['cnss_info']) && !empty($data['birth_date']) && !empty($data['email']) && !empty($data['phone_number'])){

            if(!preg_match("/^[a-zA-Z ]*$/",$data['full_name']) || is_null($data['full_name']) || empty($data['full_name'])){

                self::$full_name = 'Name Must be more Or empty, Please try again';
            }

            if(is_null($data['hire_date'])){

                self::$hire_date = 'hire_date Must be valid, Please try again';
            }

            if(!preg_match("/^[1-9][0-9]*$/",$data['cnss_info']) || !strlen($data['cnss_info']) > 10 || is_null($data['cnss_info'])){

                self::$cnss_check = 'CNSS NUMBER Must be more, Please try again';
            }

            if(is_null($data['birth_date'])){

                self::$birth_date = 'birth_date Must be valid, Please try again';
            }

            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) || is_null($_POST['email'])){

                self::$email_check = 'Email is invalid, Please try again';
            }

            if(!preg_match('/^[0-9]{10}+$/',$data['phone_number']) || is_null($data['phone_number'])){

                self::$phone_check = 'Phone number is invalid, Please try again';
            }

            self::$error_inputs = array(self::$full_name,self::$hire_date,self::$cnss_check,self::$birth_date,self::$email_check,self::$phone_check);

            return self::$error_inputs;
        }
        else {

            return false;
        }
    }

    protected static $error_radio = array();
    protected static $radio_check = null;

    static public function checkradios($data){


        if(is_null($data['skills']) || is_null($data['gender']) || is_null($data['entity'])){

            self::$radio_check = 'Plese select an option';

            self::$error_radio  = array(self::$radio_check);
            return self::$error_radio;
        }

        else {

            return false;
        }   
    }

    protected static $data_filtered = array();
    protected static $employe_name ='';
    protected static $vacation_end = '';
    protected static $vacation_diff = '';
    protected static $vacation_estimated = '';
    protected static $vacation_status = '';
    protected static $remove_sigh = '';
    protected static $remove_day = '';
    protected static $duration = '';
    protected static $days_available = '';

    static public function filterVacation($data){

        if(isset($data['employe_name']) && !empty($data['employe_name'])) {

            self::$employe_name = $data['employe_name'];
        }

        if(isset($data['duration']) && !is_null($data['duration'])){

            self::$vacation_end =  date('Y-m-d', strtotime($data['vacation_start']. $data['duration']));
            self::$vacation_diff = date_diff(date_create(self::$vacation_end),date_create($data['vacation_pointer']));
            self::$vacation_estimated = self::$vacation_diff->format("%R%a days");

            if(self::$vacation_estimated != '+0 days'){
                self::$vacation_status = 'Active';

                self::$remove_sigh = str_replace('+','',$data['duration']);
                self::$remove_day = str_replace('day','',self::$remove_sigh);
                self::$duration = self::$remove_day;
    
                self::$days_available = $data['days_available'] - intval(self::$duration);
            }
            else {
                self::$vacation_status = 'InActive';
                self::$days_available = $data['days_available'];
            }

            self::$data_filtered = array(
                'employe_name' =>  self::$employe_name,
                'vacation_start' => $data['vacation_start'],
                'vacation_end' => self::$vacation_end,
                'vacation_pointer' => $data['vacation_pointer'],
                'vacation_estimated' => self::$vacation_estimated,
                'days_available' => self::$days_available,
                'vacation_status' => self::$vacation_status
            );
        }

        return self::$data_filtered;
    }

    public static function var_show($key){
        echo '<pre>';
        var_dump($key);
        echo '</pre>';
        die();

    }

}








?>