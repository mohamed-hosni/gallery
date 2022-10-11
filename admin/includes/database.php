<?php
require_once'config.php';


class dataBase{

public $connection;

function __construct(){
$this->open_DB_connection();

}

public function open_DB_connection(){
$this->connection=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($this->connection->connect_errno){
    die("that is no Connection occured " .$this->connection->connect_error);
}
else{

}
}

public function query($sql){
$result= $this->connection->query($sql);
//$this->connection->$this->confirm_query($result);
// $this->connection->$this->escape_string($result);
return  $result;
}

public function confirm_query($result){
    if(!$result){
        $this->connection->error;
    }
    else{
      var_dump("yes
       yes 
       yes yes
        yes 
        ")  ;
    }
}
public function escape_string($string){
$escaped_string= $this->connesction->escape_string($string);
return  $escaped_string;
}

public function insert_id(){
    $this->connection->insert_id;
}

}



?>

<?php


$db=new dataBase();

?>