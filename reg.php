<?php
/*
odbc方式连接sqlserver数据库 
*/

	$dbserver = "127.0.0.1";
	$DATABASE_USER = "sa";
	$DATABASE_PASS = "123456";
	$DATABASE_NAME = "test";
 
 
	$conn_sqlserver = odbc_connect("Driver={SQL Server Native Client 10.0};Server=$dbserver;Database=$DATABASE_NAME;", $DATABASE_USER, $DATABASE_PASS);
 
	if (!$conn_sqlserver) {
		echo "error ";
	}else{
		
		echo "conn ok";
	}
 $query = "insert into users values('$_POST[username]','$_POST[idcard]','$_POST[telphone]','$_POST[email]')";
 echo $query;
 	$cursor = odbc_exec($conn_sqlserver, $query);
 
	if (!$cursor) {
	    	echo "error";
	}else{
		echo "注册成功";
	}
 
 /*
	$query = "select sn, CTIME from INOUT";
	$cursor = odbc_exec($conn_sqlserver, $query);
 
	if (!$cursor) {
	    	echo "error";
	}else{
		echo "query ok";
	}
 
	while ($ROW = odbc_fetch_row($cursor)) {
		echo odbc_result($cursor,2) ."<BR>";
	}
*/
?>
