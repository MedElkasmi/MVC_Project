<?php 


require_once './init.php';
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';


$home = new HomeController();
        $pages = [
            'home',
            'add',
            'delete',
            'update',
            'vacation',
            'salarytracking',
            'hresoures',
            'content',
            'paymentcheck',
            'newadmin',
            'admins',
            'logout',
            'register',
            'archive',
            'adminlist'
        ];

            if(isset($_SESSION['logged']) && $_SESSION['logged'] === true ){
                if(isset($_GET['page'])){
                    if(in_array($_GET['page'],$pages)){
                        $page = $_GET['page'];
                        $home->index($page);
                    }
                    
                    else {
                        include('views/includes/404.php');
                    } 
                }

            }

            elseif(isset($_SESSION['username'])){
                $home->index('register');
            }

            else{
                $home->index('login');
            }
            
            
            require_once './views/includes/footer.php';

?>