


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- New Page -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="theme-color" content="#8a2be2">

    <meta name="googlebot" content="noindex, nofollow">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        #M478305ScriptRootC736045 {
            min-height: 300px;
        }

        .social {
            position: sticky;
            top: 0;
            left: 0;
            z-index: 999;
            width: 100%;
            height: 50px;
            background-color: #9019ff;
            color: white;
            line-height: 50px;
            display: flex;
            justify-content: center;
            font-size: 18px;
            overflow: hidden;
            font-weight: 600;
            box-shadow: 0 0 6px 2px rgba(0, 0, 0, 0.2);
        }

        .social>div>a {
            color: white;
        }

        .grp {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            height: 50px;
            width: 100px;
            overflow: hidden;
        }

        .social-img {
            width: 25px;
            height: 25px;
            margin-bottom: 3px;
        }

        .icon {
            text-decoration: none;
            display: inline-block;
            height: 40px;
            text-align: center;
            line-height: 40px;
            width: 40px;
            background-color: rgb(255, 255, 255);
            border-radius: 50%;
            box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.15);
        }

        .refresh {
            position: fixed;
            bottom: 50px;
            right: 0;
            height: 32px;
            background: blueviolet;
            line-height: 30px;
            padding: 0 10px;
            border: 1px solid black;
            z-index: 100;
            border-right: none;
        }

        .refresh a {
            text-decoration: none;
            color: white;
        }
    </style>

    <title>Secret Message 2020</title>

    </head>

<body>

    <?php 
    require 'config.php';
        if(isset($_POST['sub'])){
            $name = $_POST['name'];
            $uid = md5($name);
            $uid = uniqid(substr($uid, 1, 5));
            
            $query = "INSERT INTO `user` (`name`, `uid`, `mobile`) VALUES ('$name', '$uid', '')";
            if(mysqli_query($conn, $query)){
                setcookie('userid', $uid, time() + (86400 * 30 * 12), "/");
                header("Location: result.php");
            }
        }
        else{
            if(isset($_COOKIE['userid'])){
                $uid = $_COOKIE['userid'];
                if(mysqli_num_rows(mysqli_query($conn, "SELECT ID FROM user WHERE uid = '$uid'"))){

                }
                else{
                    setcookie('userid', $uid, time() - 3600, "/");
                    header("Location: index.php");
                }
            }
            else{
                header("Location: index.php");
            }
        }
        

    ?>
    <div class="social">
    <span id="follow">😉 Let's connect 👉</span>
    <div class="grp">
        <span class="icon">
        <a href="https://www.instagram.com/asfgpr/" target="_blank">
                <img src="ig_img.png" alt="Instagram" class="social-img">
        </a>
        </span>
        <span class="icon">
        <a href="https://twitter.com/asfgpr" target="_blank">
                <img src="twitter_img.png" alt="Twitter" class="social-img">
        </a>
        </span>
    </div>
