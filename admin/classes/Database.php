<?php


class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-06.cleardb.net", "be2703aa38ff97", "42423569", "heroku_1553afc4b8a3a75");
		return $this->con;
	}
}

?>
