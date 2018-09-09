<?php
 error_reporting(E_ALL^E_DEPRECATED);
class DBController {
	
	
	
	
	
	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		//$conn = mysql_connect($this->host,$this->user,$this->password);
		$conn = mysql_connect("localhost","root","");
		return $conn;
	}
	
	function selectDB($conn) {
		mysql_select_db("eduspace",$conn);	}
	
	function runQuery($query) {
		$result = mysql_query($query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
}
?>