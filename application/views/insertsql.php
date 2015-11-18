<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>新增資料到資料庫範例</title>
</head>
<body>
<center>
    <form action="insertdata/insert" method="post">
    
    <table border="0">
	<tr bgcolor="#cccccc">
		<td width="50">欄位一</td>
		<td width="50">欄位二</td>
	</tr>
	<tr>
		<td>帳號：</td>
		<td align="left"><input type="text" name="user" size="10" maxlength="8"/>
	</td>
	</tr>
	<tr>
		<td>密碼：</td>
		<td align="left"><input type="password" name="password" size="10" maxlength="8"/>
	</td>
	</tr>
    <tr>
		<td colspan="1" align="left"><input name="submit" type="submit" value="新增帳號"/>
		</td>
		<td colspan="2" align="left"><input name="submit" type="submit" value="刪除帳號"/>
		</td>
	</tr>
    </form>
</center>
</body>
</html>