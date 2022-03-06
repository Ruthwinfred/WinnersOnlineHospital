<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="eng">
<!-- Head starts here -->
<head>
    <title>Winners Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Ruth Winfred"/>
        <!-- Description -->
        <meta name="description" content="Myhospital"/>
        <!-- Keywords -->
        <meta name="keyword" content="Html,css, JavaScript, Bootstrap, PHP, MySQL"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styless.css"/>
</head>
<!-- Head ends here -->
<body class="bodi">
<?php include('errors.php'); ?>
    <div class="row">
        <div class="container">
<form method="post" action="" id="contact">
<h3> Winners Online Hospital</h3>  
    <h4><i class="fa">&#xf2be;</i>Admin access</h4>
    <fieldset>
    <input type="text" name="username" placeholder="Enter username">
</fieldset>
<fieldset>
    <input type="password" name="password" placeholder="Enter your password .....">
</fieldset>
   <button type="submit" id="but" name="ent">Let me in</button>
</form>

</div>
</div>
</body>
</html>