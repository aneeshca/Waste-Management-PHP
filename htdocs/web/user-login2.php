<html>
<head>
</head>
<body>
<dvi>
<?php
if (isset($_POST['confirm'])) {
    if ($_POST['confirm'] == 'Yes') {
        header("Location:edit.php?id=1");
    }
    else if ($_POST['confirm'] == 'No') {
        header("goBack.php");
    } 
}
?>

<form method="POST">
<?php
if(isset($_REQUEST['id']))
{
?>
<input type="submit" name="confirm" value="Yes"><br/>
<input type="submit" name="confirm" value="No"><br/>
<?php
}
?>
</form>
</dvi>
<a onClick="$('deletefromtable').show();"></a>
<div id="deletefromtable" style="display:none;">
 Do you really want to do this?<br/>
 <a href="deleteit.php">Yes</a>|<a onClick="$('deletefromtable').hide();">No</a>
</div>