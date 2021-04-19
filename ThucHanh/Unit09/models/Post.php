<?php
	require_once('Model.php');

	class Post extends Model{
		var $table = "posts";
		
		public function get3Post(){
			$sql = "SELECT * FROM ".$this->table." INNER JOIN categories ON posts.category_id = categories.category_id ORDER BY id DESC LIMIT 3";

			$result = $this->connection->query($sql);

			$threePost = array();

			while ($row = $result->fetch_assoc()) {
				$threePost[] = $row;
			}
			return $threePost;

		}
		public function get2Post(){
			$sql = "SELECT * FROM ".$this->table." INNER JOIN categories ON posts.category_id = categories.category_id ORDER BY id DESC LIMIT 3,2";

			$result = $this->connection->query($sql);

			$twoPost = array();

			while ($row = $result->fetch_assoc()) {
				$twoPost[] = $row;
			}
			return $twoPost;

		}
		public function get6Post(){
			$sql = "SELECT * FROM ".$this->table." INNER JOIN categories ON posts.category_id = categories.category_id ORDER BY id DESC LIMIT 6";

			$result = $this->connection->query($sql);

			$get6Post = array();

			while ($row = $result->fetch_assoc()) {
				$get6Post[] = $row;
			}
			return $get6Post;

		}

		public function random(){
			$sql = "SELECT * FROM ".$this->table." INNER JOIN categories ON posts.category_id = categories.category_id ORDER BY RAND ( ) LIMIT 3";

			$result = $this->connection->query($sql);

			$random = array();

			while ($row = $result->fetch_assoc()) {
				$random[] = $row;
			}
			return $random;

		}
		public function viewcount(){
			$sql = "SELECT * FROM ".$this->table." INNER JOIN categories ON posts.category_id = categories.category_id WHERE view_count > 50";

			$result = $this->connection->query($sql);

			$viewcount = array();

			while ($row = $result->fetch_assoc()) {
				$viewcount[] = $row;
			}
			return $viewcount;

		}


	}
?>