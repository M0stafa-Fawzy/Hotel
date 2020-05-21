<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
 die();
}
?> 

<?php  

 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "demo");  
      $sql = "SELECT * FROM payment ORDER BY id ASC";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                         <td>'.$row['title'].''.$row['fname'].' '.$row['lname'].'</td>
                          <td>'.$row['troom'].'</td>
                          <td>'.$row['tbed'].'</td>
                          <td>'.$row['cin'].'</td>
                          <td>'.$row['cout'].'</td>
                          <td>'.$row['nroom'].'</td>
                          <td>'.$row['meal'].'</td>
                          
                          <td>'.$row['ttot'].'</td>
                          <td>'.$row['mepr'].'</td>
                          <td>'.$row['btot'].'</td>
                          <td>'.$row['fintot'].'</td> 
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 ?>   
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br />
           <div class="container">  
                <h4 align="center"> Booked Rooms</h4><br />  
                <div class="table-responsive">  
                    <div class="col-md-12" align="right">
                     <form method="post">  
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                     </form>  
                     </div>
                     <br/>
                     <br/>
                     <table class="table table-bordered">  
                          <tr>  
                                            <th>Name</th>
                                            <th>Room type</th>
                                            <th>Bed Type</th>
                                            <th>Check in</th>
                                            <th>Check out</th>
                                            <th>No of Room</th>
                                            <th>Meal Type</th>
                                            
                                            <th>Room Rent</th>
                                            <th>Bed Rent</th>
                                            <th>Meals </th>
                                            <th>Gr.Total</th>
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
</html>

