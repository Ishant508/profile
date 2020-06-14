<!DOCTYPE html>
<html>
<head>
 <?php include 'link.php';?>
 <link rel="stylesheet" href="../project12.css"/>
 <h1 class="top" >Application Form</h1>
</head>
</html>
<body>
<div class="logo all1">
       <div class="row">
         <div class="col-md-3 register-left">
             <h2>Welcome</h2>      
           <a href="../project14.php">HOME</a> <br/>
         </div>  
            <div  class="col-md-9 register-right">
             <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel"
               aria-labellebdy="hame-tab">
               <h3 class="register-heading app">Personal Information</h3>
           <form action="" method="POST">
           <div class="row register-form">
             <div class ="col-md-6">
                <div class="form-group">
                   <input type="text" class="form-control" placeholder=" First Name
                        " name="firstname" value="" required/>
                </div>
                <div class="form-group" >
                   <input type="text" class="form-control" placeholder="Last Name
                      " name="lastname" value="" required/>
                      </div>
                   <div class="form-group">
                       <table>
                            <tr>
                              <td><textarea rows="5" cols="20" name="currentaddress" 
                               placeholder="Current Address"></textarea></td>
                               <td class="addess"><textarea rows="5" cols="20" name="permanentaddress" 
                               placeholder="Permanent Address"></textarea></td>
                           </tr>

                       </table>
                         
                     </div> 

                     <div class="form-group" >
                   <input type="tel" class="form-control" placeholder="Mobile Number
                      " name="telephone" value="" required/>
                      </div>
                      <div class="form-group" >
                   <input type="E-mail" class="form-control " id="emai" placeholder="Email Address
                      " name="email" value="" required/>
                      </div>

                      <div class="form-group" >
                        <h5><strong>Position:</strong></h5>
          
                       Manager : <input  type="radio" name="position" value="manager" > 
                       Secratary : <input  type="radio" name="position" value="secratary">
                       Security : <input type="radio" name="position" value="security" >
                       <h5><strong>Are you currently employed:</strong></h5>
                       Yes : <input  type="radio" name="employed" value="yes" > 
                       No : <input  type="radio" name="employed"  value="no"> 

                      </div>

                      <div class="form-group">
                       <table>
                            <tr>
                              <td><textarea rows="3" cols="45" name="qualification" 
                               placeholder="Qualification"></textarea></td>
                              
                           </tr>

                       </table>
                       </div>
                       <div class="form-group">
                       <table>
                            <tr>
                              <td><textarea rows="3" cols="45" name="education" 
                               placeholder="Education"></textarea></td>
                              
                           </tr>

                       </table>
                      </div>
                      <div class="form-group">
                       <table>
                            <tr>
                              <td><textarea rows="3" cols="45" name="projects" 
                               placeholder="Projects"></textarea></td>
                              
                           </tr>

                       </table>
                      </div>
                      <div class="form-group">
                       <table>
                            <tr>
                              <td><textarea rows="3" cols="45" name="skills" 
                               placeholder="Skills"></textarea></td>
                              
                           </tr>

                       </table>
                       <div class="form-group all2">
                       <table>
                            <tr>
                              <td><textarea rows="3" cols="45" name="why" 
                               placeholder="Why We Choose You"></textarea></td>
                              
                           </tr>

                       </table>
                      </div>
                      
                      </div>
                      
                      
                      
                      <input type="submit" class="btnRegister" name="submit1"
                      value="Register"
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


<?php   include 'connection.php';
if(isset($_POST["submit1"]))
{
  $fn=$_POST['firstname'];
  $ln=$_POST['lastname'];
  $ca=$_POST['currentaddress'];
  $pa=$_POST['permanentaddress'];
  $mo=$_POST['telephone'];
  $em=$_POST['email'];
  $po=$_POST['position'];
  $emp=$_POST['employed'];
  $ed=$_POST['education'];
  $qu=$_POST['qualification'];
  $pr=$_POST['projects'];
  $sk=$_POST['skills'];
  $wh=$_POST['why'];
  

 if (mysqli_connect_errno())
 {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO ishant (first,last,current,permanent,mobile,email,position,employed,qualification,education,projects,skills,why)
         VALUES ('$fn', '$ln', '$ca','$pa','$mo','$em','$po','$emp','$qu','$ed','$pr','$sk','$wh')";


 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}

?>
