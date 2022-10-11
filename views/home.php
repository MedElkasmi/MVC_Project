<?php 

include('./views/includes/content.php');

?>
<div class="container">
<div class="options text-center">
    <div class="row">
        <div class="col-sm-2 op" onclick="">
            <a href="<?php echo BASE_URL; ?>add">
                <i class="fa fa-user-plus fa-5x"></i>
                <h3>New Employee</h3>
            </a>
        </div>
        <div class="col-sm-2 op">
            <a href="<?php echo BASE_URL; ?>paymentcheck">
                <i class="fa fa-print fa-5x"></i>
                <h3>Payment Check</h3>      
            </a>    
        </div>
        <div class="col-sm-3 op">
            <a href="#">
                <i class="fa fa-clipboard fa-5x"></i>
                <h3>Payment Archive</h3>
            </a>
        </div>
        <div class="col-sm-2 op">
            <a href="<?php echo BASE_URL; ?>vacation">
                <i class="fa fa-file fa-5x"></i>
                <h3>Holidays</h3>
            </a>
        </div>
        <div class="col-sm-3 op">
            <a href="<?php echo BASE_URL; ?>hresoures">
                <i class="fa fa-database fa-5x"></i>
                <h3>Human Resources</h3>
            </a>
        </div>
        <div class="col-sm-3 op">
            <a href="<?php echo BASE_URL; ?>archive">
                <i class="fa fa-archive fa-5x"></i>
                <h3>Archive</h3>
            </a>
        </div>
        <div class="col-sm-2 op">
            <a href="<?php echo BASE_URL; ?>salarytracking">
                <i class="fa fa-address-card fa-5x"></i>
                <h3>Salary History</h3>
            </a>
        </div>
    </div>
</div>




<div class="scroll_top">
    <i class="fa fa-angle-double-up"></i>
</div>



</div><!--container -->