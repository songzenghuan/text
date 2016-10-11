<?php

cleanimg();
function cleanimg(){
	 $link = mysql_connect('118.244.236.60','qundong','qundong8765') or die('shujukulianjie!');
	mysql_select_db('qundongdata'); 
	//材料表	
	$result = mysql_query("select * from think_users where id=1");
	while($row =@mysql_fetch_assoc($result)){
		print_r($row);
		echo "<br />";
	}
}



