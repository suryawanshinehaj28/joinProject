<?php
require_once("dbconnection.php"); 
class user_class extends class_MysqlConnection{

	private $conn;

	function __construct(){
		$this->conn=$this->dbconnection();

	}

	
	
	public function UserDataInsert($data){
       $DataSet = array();
       $tables = $data['Tables'];
       $table = array_values($tables);
       
       $tablesIds = $data['TableId'];
       $tablesId = array_values($tablesIds);
       $columns = $data['Columns'];
       $column = array_values($columns);
       /*foreach($tables as $tblName){
       	
       	$mainTable[] = $tblName;
       	//print_r($mainTable);
       	//break;
       }
       $index = 0;*/
       //$mainTable = $tables;
       $field = array();

        foreach ($column as $val) {
		      $column[] = "". $val. "";
		    }

		   
		   $columns = join(',', $column);

           $mainTable = $table[0];
	       $mainTableID = $tablesId[1];

           $sql = 'SELECT * FROM '.$mainTable.' ';

			for ($i = 1; $i<count($table); $i++){ 
			    $curTable = $table[$i];
			    $joinField = $tablesId[$i-1];
			    $sql.= 'INNER JOIN '.$curTable.' 
			            ON '.$mainTable.'.'.$joinField.' = '.$curTable.'.'.$joinField.' WHERE 1 ORDER BY '.$mainTable.'.'.$mainTableID.' ASC'; 
			}

			$SQLQUERY = mysqli_query($this->conn,$sql);
					while ($rs = mysqli_fetch_array($SQLQUERY)) {
						$DataSet[] = $rs;
					}
					return $DataSet;
				

				
				}


}

$objProject = new user_class();
if(isset($_REQUEST['page_action'])) {

	
}
?>