<?php 

class EmployeController {

    public function getAllemployes(){

        $reply = employe::getAll();
        return $reply;
    }

    public function deletedemployes(){

        $reply = employe::getDeleted();
        return $reply;
    }

    public function restoreemployes(){
        if(isset($_POST['restore'])){
            $data = array(
                'id_employe' => $_POST['restore']
            );
            employe::restore($data);
            Redirect::to('archive');
        }
    }

    public function countEmployes(){

        $reply = employe::count();
        return $reply;
    }

    public function getOneEmploye(){

        if(isset($_POST['id'])){
            $data = array(
                'id_employe' => $_POST['id']
            );

            $employe = employe::getone($data);

            return $employe;
        }

    }

    public function addNewEmploye(){
        if(isset($_POST['submit'])){
                $data = array(
                    'full_name' => $_POST['full_name'],
                    'hire_date' => $_POST['hire_date'],
                    'cnss_info' => $_POST['cnss_info'],
                    'birth_date' => $_POST['birth_date'],
                    'email' => $_POST['email'],
                    'phone_number' => $_POST['phone_number'],
                    'skills' => $_POST['skills'],
                    'gender' => $_POST['gender'],
                    'entity' => $_POST['entity'],
                    'created_at' => date("Y-m-d")
                );

                $error_list_inputs= Functions::checkinputs($data);
                $error_list_radio= Functions::checkinputs($data);

                if($error_list_inputs == false || $error_list_radio == false) {
                    echo 'You are trying to add empty inputs';
                }
                elseif(!empty($error_list_inputs) && !empty($error_list_radio)) {
                    foreach($error_list_inputs as $erros){
                        if(is_null($erros)){
                            $empty = true;
                        }
                        else {
                            $empty = false;
                        }
                    }
                }
                if(isset($empty) && $empty === true) {
                    employe::add($data);
                    Redirect::to("hresoures");
                }

        }
    }

    public function updateEmploye(){
        if(isset($_POST['submit'])){

            $data = array(

                'id_employe' => $_POST['id'],
                'full_name' => $_POST['full_name'],
                'hire_date' => $_POST['hire_date'],
                'cnss_info' => $_POST['cnss_info'],
                'birth_date' => $_POST['birth_date'],
                'email' => $_POST['email'],
                'phone_number' => $_POST['phone_number'],
                'skills' => $_POST['skills'],
                'gender' => $_POST['gender'],
                'entity' => $_POST['entity'],
                'updated_at' => date("Y-m-d")
            );

            $reply = employe::update($data);

            if($reply == true){

                Redirect::to('hresoures');
            }

            else echo null;
                
        }
    }

    public function deleteEmploye(){
        if(isset($_POST['id'])){

            $data = array(

                'id_employe' => $_POST['id'],
                'deleted_at'=> date("Y-m-d")
            );

            $reply = employe::delete($data);


            if($reply === true){

                Redirect::to('home');
            }
            else echo null;
                
        }
    }


} // end of class

?>