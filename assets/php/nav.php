<nav>
<a href="index.php">🔒 Secret Message 2020 😍</a>
<?php 
if(isset($_COOKIE['userid'])){
    $log = 1;
	?>
	<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
                Delete
            </button>
            <?php
}
else{
    $log = 0;
	echo '<a href="index.php" class="btn btn-outline-light">Create Link</a>';
}
?>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Important Notice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Are You Sure want to Delete Your Account ?<strong>After You will Not able to use this account and link.</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    <form action="delete.php" name="logout" method="post">
                        <input type="submit" value="Delete" class="btn" style="margin-left:auto;" name="del">
                    </form>
                </div>
            </div>
        </div>
    </div>