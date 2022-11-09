<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="reset" href="reset.css">
        <link rel="stylesheet" href="addpost.css">
        <meta charset="utf-8">
        <title>Miniproject</title>


    </head>
    <body>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/
jquery.min.js"></script>
<script type="text/javascript">
 
    $("#title").keyup(function(event) {
        validateInputs();
    });
 
    $("#text").keyup(function(event) {
        validateInputs();
    });
 
    function validateInputs(){
        var disableSubmit = false;
 
        var val1 = $("#title").val();
        var val2 = $("#text").val();
 
        if(val1.length == 0 || val2.length == 0 )
            disableSubmit = true;
 
        $('#contact').attr('disabled', disableSubmit);
    }
</script>
<center>
<form name="addpost" id="addpost" action="/action_page.php">
    <label for="addblog">Add Blog</label><br>
    <input type="text" id="title" name="title" placeholder="Title"><br>
    <textarea id="text" name="text" placeholder="Enter your text here" style="height:200px"></textarea><br><br>
    <input type="submit" value="Post">
    <input type="reset" value="Clear">
</form>
   
Click here to <a href = "logout.php">Logout</a>
</center>



</body>

</html>