<?php
namespace Eerison\Sqli;

class Connection
{
	private $con = null;

	private function CreateCon() : \PDO
	{
		if(!$this->con) {
			 $con = new \PDO('mysql:host=db;dbname=silent', 'silent', 123456);
			 $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			 $this->con = $con;
		}

		return $this->con;
	}

	public function getConnection() : \PDO
	{
		return $this->CreateCon();
	}
}