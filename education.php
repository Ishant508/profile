<?php
class education{
    private $id;
    private $name;
    private $email;
    private $message;
    private $address;
    private $lat;
    private $lng;
    function setId($id) {$id=$id;}
    function getId(){return $id;}
    function setName($name) {$name=$name;}
    function getName(){return $name;}
    function setEmail($email) {$email=$email;}
    function getEmail(){return $email;}
    function setMessage($message) {$message=$message;}
    function getMessage(){return $message;}
    function setAddress($address) {$address=$address;}
    function getAddress(){return $address;}
    function setLat($lat) {$lat=$lat;}
    function getLat(){return $lat;}
    function setLng($lng) {$lng=$lng;}
    function getLng(){return $lng;}
    
  

 function getblanklatlong() {
    include 'connection1.php';

    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
    $sql="select * from colleges where lat is null and lng is null ";
    $result=mysqli_query($conn,$sql);
    return $result->fetch_all(MYSQLI_ASSOC);
    
  }
  function getallcolleges() {
    include 'connection1.php';

    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
    $sql="select * from colleges  ";
    $result=mysqli_query($conn,$sql);
    return $result->fetch_all(MYSQLI_ASSOC);
    
  }
  function updatecolleges()
  {
    $sql="update colleges set lat= :lat,lng=:lng where id=:id";
    $result=mysqli_query($conn,$sql);
    $result->bindParam(':lat',$lat);
    $result->bindParam(':lng',$lng);
    $result->bindParam(':id',$id);
    if($result)
    {
      return true;

    }
    else
    {
      false;
    }
  }
  
}
?>