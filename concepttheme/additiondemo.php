<?php

/*

template name:- Addition Template


*/


?>
<?php
get_header();
?>

<section id="middle">
	<br><br>
<form action="" method="post">

<input type="text" name="txtnum1" placeholder="Enter First Number" />
<br>
<br>
<input type="text" name="txtnum2" placeholder="Enter Second Number" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Addition" />

</form>

<?php
if(isset($_REQUEST['btnsubmit']))
{
    $num1 = $_REQUEST['txtnum1'];
    $num2 = $_REQUEST['txtnum2'];
    $num3 = $num1+$num2;
    echo $num3;

}


?>

</section>

<?php

get_footer();

?>