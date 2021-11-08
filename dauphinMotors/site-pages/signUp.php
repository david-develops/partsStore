<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Dauphin Motor Company - Home Page</title>
        <meta name="author" content="David Hall">
        <meta name="description" content="A mock-up for a New Motor parts company website - to include product catalogs, description pages, order pages, login system, and more.">
        <meta property="og:image" content="img/dauphinLogo.jpg">
        <meta property="og:description" content="Dauphin Motor Company - Local Excellence.">
        <meta property="og:title" content="Dauphin Motor Company">
        <link rel="icon" href="../img/dauhpinLogoIcon.png" type="image/x-icon">
        <link rel="stylesheet" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include '../sections/header.html' ?>
        <main>
            <section id="sign-up-form-wrap" class="raleway account-form-wrap">
                <div class="account-form-header">Create an account</div>
                <form class="account-form" id="sign-up-form" action="../dbhandlers/newAcc.php" method="POST">
                    <label for="userName">Username : </label>
                    <input name="userName" type="text" placeholder="Username">
                    <label for="pass">Password : </label>
                    <input name="pass" type="text" placeholder="Password">
                    <label for="passRepeat">Repeat Password : </label>
                    <input name='passRepeat' type="text" placeholder="Re-enter Password">
                    <label for="email">E-mail Address : </label>
                    <input name='email' type="text" placeholder="E-mail address">
                    <label for="bDate">Birth Date : </label>
                    <input name='bDate' type="date">

                    <button class="sign-up-input account-form-button" type="submit" value="submit" name="submit" id="account-form-submit-button">Create Account</button>
                    
                </form>
                <?php
                        if(isset($_GET["error"])){
                            switch ($_GET['error']) {
                                case 'emptyInput':
                                    echo "<h3 class='sign-up-error'>Please ensure all fields are complete</h3>";
                                    break;
                                case 'userNameInvalid':
                                    echo "<h3 class='sign-up-error'>Please choose an acceptable Username</h3>";
                                    break;
                                case 'passwordsDoNotMatch':
                                    echo "<h3 class='sign-up-error'>Passwords didn't match</h3>";
                                    break;
                                case 'emailInvalid':
                                    echo "<h3 class='sign-up-error'>Please use a Valid E-mail</h3>";
                                    break;
                                case 'userNameTaken':
                                    echo "<h3 class='sign-up-error'>That Username is taken</h3>";
                                    break;
                
                                default:
                                echo "<h3 class='sign-up-error' >Something went wrong, try again.</h3>";
                                break;
                            }
                        }

                    ?>
            </section>
        </main>
        <?php include '../sections/footer.php'?>
        <script>
            function checkForm() {
            let form = document.forms.sign-up-form-wrap;
            let formData = new FormData(form);
            let submit = true;
            
            for(var pair of formData.entries()){
                if(pair[1] == ""){
                    alert('Please provide a ' + pair[0]);
                    return false;
                }
            }
            return true;
            }
        </script>
    </body>
</html>