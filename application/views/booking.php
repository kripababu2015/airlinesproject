<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
  body
  {
    background-image:url("../img/11.jpg");
  background-size:cover;
  color: white;
  }
*{
padding:0px;
margin:0px;
}
table,td{
padding: 20px;
font-size: 15px;
}
h1{
text-align: center;
color: white;
font-size: 50px;
}
fieldset
{
  background-color: rgba(0,0,0,0.5);
}



</style>

</head>
<body>
<h1>AIRPORT DETAILS</h1>

<form style="margin-left: 430px" method="post" action="<?php echo base_url()?>main/search">
<fieldset style="width:500px;height:600px;">
<legend><strong></strong></legend>
<table>
    <tr>
<td>
State:</td>
<td><input list="State" name="state" required="required">
<datalist id="State">
<option value="Kerala">
<option value="Tamilnadu">
<option value="Karnataka">
</datalist></td>
    </tr>
<tr><td><input type="submit" name="sub" value="Search Here"></td></tr>
</table>
<table>
<thead>
 <tr>
<th>Airport Name</th>
<th>Contact Number</th>
<th>Airport Location</th>
      </tr>
   </thead>
   <tbody>
       <?php

        if(isset($user_data))
        {
            foreach($user_data->result() as $row)
            {
                ?>
  <tr>
  <td><?php echo $row->aname;?></td>
  <td><?php echo $row->contact;?></td>
  <td><?php echo $row->loc;?></td>
  </tr>
  <?php
  }
                    }
  ?>
  <a href="<?php echo base_url()?>main/index">Back To Home</a>
   </tbody>
  </table>
</fieldset>

</form>
</body>
</html>

