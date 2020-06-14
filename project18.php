<!DOCTYPE html>
<head>
<?php include 'link.php';?>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:#7FDBFF;}
.main-div{
    width:100%;height:100vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
body
 {
     width:100%;
     height:100vh;
     background-color:#1a52f9;
     background-image:linear-gradient(19deg,#1a52f9 0%,#B721FF 84%);
     position: relative;
     border-radius: 50%;

 }
.center-div{
    width:90%;
    height:80vh;
    background:-webkit-linear-gradient(left,#5DADE2,#00c6ff);
    padding:20px 0 0 0;
    box-shadow:0 10px 20px 0 rgba(0,0,0,.03);
    border-radius:10px;
}
h1{
    font-size:18px;
    color:#000;
    text-align:center;
    margin-top:-20px;
    margin-bottom:20px;
}
table{
    border-collapse:collapse;
    background-color:#fff;
    box-shadow:0 10px 20px 0 rgba(0,0,0,.03);
    border-radius:10px;
    margin:auto;
}
th,td{
    border:1px solid #f2f2f2;
    padding:8px 30px;
    text-align:center;
    color:grey;
}
th{
    text-transform:uppercase;
    font-weight:500;
}
td{
    font-size:13px;
}
h1 
{
    font-size:35px;
}
a 
{    margin-left:90%;

    font-size:20px;
}

</style>

</head>
<body>
    <a href="../message.php">Messages</a>
    <a href="../project15.php" >Logout</a>
<div class="main-div">
    <h1>Job Applications</h1>
      <div class="center-div">
        <div class="table-responsive">
          <table>
             <thread>
               <tr>
                
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Current Address</th>
                 <th>Permanent Address</th>
                 <th>Mobile Number</th>
                 <th>Email</th>
                 <th>Position</th>
                 <th>Employed</th>
                 <th>Qualification</th>
                 <th>Education</th>
                 <th>Projects</th>
                 <th>Skills</th>
                 <th>Why We Choose You</th>
                
               </tr>
             </thread>
             <tbody>

             <?php

               include 'connection.php';

               if (mysqli_connect_errno())
               {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
               $sql="select * from ishant  ";
               $result=mysqli_query($conn,$sql);
               $rowcount=mysqli_num_rows($result);
               $res=mysqli_fetch_array($result);
              
               
              if($rowcount>0)
              { 
               do
              {
                ?>
                <tr>
             
                <td><?php echo $res['first']; ?></td>
                <td><?php echo $res['last']; ?></td>
                <td><?php echo $res['current']; ?></td>
                <td><?php echo $res['permanent']; ?></td>
                <td><?php echo $res['mobile']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><?php echo $res['position']; ?></td>
                <td><?php echo $res['employed']; ?></td>
                <td><?php echo $res['qualification']; ?></td>
                <td><?php echo $res['education']; ?></td>
                <td><?php echo $res['projects']; ?></td>
                <td><?php echo $res['skills']; ?></td>
                <td><?php echo $res['why']; ?></td>
                </tr>

             <?php
              } while($res=mysqli_fetch_array($result));
            }
              ?>             
             
             </tbody>
          </table>
        </div>

      </div>
</div>

</body>
