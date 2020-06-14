
<!DOCTYPE html>
<html>
<head>
<?php include 'link.php';?>
<link rel="stylesheet" href="../project12.css"/>
</head>
</html>
<body>
<div class="logo all">
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
               <h2 class="register-heading">Login HR</h2>
           <form action="" method="POST">
           <div class="row register-form">
             <div class ="col-md-6">
                <div class="form-group">
                   <input type="text" class="form-control" placeholder="Username
                        " name="username" value="" required/>
                </div>
                <div class="form-group" >
                   <input type="password" class="form-control" placeholder="Password
                      " name="password" value="" required/>
                      </div>

                        <input type="submit" class="btnRegister" name="submit"
                          value="Login" 
                       />
                     </div>
                   </div>
                 </div>
                </div>
             </div>
           </div>
           </form>
</div>
<?php
if(isset($_POST['submit']))
{
   $username=$_POST['username'];
   $password=$_POST['password'];
   $pass="ishant";
   $user="Ishant508";
   if($username==$user)
   {
        if($password==$pass)
        {
           ?>
           <script>
                alert("Login Successful");
                location.replace("../project18.php");
              

              </script>
           <?php
        }
        else
        {
         ?>
         <script>
              alert("Incorrect Password");
            </script>
         <?php
       
        }
   }
   else
   {
      ?>
      <script>
           alert("Incorrect Username");
         </script>
      <?php

   }

}


?>