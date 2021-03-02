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
    </head>
    <style >
        fieldset
        {
            padding: 20px;
            /*border: 1px solid white;*/
        }
        th
        {
            padding: 20px;
            text-align: center;
        }
        tr
        {
            padding: 20px;
        }
        <style>
  nav{
    font-size: 20px;
    background-color: rgba(0,0,0,0.8);
    
    text-align: center;
    
  }
  body{
  background-image:url("../img/13.jpg");
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
color: rgba(0,0,0,0.7);
}
table,td,tr
{
    padding: 20px;
}
input,select
{
    size: 40px;
}
</style>
    </style>
<body class="mt-5 bg-dark text-white">

  <nav class="menubar">
    <nav class=" navbar navbar-expand-lg top1">
      <div class="container-fluid">
        <a class="text-decoration-none text-white" href="#"><h1><h4>AFRS-USER</h4></h1></a>
      <div>
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/user">Home</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/searchflight">Booking</a>
          <li class="nav-item"> <a class="nav-link" href="#">Profile</a>
            <div class="submenu1">
        <ul>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/regupdate"">update</a></li>
        </ul>
      </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#">VIEW</a>
            <div class="submenu2">
              <ul>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/viewbookinguser">Booking Details</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/ticket">Ticket view</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/viewnotif">View Notification</a></li>
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
  <CENTER><h1> Book Ticket</h1></CENTER>  
<fieldset>
<form class="container" method="post" action="<?php echo base_url()?>main/bookingaction">
    <?php 
    if(isset($user_dat)) 
    {
      foreach($user_dat->result() as $row1)
      {
      ?>
  <div class="frm">
    <table>
        <tr>
        <th>PERSONAL DETAILS</th></tr>
        <tr>
            <td>First Name:</td><td><input type="text" name="fname" value="<?php echo $row1->fname;?>"></td>

            <td>Last Name:</td><td><input type="text" name="lname" value="<?php echo $row1->lname;?>"></td>
            <td>Age:</td><td><input type="age" name="lname" value="<?php echo $row1->age;?>"></td>
        </tr>
        <tr>
            <td>Email:</td><td><input type="text" name="email" value="<?php echo $row1->email;?>"></td>
            <td>phone number:</td><td><input type="text" name="phnno" value="<?php echo $row1->phno;?>"></td>
        </tr>
        
        <tr>
        <?php 
        if(isset($user_data)) 
        {
          foreach($user_data->result() as $row)
          {
          ?>
        <th>Trip Information</th></tr>
        <tr>
            <td>Flight no:</td><td><input type="text" name="fno" value="<?php echo $row->fno;?>"></td>
            <td>Flight Name:</td><td><input type="text" name="fname" value="<?php echo $row->fname;?>"></td>
        </tr>
        <tr>
            <td>departure place:</td><td><input type="text" name="depp" value="<?php echo $row->departure;?>"></td>
            <td>arrival place:</td><td><input type="text" name="arvv" value="<?php echo $row->arrival;?>"></td>
        </tr>
        <tr>
            <td>departure time:</td><td><input type="time" name="deptime" value="<?php echo $row->deptime;?>"></td>
            <td>arrival time:</td><td><input type="time" name="arvtime" value="<?php echo $row->arrtime;?>"></td>
        </tr>
        <tr>
            <td>departure date:</td><td><input type="date" name="depdat" value="<?php echo $row->depdate;?>"></td>
            <td>arrival date:</td><td><input type="date" name="arvdate" value="<?php echo $row->arrdate;?>"></td>
        </tr>
        <input type="hidden" name="costfirst" value="<?php echo $row->costfirst;?>">
        <input type="hidden" name="costeconomic" value="<?php echo $row->costeconomic;?>">
        <input type="hidden" name="costbuisness" value="<?php echo $row->costbuisness;?>">
        

         <tr>
                    <?php
            if($row->afirst<=0 && $row->aeconomic<=0)
            {
            ?>
                    <td>Select Class<select name="clas">
                        <option></option>
                        <option>Buisness class</option>
                    </select></td>
                

            
        </tr>

        <?php
            }
            elseif ($row->afirst<=0 && $row->abuisness<=0) { 
            ?>
            <tr>

            <td>Select Class<select name="clas">
                        <option></option>
                         <option>Economic class</option>
                    </select></td>
            </tr>

            <?php
            }
            elseif ($row->aeconomic<=0 && $row->abuisness<=0) { 
            ?>
             <tr>

            <td>Select Class<select name="clas">
                        <option></option>
                         <option>First class</option>
                    </select></td>
            </tr>
                
            <?php
            }
            elseif($row->afirst<=0)
            {
            ?>

            
        </tr>
                <tr>
            
                    <td>Select Class<select name="clas">
                        <option></option>
                        <option>Economic class</option>
                        <option>Buisness class</option>
                    </select></td>
                

            
        </tr>
        <?php
            }
            elseif ($row->aeconomic<=0) { 
            ?>
        <tr>
            <td>Select Class<select name="clas">
                <option></option>
            <option>First class</option>
            <option>Buisness class</option>
            </select></td>
            
        
    </tr>
    <?php }
    elseif ($row->abuisness<=0)
    { ?>

    <tr>
       
            <td>Select Class<select name="clas">
                <option></option>
            <option>First class</option>
            <option>Economic class</option>
            
            </select></td>
            
        
    </tr>
    <?php } 
    else
        {
            ?>
            <tr>
       
            <td>Select Class<select name="clas">
                <option></option>
            <option>First class</option>
            <option>Economic class</option>
            <option>Buisness class</option>
            
            </select></td>
            
        
    </tr>
<?php } ?>
        <input type="hidden" name="id" value="<?php echo $row->id;?>">
        <tr>
            <td></td><td></td><td><input type="submit" name="submit"></td>
        </tr>

        <?php 
    }
}
        ?>
        <?php 
            }
        }
        ?>
    </table>

</form>
</fieldset>
</body>
</html>
