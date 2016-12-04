 <?php

  require_once('eventORM.php');

  $path_components = explode('/', $_SERVER['PATH_INFO']);

  if(isset($_REQUEST['firstName'])){
    $fName = $_REQUEST['firstName'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing first name");
    exit();
  }

  if(isset($_REQUEST['lastName'])){
    $fName = $_REQUEST['lastName'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing last name");
    exit();
  }

  if(isset($_REQUEST['email'])){
    $lName = $_REQUEST['email'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing email");
    exit();
  }

  if(isset($_REQUEST['eventName'])){
    $eName = $_REQUEST['eventName'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing event name");
    exit();
  }

  if(isset($_REQUEST['eventDescription'])){
    $eDescription = $_REQUEST['eventDescription'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing event description");
    exit();
  }

  if(isset($_REQUEST['latitude'])){
    $latitude = $_REQUEST['latitude'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing latitude");
    exit();
  }

  if(isset($_REQUEST['longitude'])){
    $longitude = $_REQUEST['longitude'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing longitude");
    exit();
  }

  if(isset($_REQUEST['startTime'])){
    $sTime = $_REQUEST['startTime'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing start time");
    exit();
  }

  if(isset($_REQUEST['endTime'])){
    $eTime = $_REQUEST['endTime'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing endTime");
    exit();
  }

  if(isset($_REQUEST['radius'])){
    $radius = $_REQUEST['radius'];
  }else{
    header("HTTP/1.0 400 Bad Request");
    print("Missing radius");
    exit();
  }

  $numberAttending = 0;

  $new_event = MasterEventCreate::insert($fName, $lName, $email, $eName, $latitude, $longitude, $radius, $numberAttending, $startTime, $endTime, $eDescription);


?>