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
<body class=" mt-5 bg-dark text-white">
  <CENTER><h1>  FLIGHT DETAILS</h1></CENTER>  
<fieldset>
  <?php 
    if(isset($user_data)) 
    {
      foreach($user_data->result() as $row1)
      {
      ?>
<form class="container" method="post" action="<?php echo base_url()?>main/viewflightdetails">
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

  <div class="form-group">
    <label >Ticket Charge :</label>
    <input type="text" class="form-control" name="cost" value="<?php echo $row1->cost;?>">
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
  
  <input type="submit" name="submit">
</form>
<?php
          }
        } 
        ?>
</fieldset>
</body>
</html>