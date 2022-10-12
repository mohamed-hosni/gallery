<?php
class User{
public $username;
public $first_name;
public $last_name;
public $password;
public $id;




public static function find_all_users(){
global  $db;

// $result_set= $db->query("select * from users");
$result_set=self::find_this_query(("select * from users"));
return $result_set;
    }

    public static function find_user_by_id($id){
        global  $db;
        
        //$result_set= $db->query("select * from users where `id`=$id limit 1");
        $Result=self::find_this_query("select * from users where id= $id");
        
        // $result_set=mysqli_fetch_array($Result);
        
        $the_object_array=array();
        while($row=mysqli_fetch_array($Result)){
        $the_object_array[]=self::inistatiation($row);
        return $the_object_array;
            }

        }
            public static function find_this_query($sql){
                global $db;
                 $result_set=$db->query($sql);
return $result_set;       

}

public static function inistatiation($the_record){
$the_object=new self;

// $the_object->id=$result['id'];
// $the_object->username=$result['username'];
// $the_object->first_name=$result['first_name'];
// $the_object->last_name=$result['last_name'];
// $the_object->password=$result['password'];


foreach ($the_record as $attribute => $value) {
if($the_object->has_the_attribute($attribute)){
$the_object->$attribute=$value;
}
}




return $the_object;
}

private function has_the_attribute($attribute){
    $object_properties=get_object_vars($this);
return array_key_exists($attribute,$object_properties);

}


}



?>