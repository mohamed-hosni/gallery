<div class="container-fluid">

               
<?php //include 'database.php'
//require 'database.php'


?>
<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>

                        <?php 
                        if($db->connection){
                        echo 'true';
                    }else{
                        echo 'false';
                    }

$sql='SELECT * FROM `users`';

/* this code is very true;
$result=$db->connection->query($sql);
$user_found=mysqli_fetch_array($result);
print_r($user_found);

*/

// $user=new User();
// $result=User:: find_all_users();
// $result_set=mysqli_fetch_array($result);
// print_r($result_set);
$user=new User();
$result=User::find_user_by_id(2);
 //$user->username=$result['username'];
 $user_object=User::inistatiation($result);
 echo "<BR><BR>";

 echo $user_object->username;
echo "<BR><BR>";
echo $user_object->password;
echo "<BR><BR>";
echo $user_object->id;
echo "<BR><BR>";
echo $user_object->first_name;
echo "<BR><BR>";
echo $user_object->last_name;



// $user =new User();
// $result=$user->find_all_users();
// $result_set=mysqli_fetch_array($result);



                        ?>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>