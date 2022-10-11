<?php 

include('./views/includes/content.php');

?>

<div class="container history">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <h2>Parameters :</h2>
                <h4>Choose an employee to add following informations :</h4>
                <input type="text" name="history">
                <br><br>
                <h4>Add salaire brut $:</h4>
                <h6>(Leave blank if not require)</h6>
                <input type="text" name="sbrut">
                <input type="submit" value="Add To List"><br><br>
            </form>
            <table class="table table-bordered text-center">
                <thead>
                <tr>
                    <td>Employee</td>
                    <td>Skills</td>
                    <td>Entity</td>
                    <td>Date_upgrade</td>
                    <td>Salaire_Brut</td>
                    <td>Salaire_Net</td>
                    <td>Control</td>
                </tr>
                </thead>    
                <tr>
                    
                </tr>
            </table>
        </div>