<?php 
 
 class room

 {

protected $room_type ; 
protected $bid_type ; 

public function __construct($r_type , $b_type)

{

	$this->room_type = $r_type ; 
	$this->bid_type = $b_type ;
}

public function add_room($r_type , $b_type)
{

$r_type = $this->room_type ; 
$b_type =$this->bid_type ; 

require_once 'database.php';

		$ds = new Database();

		$ds->add_Room($r_type , $b_type);

			echo "<script type='text/javascript'>
			         alert(' room is  added successfully');
			         
  				</script> ";
 //header("Location: admin/room.php");



}









 }



?>