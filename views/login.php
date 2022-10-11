<?php 

    if(isset($_POST['login'])){
        $user = new AdminController();
        $dataerror = $user->auth();
    }
?>

<body id="login">
    <div class="leftHalf">
        <div class="content">

        </div>
    </div>
    <div class="righthalf">
        <h1 style="text-align:center;margin-top:32%;"><i class="fa fa-dashboard"></i> Log in</h1>
        <?php  ?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
            <?php 
                    if(isset($dataerror) && !is_null($dataerror))
                { ?>
                        <div class="alert alert-danger"><?php echo $dataerror;?></div>
                <?php }
                ?>

                <input type="text" class="form-control" id="email" placeholder="Username" name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pass">
            </div>
            <button type="submit" name="login" class="btn btn-info">Connection <i class="fa fa-plug"></i></button>
            <a href="<?php echo BASE_URL; ?>register">Register</a>
        </form>
    </div>

    <footer>
        <span>Honest Media. All right reserved &copy; 2018</span>
    </footer>

</body>