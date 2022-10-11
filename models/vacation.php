<?php

class vacation {

    protected static $query = '';
    protected static $query_id = '';
    protected static $stmt = '';

    public static function add($data){

        try {


            self::$query_id = 'SELECT id_employe FROM employe_data WHERE full_name = :full_name';
            self::$stmt = DB::connect()->prepare(self::$query_id);
            self::$stmt->bindParam(':full_name',$data['employe_name']);
            self::$stmt->execute();
        
            $id_employe = self::$stmt->fetch(PDO::FETCH_OBJ);

            if(!$id_employe) {
                echo 'Employe was not found';
                die;
            }

            implode(",",$id_employe);


            self::$query = 'INSERT INTO vacation(employe_name, id_employe vacation_start, vacation_end, vacation_pointer, vacation_estimated, days_available, vacation_status, created_at) 
            VALUES (:employe_name, :id_employe, :vacation_start, :vacation_end, :vacation_pointer, :vacation_estimated, :days_available, :vacation_status, :created_at)';

            self::$stmt = DB::connect()->prepare(self::$query);
            self::$stmt->bindParam(':employe_name',$data['employe_name']);
            self::$stmt->bindParam(':id_employe',$id_employe);
            self::$stmt->bindParam(':vacation_start',$data['vacation_start']);
            self::$stmt->bindParam(':vacation_end',$data['vacation_end']);
            self::$stmt->bindParam(':vacation_pointer',$data['vacation_pointer']);
            self::$stmt->bindParam(':vacation_estimated',$data['vacation_estimated']);
            self::$stmt->bindParam(':days_available',$data['days_available']);
            self::$stmt->bindParam(':vacation_status',$data['vacation_status']);
            self::$stmt->bindParam(':created_at',$data['created_at']);

            if(self::$stmt->execute()) {

                Redirect::to('home');
            }

            else {
                return 'Model is facing issues to add your data';
            }

        }

        catch(PDOException $e) {

            echo 'Something is wrong ' . $e->getMessage();
            self::$stmt = null;
        }
    }

    public static function updatepointer(){
        try {

            self::$query = 'UPDATE vacation SET vacation_pointer = NOW()';

            self::$stmt = DB::connect()->prepare(self::$query);


            if(self::$stmt->execute())
                return true;

            else
                echo 'something went wrong';
        }
        catch(PDOException $e){

            echo 'Something is wrong ' . $e->getMessage();
            self::$stmt = null;
        }
    }

    public static function show(){
        try {

            self::$stmt = DB::connect()->prepare('SELECT * FROM vacation');
            self::$stmt->execute();
    
            return self::$stmt->fetchAll();
        }

        catch(PDOException $e) {

        }
    }

    public static function id_employe($data){}


}

?>