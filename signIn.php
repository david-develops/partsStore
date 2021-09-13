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
    <link rel="icon" href="img/dauhpinLogoIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/sections/header.html' ?>
    <main>
        <section   id="sign-in-form-wrap" class="raleway account-form-wrap">
            <div class="account-form-header">Log-In</div>
            <form method="POST" class="account-form" id="sign-in-form" action="login.inc.php">
                <label for="userName">Username : </label>
                <input class="sign-in-input" name="userName" type="text" placeholder="Username">
                <label for="pass">Password : </label>
                <input class="sign-in-input" name="pass" type="text" placeholder="Password">
                <button class="sign-in-input account-form-button" type="submit" value="submit" name="submit" id="account-form-submit-button">Log-In</button>
            </form>
        </section>
    </main>
    <?php include 'includes/sections/footer.html'?>
</body>
</html>