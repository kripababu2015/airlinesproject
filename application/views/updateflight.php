<!DOCTYPE html>
<html>
    <head>
        <title>Assignment2</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
            <style>
  *{
  padding:0px;
  margin:0px;
}
  table,td{
    padding: 20px;
    font-size: 20px;
    border: 2px solid white;
    border-collapse:collapse;
    margin-left: 50px;
    margin-top: 80px;
    background-color: black;
    color: white;
  }
  .bi{
  background-image:url("../img/wp1853425.jpg");
  background-size:cover;
}

h1{
  text-align: center;
  color: black;
  font-size: 50px;
}
nav{
    font-size: 20px;
    background-color: rgba(0,0,0,0.8);
    
    text-align: center;
    
  }
  body{
  background-image:url("../img/14.jpg");
background-size:cover;
}
.menubar ul{
  list-style:none;
  display:inline-flex;
  padding:5px;
  margin-top: 0px;
  font-size: 20px;
}
.menubar ul li a{
  color:white;
  text-decoration:none;
  padding:10px;
}
.menubar ul li{
     padding:15px;
}
.menubar ul li a:hover{
  background-color:red;
  display:block;
  border-radius:10px;
}
.submenu1 {
  display:none;
  margin:10px;
}
.submenuz {
  display:none;
  margin:10px;
}
.submenu2 {
  display:none;
  margin:10px;
}
.menubar ul li:hover .submenu1 {
  display:block;
  position:absolute;
  background-color:rgba(0,0,0,0.5);
  border-radius:20px;
}
.menubar ul li:hover .submenuz {
  display:block;
  position:absolute;
  background-color:rgba(0,0,0,0.5);
  border-radius:20px;
}
.menubar ul li:hover .submenu2 {
  display:block;
  position:absolute;
  background-color:rgba(0,0,0,0.5);
  border-radius:20px;
}
.submenu1  ul{
  display:block;
}
.submenu1 ul li{
  border-bottom:2px solid red;
}
.submenuz  ul{
  display:block;
}
.submenuz ul li{
  border-bottom:2px solid red;
}
.submenu2  ul{
  display:block;
}
.submenu2 ul li{
  border-bottom:2px solid red;
}
.h2
{
  text-align: center;
  margin-top: 20px;
  font-size: 50px;
  
}
.head{
text-align:center;
color: rgba(0,0,0,0.5);
}
  </style>
    </head>
<body class=" mt-5 bg-dark text-white">
  
   <nav class="menubar">
    <nav class=" navbar navbar-expand-lg top1">
      <div class="container-fluid">
        <a class="text-decoration-none text-white" href="#"><h1><h4>AFRS-ADMIN</h4></h1></a>
      <div>
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/admin">Home</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">ADD </a>
            <div class="submenu1">
        <ul>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/flightdetails">Flight Details</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/airportdet">Airport Details</a></li>
        </ul>
      </div>
          <li class="nav-item"> <a class="nav-link" href="#">Notification</a>
           <div class="submenuz">
              <ul>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/notificationadd">ADD</a></li>

                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/notifview1">VIEW</a></li>
                    
              </ul>
            </div>
          </li>
      
          <li class="nav-item"> <a class="nav-link" href="#">VIEW</a>
            <div class="submenu2">
              <ul>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/regusertable">User Details</a></li>

                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/viewbooking">Booking Details</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/airportdetails">Airport Details</a></li>
                     <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/viewflightdetails">Flight Details</a></li>
              </ul>
            </div>
          </li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/logout">Logout</a></li>
    
            </ul> 
          </ul>
        </div>
      </div>
    </nav>
  </div>
</nav>
  <CENTER><h1>  FLIGHT DETAILS</h1></CENTER>  
<fieldset>
  
