<?php 

    if(isset($_POST['submit'])){
        $user = new AdminController();
        $dataerror = $user->register();
    }

?>

<body id="login">
    <div class="leftHalf">
        <div class="content">

        </div>
    </div>
    <div class="righthalf">
        <h1 style="text-align:center;margin-top:32%;"><i class="fa fa-dashboard"></i> Add New Admin</h1>
        <?php  ?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
            <?php 
                    if(isset($dataerror) && !is_null($dataerror))
                { ?>
                        <div class="alert alert-danger"><?php echo $dataerror;?></div>
                <?php }
                ?>

                <input type="text" class="form-control" id="email" placeholder="Entre your username" name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Entre your password" name="pass">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Retype password" name="repass">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Create <i class="fa fa-plug"></i></button>
        </form>
    </div>

    <footer>
        <span>Honest Media. All right reserved &copy; 2018</span>
    </footer>

</body>