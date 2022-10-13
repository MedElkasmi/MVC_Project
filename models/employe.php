<?php 

class employe{

    static public function em_add($data) {

        try {

            $query = 'INSERT INTO employe_data(full_name, hire_date, cnss_info, birth_date, email, phone_number, skills, gender, entity, created_at)
            VALUES (:full_name, :hire_date, :cnss_info, :birth_date, :email, :phone_number, :skills, :gender, :entity, :created_at)';

            $stmt = DB::connect()->prepare($query);
            $stmt->bindParam(':full_name',$data['full_name']);
            $stmt->bindParam(':hire_date',$data['hire_date']);
            $stmt->bindParam(':cnss_info',$data['cnss_info']);
            $stmt->bindParam(':birth_date',$data['birth_date']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':phone_number',$data['phone_number']);
            $stmt->bindParam(':skills',$data['skills']);
            $stmt->bindParam(':gender',$data['gender']);
            $stmt->bindParam(':entity',$data['entity']);
            $stmt->bindParam(':created_at',$data['created_at']);

            if($stmt->execute()) {
                return 'Ok';
            }
            else {
                echo 'Model is facing issues to add your data';
            }

        }

        catch(PDOException $e) {

            echo 'Something is wrong ' . $e->getMessage();
            $stmt = null;
        }
    }

    static public function em_update($data) {

        try {

            $query = 'UPDATE employe_data SET full_name= :full_name, hire_date= :hire_date, cnss_info= :cnss_info, birth_date= :birth_date, email= :email, phone_number= :phone_number, skills= :skills,
            gender= :gender, entity= :entity, updated_at= :updated_at WHERE id_employe= :id_employe';

            $stmt = DB::connect()->prepare($query);
            $stmt->bindParam(':id_employe',$data['id_employe']);
            $stmt->bindParam(':full_name',$data['full_name']);
            $stmt->bindParam(':hire_date',$data['hire_date']);
            $stmt->bindParam(':cnss_info',$data['cnss_info']);
            $stmt->bindParam(':birth_date',$data['birth_date']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':phone_number',$data['phone_number']);
            $stmt->bindParam(':skills',$data['skills']);
            $stmt->bindParam(':gender',$data['gender']);
            $stmt->bindParam(':entity',$data['entity']);
            $stmt->bindParam(':updated_at',$data['updated_at']);



            if($stmt->execute())
                return true;

            else
                echo 'something went wrong';
        }

        catch(PDOException $e) {

            echo 'Something is wrong ' . $e->getMessage();
            $stmt = null;
        }
    }


    static public function em_delete($data) {

        try {

            $query = 'UPDATE employe_data set deleted_at = :deleted_at WHERE id_employe=:id_employe';
            $stmt = DB::connect()->prepare($query);
            $stmt->bindParam(':id_employe',$data['id_employe']);
            $stmt->bindParam(':deleted_at',$data['deleted_at']);

            if($stmt->execute())

                return true;  
        }

        catch(PDOException $e){
            
            echo 'Something is wrong ' . $e->getMessage();
            $stmt = null;
        }
    }

    static public function em_restore($data){

        try {

            $stmt = DB::connect()->prepare('UPDATE employe_data set deleted_at = NULL WHERE id_employe=:id_employe');
            $stmt->bindParam(':id_employe',$data['id_employe']);
            $stmt->execute();    
        }

        catch(PDOException $e) {
            echo 'Something is wrong ' . $e->getMessage();
            $stmt = null;
        }
    }

    static public function em_Get(){

        $stmt = DB::connect()->prepare('SELECT * FROM employe_data WHERE deleted_at IS NULL');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function em_count(){

        $stmt = DB::connect()->prepare('SELECT COUNT(*) as total FROM employe_data WHERE deleted_at IS NULL');
        $stmt->execute();
        $reply = $stmt->fetch(PDO::FETCH_ASSOC);

        return $reply;
  
    }

    static public function em_getby($data){

        try {

            $id = $data['id_employe'];
            $stmt = DB::connect()->prepare('SELECT * FROM employe_data WHERE id_employe=:id_employe');
            $stmt->execute(array(':id_employe' => $id));
            $reply = $stmt->fetch(PDO::FETCH_OBJ);
    
            return $reply;
        }

        catch(PDOException $e) {

            echo 'Something is wrong ' . $e->getMessage();
            $stmt = null;
        }

    }

    static public function em_deleted(){

        try {
            
            $stmt = DB::connect()->prepare('SELECT * FROM employe_data WHERE deleted_at IS NOT NULL');
            $stmt->execute();
    
            return $stmt->fetchAll();
        }

        catch(PDOException $e) {
            echo 'Something is wrong ' . $e->getMessage();
            $stmt = null;
        }
    }

















} // end of class


















?>