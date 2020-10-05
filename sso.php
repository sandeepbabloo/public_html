<?php
require_once 'sso_handler.php';
$CLIENT_ID = "SFsZFHeP4dPDVm1xo8XzN1BWxlkAUPp4mCPfiExv";
$CLIENT_SECRET = "MhyphhUDvRiTwYhLFl6ZaU6BWdcBKUElAGdGCkC5a23yVPWYvAjQL3f0sKuLdtLidNZlZQEBOwuN9EFWg2ikfaOxf46UXad1pQX02XPf6sSvVu17qdw9trjmoIct1bMB";
$REDIRECT_URI = "http://localhost/hostel-18/sso.php";
$required_fields = array('username','first_name','last_name','insti_address');
$required_scopes = array('basic','profile','insti_address');
$options =  array('user_login');
$sso_handler = new SSOHandler($CLIENT_ID, $CLIENT_SECRET);
if ($sso_handler->validate_code($_GET) && $sso_handler->validate_state($_GET, true, $options)) {
  $response = $sso_handler->default_execution($_GET, $REDIRECT_URI, $required_scopes, $required_fields);
  if(isset($response['user_information']) && isset($response['access_information']) && !isset($response['error'])){
    session_start();
    $json = $response['user_information'];
    $_SESSION['first_name'] = $json['first_name'];
    $_SESSION['last_name'] = $json['last_name'];
    $_SESSION['hostel'] = $json['insti_address']['hostel'];
    $hostel = $json['insti_address']['hostel'];
    if($hostel != 16){
      echo '<script>
      var ask = window.confirm("You are not a Hostel 18 Inmate, You may not get access to some features. Do you wish you Continue?");
      if(ask){
        window.location.href= "index.php";
      }
      </script>';
    }
    // header("Location:index.php");
  }
  else{
    
  }
} 
?>