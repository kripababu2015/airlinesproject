<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
<th>Cost</th>
<th>firstclass seatcapacity</th>
<th>economicclass seatcapacity</th>
<th>Buisnessclass seatcapacity</th>
<th>firstclass seatavailability</th>
<th>economicclass seatavailability</th>
<th>Buisnessclass seatavailability</th>
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
<td><?php echo $row->cost;?></td>
<td><?php echo $row->cfirst;?></td>
<td><?php echo $row->ceconomic;?></td>
<td><?php echo $row->cbuisness;?></td>
<td><?php echo $row->afirst;?></td>
<td><?php echo $row->aeconomic;?></td>
<td><?php echo $row->abuisness;?></td>
 <input type="hidden" name="id" value="<?php echo $row->id;?>">
<td><a href="<?php echo base_url()?>main/updateflight/<?php echo $row->id;?>">Edit</a></td>
<td><a href="<?php echo base_url()?>main/deleteflight/<?php echo $row->id;?>">Delete</a></td> 
</tr>
<?php
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