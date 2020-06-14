<!DOCTYPE html>
<html>
    <head>
<title>Contact Us</title>
<h1 class="top">Contact Us<h1>
     <?php include 'link.php';?>
<link rel="stylesheet" href="../project12.css"/>

</head>
<body>
   

<div class="logo ">
        <div class="row">
         <div class="col-md-3 register-left ">
             <h3>Welcome</h3>
            <p>   
           <a href="../project14.php">HOME</a> </p><br/>
         </div>  
            <div  class="col-md-9 register-right">
             <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel"
               aria-labellebdy="hame-tab">
        
           <form action="" method="POST">
           <div class="row register-form yy">
             <div class ="col-md-6">
                <div class="form-group">
                   <input type="text" class="form-control" placeholder="Name
                        " name="name" value="" required/>
                </div>
    
                <div class="form-group" >
                   <input type="E-mail" class="form-control" placeholder="Email
                      " name="email" value="" required/>
                      </div>
                      <div class="form-group">
                       <table>
                            <tr>
                              <td><textarea rows="4" cols="40" name="message" 
                               placeholder="Message"></textarea></td>
                              
                           </tr>

                       </table>
                       </div>
                       <div class="form-group">
                       <table>
                            <tr>
                              <td><textarea rows="4" cols="40" name="address" 
                               placeholder="Address"></textarea></td>
                              
                           </tr>

                       </table>
                       </div>
                      

                        <input type="submit" class="btnRegister" name="submit"
                          value="Send"
                       />
                     </div>
                   </div>
                 </div>
                </div>
             </div>
           </div>
           </form>
</div>

</body>



</html>

<?php   include 'connection1.php';
if(isset($_POST["submit"]))
{
  $na=$_POST['name'];
  $em=$_POST['email'];
  $me=$_POST['message'];
  $ad=$_POST['address'];
 
  

 if (mysqli_connect_errno())
 {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO colleges (name,email,message,address)
         VALUES ('$na', '$em', '$me','$ad')";


 if ($conn->query($sql) === TRUE) {
   ?>
    <script>
    alert("New record created successfully");
 </script>
    <?php
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}

?>