</div>
    <main>
        <?php require 'nav.php'; ?>
        <div class="container">
            <div class="row">
                <div class="card col-sm">
                                            <div class="password" style="display: none;">
                            <p>Please take a screenshot of these details</p>
                            <hr>
                            <ul id="pass">
                                <li><strong>User ID - </strong><span class="imp">132c09b1d1</span></li>
                                <li><strong>Pin - </strong><span class="imp">5914</span></li>
                            </ul>
                            <hr>
                            <p>You need these details to login from anywhere! PIN cannot be restored!</p>
                        </div>
                                        <h2 id="h2-result">Share this link with your friends and collect anonymous Messages</h2>
                    <div class="form-group"><input type="text" class="form-control " name="name" id="in-name" value="http://xyz.com/message.php?id=<?php echo $uid; ?>" required></div>
                    <div class="btn-group-vertical" role="group">
                        <button id="myInput" class="btn btn-block" onclick="myFunction()">Click to Copy</button>
                        <a href="whatsapp://send?text=Send%20secret%20message%20%F0%9F%98%81%20to%20alex%2C%20%20they%20will%20never%20know%20who%20sent%20them%20which%20message%20%F0%9F%98%9D.%20%0A%0AIt%27s%20fun%2C%20Try%20here%20%F0%9F%91%89%20http://xyz.com/message.php?id=<?php echo $uid; ?>" data-action="share/whatsapp/share" class="btn btn-block" id="whatsapp">Add to Whatsapp Story</a>
                        <button class="btn btn-block" id="tweet_bio" onclick="tweet_bio()">Add to Twitter BIO</button>

                    </div>
                    <div class="row" style="margin:10px 0px;">
                        <div class="col-sm d-flex justify-content-center">
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="center twitter-share-button" data-size="large" data-text="Send me a secret message. I will never know who sent me which message. Its fun, try here -" data-url="http://quizprank.xyz/message.php?id=<?php echo $uid; ?>" data-via="QuizPrank" data-hashtags="quizprank" data-related="TheRohitDas,Quizprank" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        </div>
                    </div>
                    <div class="info">
                        <p>
                            <span class="badge badge-danger">Important</span> Please <strong>allow</strong> notification to get notified about new messages.</br>
                            <span class="badge badge-success">New</span> To see <strong>newly received messages</strong>,Refresh and scroll down on this page. Only you will see the received messages. Have FUN!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card time col-sm">
                    <H2 id="messages_">Anonymous Message Timeline</H2>
                </div>
            </div>

            <div id="M478305ScriptRootC736045">
                <div id="M478305PreloadC736045"> Loading...
                </div>
                
            </div>


                <?php
                    $query1 = "SELECT `msg`, `time` FROM `message` WHERE `uid` = '$uid'";
                    if($result = mysqli_query($conn, $query1)){
                        if(mysqli_num_rows($result)){
                            $col = 1;
                            while($arr = mysqli_fetch_assoc($result)){
                                $col = $col==1?2:1;
                                ?>
                                <!-- when msg -->
                                <div class="row">
                                    <div class="card col-sm" style="margin:10px 10px;">
                                        <div class="row">
                                            <div class="card message<?php echo $col; ?>" style="font-family: 'Montserrat', sans-serif!important;font-weight:600!important;">
                                                <p class="text-center"><?php echo $arr['msg'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else{
                            ?>
                                <div class="row">
                                    <div class="card col-sm" style="margin:10px 10px;">
                                        <div class="row">
                                            <div class="card message1" style="font-family: 'Montserrat', sans-serif!important;font-weight:600!important;">
                                                <p class="text-center">No messages yet! share your link on whatsapp and twitter to receive messages.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div class="row">
                                <div class="card col-sm" style="margin:10px 10px;">
                                    <div class="row">
                                        <div class="card message1" style="font-family: 'Montserrat', sans-serif!important;font-weight:600!important;">
                                            <p class="text-center">ERROR.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>

                        <!-- Composite Start -->
            <div id="M478305ScriptRootC840543">
            </div>
            <!-- Composite End -->
        </div>
        </div>
        </div>
    </main>



    <!-- Modal -->
    



    <script>
        function myFunction() {
            var copyText = document.getElementById("in-name");
            copyText.select();
            document.execCommand("copy");
            alert("Link copied to clipboard! Paste it and have fun!");
        }

        /*https://www.instagram.com/accounts/edit/*/






        function ig() {
            var copyText = document.getElementById("in-name");
            copyText.select();
            document.execCommand("copy");
            alert("Link copied successfully!" + "\nNow paste it into your Instagram BIO.");
            window.open("https://www.instagram.com/accounts/edit/");
        }

        function tweet_bio() {
            var copyText = document.getElementById("in-name");
            copyText.select();
            document.execCommand("copy");
            alert("Link copied successfully!" + "\nNow paste it into your Twitter BIO, Twitter will open in new TAB");
            window.open("https://twitter.com/settings/profile");
        }
    </script>

    <div class="refresh">
        <a href="" id="ref" onclick="refresh()">Refresh Messages🔄</a>
    </div>
    <script>
        function refresh() {
            const ref = document.getElementById("ref");
            ref.innerHTML = "Refreshing....";
        }
    </script>
    <!-- Footer -->
<?php require 'footer.php'; ?>
<!-- Footer -->

<!-- Google Analytics Tag-->
<!-- Global site tag (gtag.js) - Google Analytics -->


</body>

</html>