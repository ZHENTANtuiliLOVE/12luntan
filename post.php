
<?php

session_start();

if(isset($_SESSION['username']))

{
    ?>
     <html>
     <head>
     <title>Post</title>
     </head>
     <body>
     <form method="post" action="post_submit.php">
     <textarea name="post_content" rows="10" cols="50"></textarea><br><br>
     <input type="submit" value="Post">
     </form>
     </body>
     </html>
     <?php
}

else

{
    header("Location: login.php");
}

?>
<!-- This code is used to create a post form for users to submit their ideas or thoughts. -->       

