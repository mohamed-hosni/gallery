<?php

 class Session{
    private $signed_in= false;
    public $user_id;
    function __construct()
    {
        session_start();
        $this->check_login();
    }

    private function check_login(){

        if(isset($_SESSION['user_id'])){
$this->user_id=$_SESSION['user_id'];
$this->signed_in=true;
        }
    else{
       unset($this->user_id);
       $this->user_id=false;;

    }
}
public function  is_signed_in(){
    return $this->signed_in;   
}

public function login($user){
if($user){
    $this->user_id =$session['user_id']=$user->id;
    $this->signed_in=true;
}

}

public function logout($user){
    if($user){
       unset($this->user_id); unset($_SESSION['user_id']);
        $this->signed_in=false;
    }
    
    }
 }


$session=new Session();
$session->is_signed_in();
?>