<header class="raleway">
    <?php 
    $dirLevel;

    //code within if stmt below shows account create success message on page load if detected
    if(isset($_GET["create"])){
            if($_GET["create"]== 'success'){
                echo '<div class="account-success" ><h3>Account Created</h3></div>';
            }
        }
    //code within if stmt below detects where in dir hierarchy we are and adjusts href attr's accordingly to prevent dead links by broken reference

    if(str_contains(getcwd(),'site-pages')){
        $dirLevel=1;
    }else{
        $dirLevel=0;
    }

    //testing stmt for dev only
    /*
    echo '<pre>';
    echo $dirLevel;
    echo '</pre>';
    */

    ?>
    <h1 id="header-title"><a class="header-title-link" href=<?php echo($dirLevel>0)? '../index.php':'#'?>>Dauphin Motor Company</a></h1>
    <nav>
        <ul id="nav-links">
            <li> <a href=<?php echo($dirLevel>0)? '../index.php':'#'?>>Home</a></li>
            <li> <a href=<?php echo($dirLevel>0)? 'parts.php':'site-pages/parts.php'?>>Parts</a></li>
            <li> <a href=<?php echo($dirLevel>0)? 'about.php':'site-pages/about.php'?>>About Us</a></li>
        </ul>
        <ul id="account-control-wrap">
            <li><a href=<?php echo($dirLevel>0)? 'signIn.php':'site-pages/signIn.php'?>><span class='account-control' id="sign-in"><img src="<?php echo($dirLevel>0)? '../img/userIcon.png':'img/userIcon.png'?>" alt="User ">Sign In</span></a></li>
            <li><a href=<?php echo($dirLevel>0)? 'signUp.php':'site-pages/signUp.php'?>><span class='account-control' >Create Account</span></a></li>
        </ul>
    </nav>

</header>