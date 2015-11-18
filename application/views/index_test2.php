
<div class='display'>

	<table width="100%" bgcolor="white" cellpadding="4" cellspacing="4">
	
	<?php
		$width=100/count($data);	
		foreach($data as $key=>$val1)
		{
			echo "<td width='".htmlentities($width)."%'>
					<a href ='".htmlentities($val1)."'>
					<img src='pic/s-logo.gif' width='50' height='50' alt='".htmlentities($key)."' border='0' /></a>
					<a href='".htmlentities($val1)."><span class='menu'>$key</span>
					</a></td>
			";
		};
	?>
	</table>
	<table width="100%" bgcolor="red" cellpadding="12" cellspacing="0">
	<tr>
		<td>
			<p class="foot">&copy; ネーネー的汽車材料行</p>
			<p class="foot">請參訪我們 <a href="nene.php">Nene Information Page</a></p>
		</td>	
	</tr>
	</table>	
    
</div>


</body>
</html>