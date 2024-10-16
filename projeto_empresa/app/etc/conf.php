<?php
	// Mysql Parameters
	
	
	function getMysqlConnParamenters( $serverType ){
	
		$_MysqlConnParamenters["homologa"]["host"] 	= "144.217.39.54";
		$_MysqlConnParamenters["homologa"]["user"] 	= "hostdeprojetos";
		$_MysqlConnParamenters["homologa"]["pass"] 	= "ifspgru@2022";	
		$_MysqlConnParamenters["homologa"]["schema"] 	= "insira seu schema/database_name";
		$_MysqlConnParamenters["homologa"]["port"] 	= "3306";

		$_MysqlConnParamenters["deploy"]["host"] 	= "144.217.39.54";
		$_MysqlConnParamenters["deploy"]["user"] 	= "ifhostgru";
		$_MysqlConnParamenters["deploy"]["pass"] 	= "ifspgru@2024";	
		$_MysqlConnParamenters["deploy"]["schema"] 	= "insira seu schema/database_name";
		$_MysqlConnParamenters["deploy"]["port"] 	= "3306";
		
		if( $serverType  === "deploy"){
			return($_MysqlConnParamenters["deploy"]);
		}else{
			return($_MysqlConnParamenters["homologa"]);
		}
	
	}
	
	$mysql_parameter = getMysqlConnParamenters( "homologa" );

?>
