<?php 

class EmployeController {

    public function getAllemployes(){

        $reply = employe::em_Get();
        return $reply;
    }

    public function deletedemployes(){

        $reply = employe::em_deleted();
        return $reply;
    }

    public function restoreemployes(){
        if(isset($_POST['restore'])){
            $data = array(
                'id_employe' => $_POST['restore']
            );
            employe::em_restore($data);
            Redirect::to('archive');
        }
    }

    public function countEmployes(){

        $reply = employe::em_count();
        return $reply;
    }

    public function getOneEmploye(){

        if(isset($_POST['id'])){
            $data = array(
                'id_employe' => $_POST['id']
            );

            $employe = employe::em_getby($data);

            return $employe;
        }

    }

    public function count_team_leader(){

        $reply = employe::team_leader();
        return $reply;
    }

    public function count_mailers(){

        $reply = employe::mailers();
        return $reply;
    }

    public function count_offer_manager(){

        $reply = employe::offer_manager();
        return $reply;
    }

    public function count_security(){

        $reply = employe::security();
        return $reply;
    }

    public function count_it(){

        $reply = employe::it();
        return $reply;
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
                    employe::em_add($data);
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

            $reply = employe::em_update($data);

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

            $reply = employe::em_delete($data);


            if($reply === true){

                Redirect::to('home');
            }
            else echo null;
                
        }
    }


} // end of class

?>