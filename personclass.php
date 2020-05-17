<?php


class person 
{
protected $username ; 
protected $password ;
protected $email ; 
protected $name ; 


private $cxn ; 

public function __construct($username1,$password1,$email)
{
$this->setData($username1 , $password1, $email) ; 

$this->connecttodb();

//$this->getDate();



}

private function setData($username , $password , $email)
{

  $this->username=$username ; 
  
  $this->password=$password ; 
  
  $this->email=$email ;

}

private function connecttodb()
{
  require_once 'database.php';
  $vars = "admin/db.php" ;
  $this->cxn = new Database($vars);



}




public function login()
{


  $query = " SELECT * from login where usname = '$this->username' and pass = '$this->password' and type =2";
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

public function signup()
{

$select_user_SQL="SELECT * FROM `login`  where usname ='$this->username' or email='$this->email' and type=2 ";
       $select_user_Result=  mysql_query($select_user_SQL);

       if(mysql_num_rows($select_user_Result)==1){
            echo "<script type='text/javascript'>
                 alert('username is Exist in system');
              </script> ";
              return false ;
          }

          else {
            $insert_user_sql="INSERT INTO login (usname,pass,type,email) 
            VALUES ('$this->username','$this->password',2,'$this->email')";
            $inser_user_result=  mysql_query($insert_user_sql);
            if($inser_user_result){
              return true ; 

            }else
            {
              return false ;
            }


}

      

function close()
{

  $this->cxn->close();

}




}

}

 ?>