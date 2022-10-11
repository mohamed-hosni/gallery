<?php
class User{
public $username;
public $first_name;
public $last_name;
public $password;




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
        
        $result_set=mysqli_fetch_array($Result);
        return $result_set;
            }
            public static function find_this_query($sql){
                global $db;
                 $result_set=$db->query($sql);
return $result_set;
            }


}
?>