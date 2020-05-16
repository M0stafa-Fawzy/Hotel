<?php 

class Database
{
private $host ;  
private $user; 
private $password ; 
private $database ; 


  
public function connect(){

        $conn = mysqli_connect('localhost' , 'root' , '' , 'demo');

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

function close()
{

	mysql_close();
}

    public function addNewAdmin($username ,$password ){
        

        $conn = $this->connect();

        $q = "INSERT INTO login (usname , pass ,type) VALUES ('$username' , '$password', 1 )";

        $result = mysqli_query($conn,$q);

        
       
    }

    public function update_admin($newusernae ,$newpassword,$id)
    {
        require_once 'db.php' ;
   $upsql = "UPDATE `login` SET `usname`='$newusernae',`pass`='$newpassword' WHERE id = '$id'";
$res =mysqli_query($con,$upsql) ;
                    if($res)
                    {
                    return true ;
                }else
                {
                    return false ; 

                }


    }

public function add_Room($room_type , $bid_type)
{

$conn = $this->connect();


$q = "INSERT INTO room (type , bedding , place) VALUES ( $room_type , $bid_type , 'Free') " ;

$result = mysqli_query($conn,$q);

}





}

?>