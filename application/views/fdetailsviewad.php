<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<body class="bi">
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
<table border="1" style="border-collapse: collapse;">
<tr>
<th>flight no</th>
<th>flight Name</th>
<th>Departure</th>
<th>Arrival</th>
<th>Departure Date</th>
<th>Arrival Date</th>
<th>Departure Time</th>
<th>Arrival Time</th>
<th>Cost First class</th>
<th>Cost Economic class</th>
<th>Cost Buisness class</th>
<th>firstclass seatcapacity</th>
<th>economicclass seatcapacity</th>
<th>Buisnessclass seatcapacity</th>
<th>firstclass seatavailability</th>
<th>economicclass seatavailability</th>
<th>Buisnessclass seatavailability</th>
<th>Action</th>
<th>Action</th>
<th>Action</th>

</tr>


<?php

if($n->num_rows()>0)
{
foreach ($n->result() as $row)
{
?>
<tr>
<td><?php echo $row->fno;?></td>
<td><?php echo $row->fname;?></td>
<td><?php echo $row->departure;?></td>
<td><?php echo $row->arrival;?></td>
<td><?php echo $row->depdate;?></td>
<td><?php echo $row->arrdate;?></td>
<td><?php echo $row->deptime;?></td>
<td><?php echo $row->arrtime;?></td>
<td><?php echo $row->costfirst;?></td>
<td><?php echo $row->costeconomic;?></td>
<td><?php echo $row->costbuisness;?></td>
<td><?php echo $row->cfirst;?></td>
<td><?php echo $row->ceconomic;?></td>
<td><?php echo $row->cbuisness;?></td>
<td><?php echo $row->afirst;?></td>
<td><?php echo $row->aeconomic;?></td>
<td><?php echo $row->abuisness;?></td>
 <input type="hidden" name="id" value="<?php echo $row->id;?>">
<td><a href="<?php echo base_url()?>main/viewflight/<?php echo $row->id;?>">Edit</a></td>
<td><a href="<?php echo base_url()?>main/deleteflight/<?php echo $row->id;?>">Delete</a></td>
<?php
if($row->status==1)
{ 
	?>
	<td><a href="<?php echo base_url()?>main/cancelflight/<?php echo $row->id;?>">Canceled</a></td> 
<?php
}
elseif ($row->status==0) 
{
?>

<td><a href="<?php echo base_url()?>main/cancelflight/<?php echo $row->id;?>">Cancel</a></td> 

</tr>
<?php
}
}
}
else
{
?>
<tr>
<td>No Data Found</td>
</tr>
<?php
}

?>
</table>
</body>
</html>