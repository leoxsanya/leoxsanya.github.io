<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?= $title?></title>
<link rel='stylesheet' href='style.css'> 
</head>
<body>

<div class='menu'>
	<h1>Hello~<?= $name?><br/></h1>
    <a href='<?php $_SERVER['PHP_SELF'] ?>'>重新整理</a> 
	<br/>
	<br/>
	<br/>
	<table width="100%" cellpadding="12" cellspacing="0" border="0">
	<tr bgcolor="black">
		<td align="left"><img src="pic/logo.gif" height="80" width="100" /></td>
		<td>
			<h1><?= $title?></h1>
		</td>
		<td align="right"><img src="pic/logo.gif" height="80" width="100" /></td>
	</tr>
	</table>
</div>