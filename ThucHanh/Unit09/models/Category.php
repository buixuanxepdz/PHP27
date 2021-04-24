<?php
	require_once('Model.php');

	class Category extends Model{
		var $table = "categories";
		
		public function getCategory(){
			$sql = "SELECT * FROM ".$this->table;
			$result = $this->connection->query($sql);

			$getCategory = array();

			while ($row = $result->fetch_assoc()) {
				$getCategory[] = $row;
			}
			return $getCategory;

		}
		public function search($keyWord){
			$sql = "SELECT * FROM posts WHERE name like '%". $keyWord . "%'";
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