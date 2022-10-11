<?php 

class admin {

    static public function add($data){
        try {

            $query = 'INSERT INTO admins(username, pass, created_at) VALUES (:username, :pass, :created_at)';

            $stmt = DB::connect()->prepare($query);
            $stmt->bindParam(':username',$data['username']);
            $stmt->bindParam(':pass',$data['pass']);
            $stmt->bindParam(':created_at',$data['created_at']);

            if($stmt->execute()) {
                Redirect::to('home');
            }

            else {
                return 'Model is facing issues to add your data';
            }

        }

        catch(PDOException $e) {

            echo 'Something is wrong ' . $e->getMessage();
            $stmt = null;
        }
    }

    static public function get($data){

        $username = $data['username'];
        
        try {

            $stmt = DB::connect()->prepare('SELECT * FROM admins WHERE username=:username');
            $stmt->execute(array(':username' => $username));
    
            if($stmt->execute()){

                $user = $stmt->fetch(PDO::FETCH_OBJ);

                return $user;
            }
        }

        catch(PDOException $e) {

            echo 'Something is wrong ' . $e->getMessage();
            $stmt = null;
        }
        
    }

    static public function update(){
        
    }

    static public function delete(){
        
    }

}


?>