<!DOCTYPE html>
<html lang="en"><head>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="verify-admitad" content="39f980aeb7">
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#9f00a7">
<meta name="theme-color" content="#8a2be2">
<style>
    .banner {
      width: 100%;
      height: auto;
      min-height: 30px;
      background-color: green;
      color: white;
      padding: 10px;
    }

    .p {
      font-size: 10px;
      font-weight: 600;
    }
  </style>
<meta property="og:title" content="Send secret message to your friends via 🔒 Secret Messages 2020 😍 || QuizPrank.xyz">
<meta property="og:site_name" content="🔒 Secret Messages 2020 😍 || QuizPrank.xyz">
<meta property="og:url" content="http://quizprank.xyz">
<meta property="og:description" content="Send a secret message to your friend, have fun. Create your link and get secret messages. Click here!">
<meta property="og:type" content="website">
<meta property="og:image" content="logo-square.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script defer="" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script defer="" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>🔒 Secret Messages 2020 😍 || QuizPrank.xyz</title>
</head>
<body>

<main>

<?php require 'nav.php'; ?>

<div class="container">
<div class="row">
<div class="card col-sm">
                    <div class="tick">
                        <img src="logo-square.png" alt="tick" style="width:100px;height:100px;border-radius:50%;">
                    </div>
                    <?php  
                      if(isset($_POST['name'])){
                        $uid = $_POST['name'];
                        $msg = $_POST['ans1'];
                        require 'config.php';
                        $query = "INSERT INTO message (uid, msg) VALUES('$uid', '$msg')";
                        if(mysqli_query($conn, $query)){
                          echo '<h2 id="hh">Thanks for writing the secret message for <span id="name">your friend</span>. 🤩😍</h2>';
                        }
                      }
                      if(isset($_COOKIE['userid'])){
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
                  <?php } ?>
                    
                </div>
</div>
<br>
<div class="row">
<div class="card col-sm">

<div id="M478305ScriptRootC843543_07b63">



</div>
</div>
</div>

</main>

<?php require 'footer.php'; ?>





</body></html>