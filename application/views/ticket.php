
    </fieldset>

   </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>updation</title>
    <style>
        fieldset{
            padding: 10px;
            margin-left:450px;
            text-align:center;
        }
        input{
            padding:10px;
            margin-top: 5px;
            text-align:center;
        }
        textarea{

            margin-top: 5px;
            text-align:center;
        }body
        {
            background-image: url(../img/8.jpg);
            background-size:cover;
            width: 600px;
        }


    </style>
</head>
<body>
  <center> <h1>YOUR TICKET</h1>
    
    <form action="<?php echo base_url()?>main/" method="POST">

<?php
        if(isset($n))
        {
            foreach($n->result() as $row1)
            {
                ?>
        <input type="text" name="name" placeholder="Name" value="Name
         : 
         <?php echo $row1->fname;?>" size="50"></br>
        <input type="text" name="name" placeholder="Name" value="Booking id 
        :  
        <?php echo $row1->bid;?>" size="50"></br>
        <input type="text" name="name" placeholder="Name" value="Departure Place 
      :
         <?php echo $row1->departure;?>" size="50"></br>
      <input type="text" name="name" placeholder="Name" value="Arrival Place
      :
      <?php echo $row1->arrival;?>" size="50"></br>
      <input type="text" name="name" placeholder="Name" value="Departure Date 
      :
      <?php echo $row1->depdate;?>" size="50"></br>
      <input type="text" name="name" placeholder="Name" value="Arrival Date 
      :
      <?php echo $row1->arrdate;?>" size="50"></br>
      <input type="text" name="name" placeholder="Name" value="Departure Time
      :
      <?php echo $row1->deptime;?>" size="50"></br>
      <input type="text" name="name" placeholder="Name" value="Arrival Time 
      :
      <?php echo $row1->arrtime;?>" size="50"></br>
      <input type="text" name="name" placeholder="Name" value="Ticket Charge
      :
      <?php echo $row1->ticketcharge;?>" size="50"></br>
    <?php
}
    }
?>
    </center>

   </form>
</body>
</html>
