       
// <?php // include"connection.php";
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
 
.form-control{
  display: block;
  width:50%;



}


.content {
    max-width: 200px;
    margin: auto;
    background: white;
    padding: 5px;
}



#myModal input, #myModal input{

margin-top: 10px;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<?php  include'header.php';   ?>


<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>We specialize in blablabla</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div><br><br>









<div class="container" >
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->

  <div class="d-flex justify-content-end">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">crud jc1</h4>
        </div>
        <div class="modal-body">



 <form method="post"  action="" > 
 
  
<!--   name="name",  name="subject" they are not in use is only id e.g id="name"  ---->
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control " name="name" id="name" placeholder="Enter  name....">

    </div>

   <div class="form-group form">
      <label for="lastname">subject:</label>
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
     </div>


<div class="form-group">
      <label for="name">Email:</label>
      <input type="text" class="form-control " id="email" name="email"  placeholder="Enter  email....">

    </div>



<div class="form-group">
      <label for="name">message :</label>
      <input type="text" class="form-control "  id="message" name="message"  placeholder="Enter  message ....">

    </div>
</div>




   
     <button type="button"   onclick="addRecord()">submit</button>
     
  
 </form>
        



        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      




    </div>
  </div>
  
</div>



<!--   UPDATE MODAL -->


<div class="container" >
  <h2>UPdate</h2>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">crud jc1</h4>
        </div>
        <div class="modal-body">



 <form method="post"  action="" > 
 
  

    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control " name="update_name" id="update_name" placeholder="Enter  update_name....">

    </div>

   <div class="form-group form">
      <label for="lastname">subject:</label>
      <input type="text" class="form-control" id="update_subject" name="update_subject" placeholder="Enter update_subject">
     </div>


<div class="form-group">
      <label for="name">Email:</label>
      <input type="text" class="form-control " id="update_email" name="update_email"  placeholder="Enter  update_email....">

    </div>



<div class="form-group">
      <label for="name">message :</label>
      <input type="text" class="form-control "  id="update_message" name="update_message"  placeholder="Enter  update_message ....">

    </div>
</div>


  <input type="hidden"  class="form-control "  id="hidden_user_id" name="hidden_user_id"  >

   
     <button type="button"   onclick="updateUserDatail()">update</button>
     
  
 </form>
        



        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      




    </div>
  </div>
  
</div>


<!--   END OF UPDATE MODAL -->







<div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive" id="records_display">          
  



  </div>
</div>



 


<!--<div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>



      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>





    </tbody>
  </table>
  </div>
</div>-->













<script type="text/javascript">
  

 $(document).ready(function(){
 readRecords();


});





//fetch record


 function readRecords() {


var  readrecord=  "readRecord";
$.ajax({


url:"backend.php",
type:"POST",
async:false,
data:{

"readrecord":readrecord


},



success:function(data, status){

  
$("#records_display").html(data);
}



});




 }










// add records
 function addRecord(){


var name = $("#name").val();
var email = $("#email").val();
var subject = $("#subject").val();
var message = $("#message").val();



$.ajax({

url:"backend.php",
type:"POST",
async:false,
data:{

"done":1,
"name":name,
"email":email,
"subject":subject,
"message":message


},


success:function(data, status){

  readRecords();
$("#name").val('');
$("#email").val('');
$("#subject").val('');
$("#message").val('');


}




});


}

 


//delete record


function DeleteUser(deleteid){

var conf = confirm("Are you you want delete this record");


if (conf ==true){


$.ajax({


url:"backend.php",
type:"POST",
async:false,
data:{

"deleteid":deleteid

},

success:function(data, status){
readRecords();



}

});


}


}




//edit record


function GetUserDetails(id){

var hidden_user_id = $("#hidden_user_id").val(id);

$.post(
"backend.php",
{

id:id


},

function(data,status){


var user= JSON.parse(data);

$("#update_name").val(user.name);
$("#update_email").val(user.email);
$("#update_subject").val(user.subject);
$("#update_message").val(user.message);


}

  );
$("#myModal1").modal('show');


}



//update 

function updateUserDatail(){




var name_upd = $("#update_name").val();
var email_upd = $("#update_email").val();
var subject_upd = $("#update_subject").val();
var message_upd = $("#update_message").val();


var hidden_user_id_upd = $("#hidden_user_id").val();


$.post(
"backend.php",
{

name_up:name_upd,
email_up:email_upd,
subject_up:subject_upd,
message_up:message_upd,
hidden_user_id_up:hidden_user_id_upd



},

function(data,status){

readRecords();
$("#myModal1").modal('hide');

//var user= JSON.parse(data);

//$("#update_name").val(user.name);
//$("#update_email").val(user.email);
//$("#update_subject").val(user.subject);
//$("#update_message").val(user.message);


}

  );


}




</script>









<?php include'footer.php'  ?>  

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_company_complete_animation by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Apr 2017 16:54:31 GMT -->
</html>
