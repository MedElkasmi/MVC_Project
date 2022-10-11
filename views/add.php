<?php 

include('./views/includes/content.php');

if(isset($_POST['submit'])){

    $addNew = new EmployeController();
    $msglist = $addNew->addNewEmploye();
}

?>


<div id="respond" class="container">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form-group">
            <h1><i class="fa fa-id-card"></i> New Employee Information :</h1>
                <h3>Nom Complet</h3>

                <?php 
                    if(isset($msglist[0]) && !is_null($msglist[0]))
                { ?>
                        <div class="alert alert-danger"><?php echo $msglist[0];?></div>
                <?php }
                ?>

                <input type="text" class="form-control" placeholder="Nom complet" name="full_name">
                <i class="fa fa-user"></i>
                <br>

                <h3>Date d'embauche</h3>
                <input type="date" class="form-control" placeholder="Date d'embauche" name="hire_date">
                <i class="fa fa-calendar"></i>
                <br>

                <h3>Numero CNSS</h3>
                <?php 
                    if(isset($msglist[1]) && !is_null($msglist[1]))
                { ?>
                        <div class="alert alert-danger"><?php echo $msglist[1];?></div>
                <?php }
                ?>
                <input type="text" class="form-control" placeholder="N C.N.S.S" name="cnss_info">
                <i class="fa fa-file"></i>
                <br>

                <h3>Date de Naissance</h3> 
                <input type="date" class="form-control" placeholder="Date de naissance" name="birth_date">
                <i class="fa fa-calendar"></i>
                <br>

                <h3>Email</h3> 
                <?php 
                    if(isset($msglist[2]) && !is_null($msglist[2]))
                { ?>
                        <div class="alert alert-danger"><?php echo $msglist[2];?></div>
                <?php }
                ?>
                <input type="email" class="form-control" placeholder="Entre email" name="email">
                <i class="fa fa-at"></i>
                <br>

                <h3>Numero Telephone</h3> 
                <?php 
                    if(isset($msglist[3]) && !is_null($msglist[3]))
                { ?>
                        <div class="alert alert-danger"><?php echo $msglist[3];?></div>
                <?php }
                ?>
                <input type="text" class="form-control" placeholder="Entre telephone" name="phone_number">
                <i class="fa fa-phone"></i>
                <br>

            <div class="radiobox">
                <h3>Qualification</h3>
                <?php 
                    if(isset($msglist[4]) && !is_null($msglist[4]))
                { ?>
                        <div class="alert alert-danger"><?php echo $msglist[4];?></div>
                <?php }
                ?>
                <input type="radio" name="skills" value="TeamLeader"> TeamLeader<br>
                <input type="radio" name="skills" value="Mailer"> Mailer<br>
                <input type="radio" name="skills" value="Offer_Manager"> Offer Manager<br>
                <input type="radio" name="skills" value="Security"> Security<br>
                <input type="radio" name="skills" value="IT"> IT<br>
            </div>
            <hr>
            <div class="radiobox">
                <h3>Gender</h3>
                <?php 
                    if(isset($msglist[4]) && !is_null($msglist[4]))
                { ?>
                        <div class="alert alert-danger"><?php echo $msglist[4];?></div>
                <?php }
                ?>
                <input type="radio" name="gender" value="Female"> Female<br>
                <input type="radio" name="gender" value="Male"> Male<br>
            </div>
            <hr>
            <div class="radiobox">
                <h3>Entity</h3>
                <?php 
                    if(isset($msglist[4]) && !is_null($msglist[4]))
                { ?>
                        <div class="alert alert-danger"><?php echo $msglist[4];?></div>
                <?php }
                ?>
                <input type="radio" name="entity" value="IT TEAM"> IT TEAM<br>
                <input type="radio" name="entity" value="Support"> Support<br>
                <input type="radio" name="entity" value="HM1"> TEAM 1<br>
                <input type="radio" name="entity" value="HM2"> TEAM 2<br>
                <input type="radio" name="entity" value="HM3"> TEAM 3<br>
            </div>
            <hr>
            <br>

            <input type="hidden" name="created_at">
            <br>

        </div><!-- end of form-group div -->
        <button type="submit" name="submit" class="btn btn-info">Valid</button>
    </form>
    </div>