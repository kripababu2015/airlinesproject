<html>
  <head>
    <title>
      This is a demo page
     </title>
     <style>

  *{
  padding:0px;
  margin:0px;
  }

      body
      {
       color:red;
      }
      
      table{
        color:white;
        padding:50px;
        width:500px;
        height:500px;
        text-align:center;
        background:rgba(0,0,0,0.3);


      }
       body form
      {
      background-color:grey; 
      }
   
.bi{
  background-image:url(../img/bus.jpg);
  background-size:cover;
  }
.menubar{
    background-color:black;
    text-align:center;
    width:100%;
    height:10%;

}
.menubar ul{
    list-style:none;
    display:inline-flex;
    padding:10px;
}
.menubar ul li a{
      color:white;
      text-decoration:none;
      padding:10px;  
}
.menubar ul li{
       padding:10px; 
}
a:hover{
      background-color:red;
      border-radius:10px;
}
.submenu{
      display:none;  
}
.menubar ul li:hover .submenu{
       
         display:block;
         position:absolute;
         background-color:black;
         color:white;
         margin-left:-25px;
         padding:10px;
}
.submenu ul{
           display:block;
}
.submenu ul li{
             
             border-radius:10px; 
}

.rows{
  display:flex;
  text-align:justify;
  
}
.rows h2{
  color:white;
  text-decoration:underline;
  text-align:center;
}
      
.col{
  background:rgba(0,0,0,0.4);
  width:450px;
  height:300px;
  padding:15px;
  color:white;
  margin:20px;
  
}
.ft{
   color:white;
   background:black;
   padding:20px;
   text-align:center;
   
}

  
      
      
     </style>
  </head>
  <body class="bi">
<!--nav started--->
<nav class="menubar">
 <ul>
  <li><a href="<?php echo base_url()?>main/index"> HOME </a> </li>
 </ul>
</nav>

  <center> <table>
      <thead>
       <h1> REGISTER HERE </h1>
      </thead>
      <tbody>
      

    <center><form method="post" action="<?php echo base_url()?>main/">

      <tr>
      <td>Flight Number:</td><td><input type="text" name="fno"></td></tr>
  <tr>
    <tr>
      <td>Flight Name :</td><td><input type="text" name="fname"></td></tr>
  <tr>
    <tr><td>
      Departure</td><td> 
             <select name="departure">
              <option>-   -</option>
              <option>TVM</option>
              <option>KOCHI</option>
              <option>KANNUR</option>
              <option>KOZHIKODE</option>
              <option>BANGALORE</option>
              <option>MUMBAI</option>
              <option>CHENNAI</option></select></td></tr>
              <tr><td>
      Arrival</td><td> 
             <select name="arrival">
              <option>-   -</option>
              <option>TVM</option>
              <option>KOCHI</option>
              <option>KANNUR</option>
              <option>KOZHIKODE</option>
              <option>BANGALORE</option>
              <option>MUMBAI</option>
              <option>CHENNAI</option></select></td></tr>
 <tr>   <td>
   Departure Date:</td><td><input type="date" name="depdate"></textarea></td>
</tr>
<tr><td>
  <tr>   <td>
   Arrival Date:</td><td><input type="date" name="ardate"></textarea></td>
</tr>
<tr>   <td>
   Departure Time:</td><td><input type="time" name="deptime"></textarea></td>
</tr>
<tr><td>
  <tr>   <td>
   Arrival Time:</td><td><input type="time" name="artime"></textarea></td>
</tr>
 <tr>
  <td>Ticket Charge :</td><td><input type="text" name="cost"></td></tr>
  <tr><td>Seat Capacity</td></tr>
  <tr><td>First Class</td><td><input type="text" name="cfirst"></td></tr>
  <tr><td>Economic Class</td><td><input type="text" name="ceconomic"></td></tr>
  <tr><td>Buisness Class</td><td><input type="text" name="cbuisness"></td></tr>

  <tr><td>Seat Avalilability</td></tr>
  <tr><td>First Class</td><td><input type="text" name="afirst"></td></tr>
  <tr><td>Economic Class</td><td><input type="text" name="aeconomic"></td></tr>
  <tr><td>Buisness Class</td><td><input type="text" name="abuisness"></td></tr>

  <tr><td></td><td><input type="submit" name="submit" value="submit"></td></tr>




  </form>
  </tbody>
</body>
</table>

  </html>


