<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
<style>
*{margin:0;padding:0}
</style>

</head>
<ul>  
<?php foreach($users as $user):?>  
  
<li><?php echo anchor('welcome/userDetails/'.$user->userid, $user->username);?></li>

<hr />
<?php endforeach;?>  
</ul>  

</body>
</html>