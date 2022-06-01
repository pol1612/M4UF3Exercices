<?php

/**
 * Main PDO wrapper class.
 */
class PDOWrapper
{
	private $host = '127.0.0.1';
	private $port = 3306;
	private $dbname = '';
	private $user = 'root';
	private $pass = '';
	private $errorMode = PDO::ERRMODE_WARNING;
	private $charset = 'utf8';
	
	private $pdo; // Db handler
	private $pdoStatement; // Statement object
	
	/**
	 * Main constructor.
	 * 
	 * @param Array $params Db connection params
	 */
	public function __construct(array $options = array()) {
		$host 		= isset($options['host']) ? $options['host'] : $this->host;
		$port 		= isset($options['port']) ? $options['port'] : $this->port;
		$dbname 	= isset($options['dbname']) ? $options['dbname'] : $this->dbname;
		$user 		= isset($options['user']) ? $options['user'] : $this->user;
		$pass 		= isset($options['pass']) ? $options['pass'] : $this->pass;
		$errorMode 	= isset($options['errorMode']) ? $options['errorMode'] : $this->errorMode;
		$charset 	= isset($options['charset']) ? $options['charset'] : $this->charset;
		try {
			$db = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$dbname, $user, $pass);
			$db->setAttribute(PDO::ATTR_ERRMODE, $errorMode);
			$db->exec("set names {$charset}");
		} catch (PDOException $e) {
			trigger_error('DataBase error: ' . $e->getMessage(), E_USER_ERROR);
		}
		$this->pdo = $db;
	}
	
	/**
	 * PDO prepare.
	 * 
	 * @param String $query
	 * 
	 * @return PDOWrapper
	 */
	public function prepare($query) {
		$this->pdoStatement = $this->pdo->prepare($query);
		return $this;
	}
	
	/**
	 * PDO bindValue.
	 * 
	 * @param String $name
	 * @param String  $value
	 * @param int $type
	 * 
	 * @return PDOWrapper 
	 */
	public function bindValue($name, $value, $type = PDO::PARAM_STR) {
		$this->pdoStatement->bindValue($name, $value, $type);
		return $this;
	}
	
	/**
	 * PDO bindValues for array of values.
	 * 
	 * @param Array $binds
	 * Array (
	 *   array(':id', 2, PDO::PARAM_INT),
	 *   array(':name', 'James', PDO::PARAM_STR),
	 *   ...
	 * )
	 * 
	 * @return PDOWrapper
	 */
	public function bindValues(array $binds) {
		foreach($binds as $valuesArray) {
			$this->bindValue($valuesArray[0], $valuesArray[1], (isset($valuesArray[2]) ? $valuesArray[2] : PDO::PARAM_STR));
		}
		return $this;
	}
	
	/**
	 * PDO execute.
	 * 
	 * @return PDOWrapper
	 */
	public function execute() {
		try {
			$this->pdoStatement->execute();
		} catch (PDOException $e) {
			trigger_error('DataBase error: ' . $e->getMessage(), E_USER_ERROR);
		}
		return $this;
	}
	
	/**
	 * PDO fetch.
	 * 
	 * @param int $type
	 * 
	 * @return Array|false
	 */
	public function fetch($type = PDO::FETCH_BOTH) {
		return ($this->pdoStatement) ? $this->pdoStatement->fetch($type) : false;
	}
	
	/**
	 * PDO fetchAll.
	 * 
	 * @param int $type 
	 * 
	 * @return Array|false
	 */
	public function fetchAll($type = PDO::FETCH_BOTH) {
		return ($this->pdoStatement) ? $this->pdoStatement->fetchAll($type) : false;
	}
	
	/**
	 * PDO query.
	 * 
	 * @param String $query
	 * 
	 * @return PDOWrapper 
	 */
	public function query($query) {
		try {
			$this->pdoStatement = $this->pdo->query($query);
		} catch (PDOException $e) {
			trigger_error('DataBase error: ' . $e->getMessage(), E_USER_ERROR);
		}
		return $this; 
	}
	
	/**
	 * PDO lastInsertId.
	 * 
	 * @return String Last inserted ID
	 */
	public function lastInsertId() {
		return $this->pdo->lastInsertId();
	}
	
	/**
	 * PDO rowCount.
	 * 
	 * @return int|false
	 */
	public function rowCount() {
		return ($this->pdoStatement) ? $this->pdoStatement->rowCount() : false;
	}
}


/**
 * DBAL over PDOWrapper realization.
 */
class DBAL
{
	
	/**
	 * PDOWrapper link.
	 * 
	 * @var PDOWrapper
	 */
	private $pdo;
	
	/**
	 * Default constructor.
	 * 
	 * @param PDOWrapper $pdo 
	 */
	public function __construct(PDOWrapper $pdo) {
		$this->pdo = $pdo;
	}
	
	
	/**
	 * Select data ifrom DataBase.
	 * 
	 * @param Array $dataArr
	 * Array (
	 *   array('id', 2, PDO::PARAM_INT),
	 *   array('name', 'James', PDO::PARAM_STR),
	 *   ...
	 * )
	 * @param String $table
	 * @param Array $whereArr
	 * Array (
	 *   array('id', 2, PDO::PARAM_INT),
	 * )
	 * @param int $limit
	 * 
	 * @return Array|false
	 */
	function select($dataArr, $table, array $whereArr = array(), $limit = 1000){
		
		$fields = $params = $values = $where = array();
		
		if(is_array($dataArr)){
			foreach($dataArr as $data){
				$fields[] = "{$data[0]}";
			}
		}
		
		$i = 0;
		foreach($whereArr as $wData){
			$i++;
			$where[] = "`{$wData[0]}` = :{$wData[0]}{$i}";
			$values[] = array(":{$wData[0]}{$i}", $wData[1], (isset($wData[2]) ? $wData[2] : PDO::PARAM_STR));
		}

		$fields = count($fields) ? implode(',', $fields) : '*';
		$whereStr = count($where) ? 'WHERE '.implode(' AND ', $where) : '';

		$sql = "SELECT {$fields} FROM `{$table}` {$whereStr} LIMIT {$limit}";
		$this->pdo->prepare($sql)->bindValues($values)->execute();
		return $this->pdo->fetchAll();
	}

