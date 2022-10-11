<?php 

class AdminController {

    public function auth(){

        if(isset($_POST['login'])){
            $data = array(
                'username' => $_POST['username'],
                'pass' => $_POST['pass']
            );

            if(!empty($_POST['username']) && !empty($_POST['pass'])){
                $admin = admin::get($data);
                if($admin){
                    if(password_verify($data['pass'],$admin->pass)){
                        $_SESSION['logged'] = true;
                        $_SESSION['username'] = $data['username'];
                        Redirect::to('home');
                    }
                    else {
                        return $error = "Password is wrong";
                    }
                }

                else {
                    return $error = "Admin was not found";
                }

            }
         }
         else {
            echo "none";
         }
    }

    public function register(){
        if(isset($_POST['submit'])){
            $options = [
                'cost' => 12,
            ];
            $data = array(
                'username' => $_POST['username'],
                'pass' => password_hash($_POST['pass'],PASSWORD_BCRYPT,$options),
                'created_at' => date("Y-m-d")
            );   

            if($_POST['pass'] == $_POST['repass']) {
                admin::add($data);
            }
            else {
                return $error = 'Password Do Not Match';
            } 
        }
    }
}

?>