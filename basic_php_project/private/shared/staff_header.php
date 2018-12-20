<?php 
	if(!isset($page_title)){$page_title='Staff Area';
	}
 ?>

<!doctype html>

<html lang="en">
  <head>
    <title>GBI-<?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>"/>
  </head>
<header>
	<h1>GBI : STAFF AREA</h1>
</header>

<navigation>
<ul>
	<li>
		<a href="<?php echo WWW_ROOT . '/staff/index.php'; ?>">MENU</a>
		</li>
</ul>
</navigation>