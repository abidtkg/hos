<?php
date_default_timezone_set('Asia/Dhaka');
$date = date('m/d/Y h:i:s a', time());
echo($date);
//print_r(time());
?>
<form action="test.php" mehod="POST">
    <input name="box" type="checkbox">
    <button name="submit" type="submit">submit</button>
</form>
<?php
    if(isset($_POST['submit'])){
        echo("E");
        echo($_POST['box']);
    }
?>