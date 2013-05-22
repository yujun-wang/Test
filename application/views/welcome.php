<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Congratulations!</title>
  </head>
  <body>
	<h2>Welcome <?php echo $_SESSION['user']['username']; ?>!</h2>
	<a href="users/logout">Logout</a>
	<a href="notes/create_menu">Menus</a>
  </body>
</html>