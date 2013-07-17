<?php 
$temp = "Name Ravi Teja"
?>
<form method=post action="#">
<input type="text" name="test" placeholder="<?php echo $temp; ?> ">
<input type = submit value = "submmit">
</form>
<?php
echo $_POST['test'];
if($_POST['test'] == "")
{
	echo "notset";
}
?>

