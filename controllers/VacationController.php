<?php

class VacationController {

    public $vacation_pointer ='';
    public $data = array();
    public $filter = array();
    public $data_filtered = array();

    public function addVacation(){
        if($_POST['addtolist']){

            $this->vacation_pointer = date("Y-m-d");

            $this->data = array(
                'employe_name' => $_POST['employe_name'],
                'vacation_start' => date("Y-m-d"),
                'duration' => $_POST['duration'],
                'days_available' => $_POST['days_available'],
                'vacation_pointer' => $this->vacation_pointer
            );

            $this->filter = Functions::filterVacation($this->data);
            if(!empty($this->filter)) {

                $this->data_filtered = array(
                    'employe_name' => $this->filter['employe_name'],
                    'vacation_start' => $this->filter['vacation_start'],
                    'vacation_end' => $this->filter['vacation_end'],
                    'vacation_pointer' => $this->filter['vacation_pointer'],
                    'vacation_estimated' => $this->filter['vacation_estimated'],
                    'days_available' => $this->filter['days_available'],
                    'vacation_status' => $this->filter['vacation_status'],
                    'created_at' => date("Y-m-d")
                );
                vacation::va_add($this->data_filtered);
        
            }
            else {
                echo 'array is empty';
            }
        }
    }

    public function Show_Vacation(){

        $data = vacation::va_show();
        return $data;
    }

    public function Refresh_Data(){

        vacation::updatepointer();
    }

    public function Vacation_Count(){

        $count_va = vacation::va_count();
        return $count_va;
    }





}
?>