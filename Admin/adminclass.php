<?php
require_once '../personclass.php';

class admin extends person 
{

public function addNewAdmin($username , $password){

	$username =$this->username;
	$password =$this->password;

		require_once '../database.php';
		$db = new Database();

		$select_user_SQL=" SELECT * FROM `login`  where usname ='$username' and type=1 ";
        $select_user_Result=  mysql_query($select_user_SQL);
      
        if(mysql_num_rows($select_user_Result)==1){

     echo "<script type='text/javascript'>
				         alert('$username is Exist please enter another one');
      				</script> ";
      				
      			}


      			else{

			$db->addNewAdmin($username,$password);

			echo "<script type='text/javascript'>
			         alert(' $username has been added successfully');
			         
  				</script> ";
header("Location: usersetting.php");

			}

		
	}
	public function add_room($r_type , $b_type)
{

require_once 'roomclass.php';
$r = new room($r_type , $b_type);

 

require_once 'database.php';

		$ds = new Database();

		$ds->add_Room($r_type , $b_type);

			echo "<script type='text/javascript'>
			         alert(' room is  added successfully');
			         
  				</script> ";
 //header("Location: admin/room.php");



}
public function admin_login()
{
$query = " SELECT * from login where usname = '$this->username' and pass = '$this->password' and type =1";
  $result = mysql_query($query) ; 

  if(mysql_num_rows($result) > 0 )
  {

  return true ;

  }
else 
    echo "<script type='text/javascript'>
                 alert('username or password invalid ');
              </script> ";


}
public function update($user ,$pass ,$id)
{

require_once '../database.php';
		$db = new Database();
   $res = $db->update_admin($user,$pass,$id) ;
		if($res == true)
		{
			echo' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';
			header("Location: usersetting.php");
		}else
		{
			echo' <script language="javascript" type="text/javascript"> alert("Error in updating") </script>';
		}

}
public function delete($id)
{

require_once '../database.php';
		$db = new Database();
   $res = $db->delete_admin($id) ;
		if($res == true)
		{
			echo' <script language="javascript" type="text/javascript"> alert("User name is deleted") </script>';
			header("Location: usersetting.php");
		}else
		{
			echo' <script language="javascript" type="text/javascript"> alert("Error in deleting!!!") </script>';
		}

}


}


?>