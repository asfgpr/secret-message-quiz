
<!DOCTYPE html>
<html lang="en">
<head>

<script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        var c = getCookie('userid');
        var x = location.search;
        x = x.split("&");
        x = x[0].split("=");
        x = x[1];
        if (c == x) {
            window.location.href = location.protocol + "//" + location.hostname + "/" + "result.php?id=" + c;
        }
    </script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="apple-touch-icon" sizes="180x180" href="assets/files/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/files/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/files/favicon-16x16.png">
<link rel="mask-icon" href="assets/files/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#9f00a7">
<meta name="theme-color" content="#8a2be2">
<link rel="canonical" href="https://secretlymessages.in/message.php" />
<meta property="og:title" content="Send secret message to your friend via 🔒 Secret Messages 2020 😍">
<meta property="og:site_name" content="🔒 Secret Messages 2020 😍 || SecretlyMessages.in">
<meta property="og:url" content="http://SecretlyMessages.in/message.php">
<meta property="og:description" content="Send a secret message to your friend, have fun. Create your link and get secret messages. Click here!">
<meta property="og:type" content="website">
<meta property="og:image" content="assets/files/logo-square.png">
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Send secret message to your friends via  Secret Messages 2020  || SecretlyMessages.in" />
<meta name="twitter:description" content="Send a secret message to your friend, have fun. Click here!" />
<meta name="twitter:image" content="assets/files/logo-square.png" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
<script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>Send secret message to your friend via 🔒 Secret Messages 2020 😍 || secretlymessages.in</title>

</head>
<body>

<main>
<?php require 'assets/php/nav.php'; ?>
<div class="container">
<div class="row">
<div class="card col-sm message">
    <?php  
        if(isset($_GET['id'])){
            $uid = $_GET['id'];
            // echo $uid;
            require 'assets/php/config.php';
            $query = "SELECT del FROM user WHERE uid = '$uid'";
            if($result = mysqli_query($conn, $query))
            if(mysqli_num_rows($result)){
                $del = mysqli_fetch_assoc($result)['del'];
                if($del == 1){
    ?>
<form action="next.php" method="post" name="ans" id="ans">
<h2 style="margin-bottom: 25px;">Message <span class="name">your friend</span> Secretly 😉, he/she will never know who messaged him/her.😅</h2>
<input type="text" style="display:none;" class="form-control " name="name" id="in-name" value="<?php echo $uid; ?>">
<div class="form-group"><textarea for="ans" name="ans1" id="ans1" cols="30" class="form-control" rows="5" placeholder="Enter your secret message" minlength="1" required></textarea></div>
<div class="form-group"><input class="btn btn-block" type="submit" value="Send Secret Message 😎"></div>
</form>
    <?php 
                }
                else{
                    ?>
                    <h2 align='center'>This Account is Deleted !</h2>
                    <?php
                        if($log == 1){
                    ?>
                    <div style="text-align:center; margin-bottom:10px;">You Are Already Registered.</div>
                    <div class="form-group"><a href="result.php" class="btn btn-block btn-outline-light" id="instagram">Check Your Message.</a></div>
                    <?php
                        }
                        else{
                    ?>
                    <form action="result.php" method="post">
                        <h2>Your Name:</h2>
                        <div class="form-group"><input type="text" class="form-control " name="name" id="in-name" placeholder="Full Name" required=""></div>
                        <div class="form-group"><input class="btn btn-block" type="submit" id="sub" name="sub" value="Create your Link 🤟"></div>
                    </form>
                    <?php
                        }
                }
            }
            else{
    ?>
    <h2 align='center'>INVALID LINK</h2>
    <?php
        if($log == 1){
    ?>
    <div style="text-align:center; margin-bottom:10px;">You Are Already Registered.</div>
    <div class="form-group"><a href="result.php" class="btn btn-block btn-outline-light" id="instagram">Check Your Message.</a></div>
    <?php
        }
        else{
    ?>
    <form action="result.php" method="post">
        <h2>Your Name:</h2>
        <div class="form-group"><input type="text" class="form-control " name="name" id="in-name" placeholder="Full Name" required=""></div>
        <div class="form-group"><input class="btn btn-block" type="submit" id="sub" name="sub" value="Create your Link 🤟"></div>
    </form>
    <?php
        }
            }
        }
        else{
    ?>
    <h2 align='center'>INVALID LINK</h2>
    <?php
        if($log == 1){
    ?>
    <div style="text-align:center; margin-bottom:10px;">You Are Already Registered.</div>
    <div class="form-group"><a href="result.php" class="btn btn-block btn-outline-light" id="instagram">Check Your Message.</a></div>
    <?php
        }
        else{
    ?>
    <form action="result.php" method="post">
        <h2>Your Name:</h2>
        <div class="form-group"><input type="text" class="form-control " name="name" id="in-name" placeholder="Full Name" required=""></div>
        <div class="form-group"><input class="btn btn-block" type="submit" id="sub" name="sub" value="Create your Link 🤟"></div>
    </form>
    <?php
        }
        }
    ?>
</div>
</div>

<!-- <div id="M478305ScriptRootC840544">
</div> -->


<div class="row">
<div class="card col-sm" style="margin:20px 10px;">
<ul>
<li>Message <span class="name">your friend</span> anonymously, they will never know who sent the message.🤗😍</li>
<li>This website is just for fun😜. Do not go out of your way to spread hate.🙅‍♂️🙅‍♀️</li>
</ul>
</div>
</div>
</div>
</div>
</main>

<?php require 'assets/php/footer.php'; ?>

</body>
</html>