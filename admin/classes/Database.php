<?php


class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-06.cleardb.net", "b418eaaffbbae2", "261f9bfb", "heroku_8ad4d708550d9cd");
		return $this->con;
	}
}

?>
