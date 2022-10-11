<?php
class User{


public static function find_all_users(){
global  $db;

$result_set= $db->query("select * from users");
return $result_set;
    }

    public static function find_user_by_id($id){
        global  $db;
        
        $result_set= $db->query("select * from users where `id`=$id limit 1");
        $Result=mysqli_fetch_array($result_set);
        return $Result;
            }


}
?>