	/**
	 * Inserts data into DataBase.
	 * 
	 * @param String $table
	 * @param Array $data
	 * Array (
	 *   array('id', 2, PDO::PARAM_INT),
	 *   array('name', 'James', PDO::PARAM_STR),
	 * )
	 * 
	 * @return int|false Inserted ID or false
	 */
	function insert($table, array $dataArr){
		$fields = $params = $values = array();
		foreach ($dataArr as $data) {
			$fields[] = "`{$data[0]}`";
			$params[] = ":{$data[0]}";
			$values[] = array(":{$data[0]}", $data[1], (isset($data[2]) ? $data[2] : PDO::PARAM_STR));
		}

		$fields = implode(',', $fields);
		$params = implode(',', $params);

		$sql = "INSERT INTO `{$table}` ({$fields}) VALUES ({$params})";
		$this->pdo->prepare($sql)->bindValues($values)->execute();
		return $this->pdo->lastInsertId();
	}
	
	/**
	 * Updates data in DataBase.
	 * 
	 * @param String $table
	 * @param Array $dataArr
	 * Array (
	 *   array('id', 2, PDO::PARAM_INT),
	 *   array('name', 'James', PDO::PARAM_STR),
	 *   ...
	 * )
	 * @param Array $whereArr
	 * Array (
	 *   array('id', 2, PDO::PARAM_INT),
	 * )
	 * @param int $limit
	 * 
	 * @return int Affected rows count
	 */
	function update($table, array $dataArr, array $whereArr = array(), $limit = 1){
		$fields = $params = $values = $where = array();
		foreach($dataArr as $data){
			$fields[] = "`{$data[0]}` = :{$data[0]}";
			$values[] = array(":{$data[0]}", $data[1], (isset($data[2]) ? $data[2] : PDO::PARAM_STR));
		}
		$i = 0;
		foreach($whereArr as $wData){
			$i++;
			$where[] = "`{$wData[0]}` = :{$wData[0]}{$i}";
			$values[] = array(":{$wData[0]}{$i}", $wData[1], (isset($wData[2]) ? $wData[2] : PDO::PARAM_STR));
		}

		$fields = implode(',', $fields);
		$whereStr = count($where) ? 'WHERE '.implode(' AND ', $where) : '';

		$sql = "UPDATE `{$table}` SET {$fields} {$whereStr} LIMIT {$limit}";
		$this->pdo->prepare($sql)->bindValues($values)->execute();
		return $this->pdo->rowCount();
	}
	
	/**
	 * Removes data from DataBase.
	 * 
	 * @param String $table
	 * @param Array $dataArr
	 * Array (
	 *   array('id', 2, PDO::PARAM_INT),
	 *   array('name', 'James', PDO::PARAM_STR),
	 *   ...
	 * )
	 * @param int $limit
	 * 
	 * @return int Affected rows count
	 */
	function delete($table, array $dataArr, $limit = 1){
		foreach($dataArr as $data){
			$fields[] = "`{$data[0]}` = :{$data[0]}";
			$values[] = array(":{$data[0]}", $data[1], (isset($data[2]) ? $data[2] : PDO::PARAM_STR));
		}

		$fields = implode(' AND ', $fields);

		$sql = "DELETE FROM `{$table}` WHERE {$fields} LIMIT {$limit}";
		$this->pdo->prepare($sql)->bindValues($values)->execute();
		return $this->pdo->rowCount();
	}
	
	/**
	 * Inserts multiple data into DataBase.
	 * 
	 * @param String $table
	 * @param Array $dataArr
	 * Array (
	 *   array (
	 *     array('id', 2, PDO::PARAM_INT),
	 *     array('name', 'James', PDO::PARAM_STR),
	 *   ),
	 *   ...
	 * )
	 * 
	 * @return int|false Last inserted ID or false
	 */
	function insertMulti($table, array $dataArr){
		$i = 0;
		$fields = array();
		foreach($dataArr as $data){
			$placeholders = array();
			foreach($data as $rowData){
				$i++;
				if(!in_array("`{$rowData[0]}`", $fields)) {
					$fields[] = "`{$rowData[0]}`";
				}
				$placeholders[] = ":{$rowData[0]}{$i}";
				$values[] = array(":{$rowData[0]}{$i}", $rowData[1], (isset($rowData[2]) ? $rowData[2] : PDO::PARAM_STR));
			}
			$params[] = '(' . implode(',', $placeholders) . ')';
		}

		$fields = implode(',', $fields);
		$params = implode(',', $params);

		$sql = "INSERT INTO `{$table}` ({$fields}) VALUES {$params}";
		$this->pdo->prepare($sql)->bindValues($values)->execute();
		return $this->pdo->lastInsertId();
	}
}

