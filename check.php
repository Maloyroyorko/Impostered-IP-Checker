<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Maloy Roy Orko">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display : inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  
  
}
</style>
</head>
<body style="Color: Black;Background-color:Red">



    <div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="Post">

<Br>
    <Marquee Style="Color: Red">==!Proxy/Tor Node Checker(Basic)!==</Marquee>
    
      <Br> <Br>   

<center style="Color: Blue">Creator: Maloy Roy Orko</center>


    <Br>    
<div class="row">
    <div class="col-25">
      <label for="fname">Victim IP Address :</label>
    </div>
  
<div class="col-75">
      <input type="text" id="fname" name="ip" placeholder="Enter Victim's Ip">
    </div>
  </div>
  

  <br>
  <div class="row">
    <input type="submit" value="Submit" name="sub">
  </div>
  </form>
</div>

</body>
</html>



<?php


if(isset($_POST['sub'])){
$ip=htmlspecialchars($_POST['ip']);

stream_context_set_default([
    'ssl' => [
   "verify_peer"=>false,
        "verify_peer_name"=>false,
    
]]);

$Url="https://check.getipintel.net/check.php?ip=".$ip."&contact=duydodokke@gufum.com&format=json";

$location= file_get_contents($Url);

$data= json_decode($location,true);

$dip=$data['queryIP'];
$no=$data['result'];

$msg;

if($no == 1){
    $msg="Yes";
    $msg1="No";
}else{
    $msg="No";
    $msg1="Yes";
}

echo "<Br>";
echo '<div class="container">
<center style="Color: Blue">[ Entered Ip Details ]</center>
<Br>
<Br>
<Br>
';
echo"Taget Ip : ".$dip."<br>";
echo"Real Ip Status -> ".$msg1."<Br>";
echo"Is Target Impostering The Ip -> ".$msg."<Br>";
echo"Is The Ip Of Any Vpn Or Tor Relay -> ".$msg."<Br>";
echo'</div>';

}
?>
