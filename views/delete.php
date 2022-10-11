<?php 

include('./views/includes/content.php');

    if(isset($_POST['id'])){
        $update = new EmployeController();
        $respond = $update->deleteEmploye();
    }
    
    Redirect::to('hresoures');
?>