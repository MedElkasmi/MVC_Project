
<?php 

$data = new EmployeController();
$count = $data->countEmployes();

$user = new AdminController();
$session = $user->auth();


?>

<nav>
    <ul>
    <li class="f-left"><a href="<?php echo BASE_URL; ?>home">DASHBOARD</a></li>
        <li class="f-right hidden-xs hidden-sm"> 
            <a href="<?php echo BASE_URL; ?>logout">Log out <i class="fa fa-power-off"></i></a>
        </li>
    </ul>
</nav>

<div id="sidebar" class="sidebar">
    <div class="links">
        <a href="#" class="active"><i class="fa fa-cog"></i> Setting</a>
        <a href=""><i class="fa fa-user-circle"></i> Create Admin</a>
        <a href=""><i class="fa fa-users"></"></i> List of admins</a>
        <a href=""><i class="fa fa-globe"></i> Langaugaes</a>
    </div>
    <i class="fa fa-gear"></i>
</div>

<div class="container">

<header class="panel-block row">
        <div class="col-sm-6">
        <a href="<?php echo BASE_URL; ?>">Back To Home</a>
            <div class="panel" style="background-color:#33b5e5;">
                    <div style="float: left;">
                        <h3>Employees</h3>
                        <h3><?php echo $count['total']; ?></h3>
                    </div>
                    <i class="fa fa-users fa-4x" style="float:right;"></i>
                </div>
        </div>
        <div class="col-sm-6">
        <br>
            <div class="panel" style="background-color:#00C851;">
                <div style="float: left;">
                    <h3>Vacation</h3>
                    <h3><?php  ?></h3>
                </div>
                <i class="fa fa-plane fa-4x" style="float:right;"></i>
            </div>
        </div>
</header>



<div class="scroll_top">
        <i class="fa fa-angle-double-up"></i>
</div>



</div><!--container -->