<form class="container" method="post" action="<?php echo base_url()?>main/updateflight">
  <?php 
    if(isset($user_data)) 
    {
      foreach($user_data->result() as $row1)
      {
      ?>
  <div class="form-group">
    <label>Flight Number:</label>
    <input type="text" class="form-control" name="fno" value="<?php echo $row1->fno;?>">
  </div>

  <div class="form-group mt-2">
    <label>Flight Name:</label>
    <input type="text" class="form-control" name="fname" value="<?php echo $row1->fname;?>">
  </div>

  <div class="form-group mt-2 col-md-4">
      <label >Departure</label>
      <select  class="form-control" name="departure">
        <option selected><?php echo $row1->departure;?></option>
        <option>TVM</option>
              <option>KOCHI</option>
              <option>KANNUR</option>
              <option>KOZHIKODE</option>
              <option>BANGALORE</option>
              <option>MUMBAI</option>
              <option>CHENNAI</option>
      </select>
    </div>


    <div class="form-group col-md-4">
      <label >Arrival</label>
      <select  class="form-control" name="arrival">
        <option selected><?php echo $row1->arrival;?></option>
        <option>TVM</option>
              <option>KOCHI</option>
              <option>KANNUR</option>
              <option>KOZHIKODE</option>
              <option>BANGALORE</option>
              <option>MUMBAI</option>
              <option>CHENNAI</option>
      </select>
    </div>

    <div class="form-group">
    <label >Departure Date:</label>
    <input type="date" class="form-control" name="depdate" value="<?php echo $row1->depdate;?>">
  </div>
  <div class="form-group">
    <label >Arrival Date:</label>
    <input type="date" class="form-control" name="ardate" value="<?php echo $row1->arrdate;?>">
  </div>

  <div class="form-group">
    <label >Departure Time:</label>
    <input type="time" class="form-control" name="deptime" value="<?php echo $row1->deptime;?>">
  </div>

  <div class="form-group">
    <label >Arrival Time:</label>
    <input type="time" class="form-control" name="artime" value="<?php echo $row1->arrtime;?>">
  </div>

  </div>
  label >Ticket Charge :</label>
  </div>


  <div class="form-group">
    <label >First Class Charge :</label>
    <input type="text" class="form-control" name="costfirst" value="<?php echo $row1->costfirst;?>">
  </div>
   <div class="form-group">
    <label >Economic Class Charge :</label>
    <input type="text" class="form-control" name="costeconomic" value="<?php echo $row1->costeconomic;?>">
  </div>
   <div class="form-group">
    <label >Buisness Class Charge :</label>
    <input type="text" class="form-control" name="costbuisness" value="<?php echo $row1->costbuisness;?>">
  </div>

  
  <div>
    
  </div>

  <div class="form-group">
    <label >Seat Capacity:</label>
  </div>
  <div class="form-group">
    <label>First Class:</label>
    <input type="text" class="form-control" name="cfirst" value="<?php echo $row1->cfirst;?>">
  </div>
  
  <div class="form-group">
    <label>Economic Class:</label>
    <input type="text" class="form-control" name="ceconomic" value="<?php echo $row1->ceconomic;?>">
  </div>

  <div class="form-group">
    <label>Buisness Class:</label>
    <input type="text" class="form-control" name="cbuisness" value="<?php echo $row1->cbuisness;?>">
  </div>
  


  <div class="form-group">
    <label>Seat Availability:</label>
  </div>
  <div class="form-group">
    <label>First Class:</label>
    <input type="text" class="form-control" name="afirst" value="<?php echo $row1->afirst;?>">
  </div>
  
  <div class="form-group">
    <label>Economic Class:</label>
    <input type="text" class="form-control" name="aeconomic" value="<?php echo $row1->aeconomic;?>">
  </div>

  <div class="form-group">
    <label>Buisness Class:</label>
    <input type="text" class="form-control" name="abuisness" value="<?php echo $row1->abuisness;?>">
  </div>
  <input type="hidden" value="<?php echo $row1->id;?>" name="id">
  
  <input type="submit" name="submit">
</form>
<?php
          }
        } 
        ?>
</fieldset>
</body>
</html>