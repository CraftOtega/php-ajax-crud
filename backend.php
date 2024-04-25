    

<?php  include"connection.php";


extract($_POST);

//to fetch data


if (isset($_POST['readrecord'])) {
  
$data = '<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>name</th>
        <th>email</th>
        <th>subject</th>
        <th>message</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>';

$sql="SELECT * FROM  `contacts` ";
$results=mysqli_query($conn, $sql);


if(mysqli_num_rows($results) > 0){

$number=1;
 while ($row=mysqli_fetch_array($results)) {


$data.=' <tr>
        <td>'.$number.'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['subject'].'</td>
        <td>'.$row['message'].'</td>

        <td>  <button type="button" class="btn btn-info btn-sm" onclick="GetUserDetails('.$row['id'].')" >Edit</button></td>




<td>  <button type="button" class="btn btn-danger btn-sm" onclick="DeleteUser('.$row['id'].')">Delete</button></td>

 </tr>';


$number++;

}

}


$data.=' </tbody>
  </table>
  ';

  echo $data;


}









//to add data 
if(isset($_POST['name']) &&  isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['message'])){



$name=mysqli_real_escape_string($conn, $_POST['name']);

$subject=mysqli_real_escape_string($conn, $_POST['subject']);

$email=mysqli_real_escape_string($conn, $_POST['email']);

$message=mysqli_real_escape_string($conn, $_POST['message']);




  $sql = $conn->query("INSERT INTO contacts (name, email, message, subject, datein) VALUES('$name', '$email', '$message', '$subject', '$time' )");
 
 exit();



}











if (isset($_POST['deleteid'])) {

$userid=$_POST['deleteid'];


$deletequery = " DELETE FROM contacts WHERE id= $userid;";
mysqli_query($conn, $deletequery);


}




// get userid for update


if(isset($_POST['id']) && isset($_POST['id']) !="" )
{


$user_id =$_POST['id'];

$query = " SELECT * FROM contacts WHERE id = '$user_id' ";
if(!$result=mysqli_query($conn, $query)){

exit(mysqli_error());
}


$response = array();

if (mysqli_num_rows($result) > 0 ){

while ($row = mysqli_fetch_array($result)){


  $response =$row;
}


}


else{



$response['status'] = 200 ;
$response['message'] = "data is not found";
}


echo json_encode($response);


}





else{



$response['status'] = 200 ;
$response['message'] = "invalid request";
}









//update table



if (isset($_POST['hidden_user_id_up'])) {

$hidden_user_id=mysqli_real_escape_string($conn, $_POST['hidden_user_id_up']);

$name=mysqli_real_escape_string($conn, $_POST['name_up']);

$subject=mysqli_real_escape_string($conn, $_POST['subject_up']);

$email=mysqli_real_escape_string($conn, $_POST['email_up']);

$message=mysqli_real_escape_string($conn, $_POST['message_up']);

 

$query ="UPDATE `contacts`  SET name = '$name',  subject = '$subject', email = '$email', message = '$message'  WHERE id = '$hidden_user_id' ";
mysqli_query($conn, $query);


}




?>