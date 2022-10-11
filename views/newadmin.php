<?php 

include('./views/includes/content.php');

?>

<div class="admin container">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-group">
                    <h1 style="text-align:center;"><i class="fa fa-user-circle"></i> Create new admin</h1>
                        <input type="text" class="form-control" id="email" placeholder="Username" name="user">
                        <br>
                        <input type="password" class="form-control" id="pwd" placeholder="Password" name="pass1">
                        <br>
                        <input type="password" class="form-control" id="pwd" placeholder="Password" name="pass2">
                        <br>
                        <button type="submit" class="btn btn-info">Create</button>
                    </div>
                </form>
            </div>