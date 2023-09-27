<?php
    if (isset($_POST["subEnter"]))
    {
        $name = $_POST["txtName"];
        $date_time = date("n/j/y g:i:s a");
        $comments = $_POST["txtAreaComments"];
        $entry = $_POST["txtAreaComments"];
        $fguestbook = fopen(
            "e:/ectserver/sjost/Database/guestbook.txt", "a");
        fwrite($fguestbook, $name . " " . $date_time . "\r\n");
        fwrite($fguestbook, $entry . "\r\n");
        fclose($fguestbook);

        // Redirect to Guestbook Homepage.
        header("Location: guestbook-home.htm");
        exit;
    }
?>

<!--  File: add-to-guestbook.php

      Write comments to guestbook file,
      then redirect to Guestbook Homepage.
-->

<html>

<head>
<title>Guestbook Example</title>
<link rel="stylesheet" type="text/css" href="../styles.css">
</head>

<body>

<h2>Guestbook Example</h2>

<h3>Add to Guestbook</h3>

 <p>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<p><input type="text" name="txtName" size="15" value="" />

<p>Enter your guestbook comments here:</p>

<p><textarea rows="10" cols="40" name="txtAreaComments">
</txtarea></p>

<p><input type="submit" name="subEnter" 
          value="Enter Guestbook Comments"></p>
</form>

</body>
</html>
