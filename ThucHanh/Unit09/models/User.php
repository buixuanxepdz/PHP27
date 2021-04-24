<?php
	require_once('Model.php');

	class User extends Model{
		var $table = "users";	


		public function search($keyWord){
			$sql = "SELECT * FROM users WHERE name1 like '%". $keyWord . "%'";
			// echo $sql;
			// die();
			$result = $this->connection->query($sql);

			$search = array();

			while ($row = $result->fetch_assoc()) {
				$search[] = $row;
			}
			return $search;
		}
		
		}
?>