<?php
namespace Eerison\Sqli;

class SqlTest
{
	private $con = null;
	public  $sql = null;

	public function __construct(\PDO $con)
	{
		$this->con = $con;
	}

	public function getObjectCon() : \PDO
	{
		return $this->con;
	}

	public function ListFail() : void
	{
		$this->sql = 'SELECT * from contato';

		foreach($this->con->query($this->sql) as $row) {
        	print_r($row);
    	}
	}

	public function findFail($id = null) : void
	{
		if(!$id)
			die('id não informado!');

		$this->sql = 'SELECT * from contato where id = ' . $id;

		foreach($this->con->query($this->sql) as $row) {

        	printf('name : %s ------- phone : %s<br /><br />', $row['name'], $row['phone']);  
    	}
	}

	public function insert()
	{
		$stmt = $this->con->prepare('INSERT INTO contato SET name=:name');
		for($i=0; $i<11000; $i++) {
			$stmt->execute(array(':name' => 'Test D_' . $i));
		}				
	}
}