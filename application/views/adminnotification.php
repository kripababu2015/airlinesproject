<!DOCTYPE html>
<html>
<head>
	<title>Flight Notification</title>

	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<style>
		
		fieldset{
			width:500px;
			height: 400px;
		}
		.bg{
			background-image: url("../img/bg1.jpeg");
		}

	</style>
</head>
<body class="bg">

<form method="post" action="<?php echo base_url()?>main/notify_action" class="form-group">
	<center>
		
		<fieldset>
			<?php 
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
					{
			?>
			<h1 class="py-5">Flight notification</h1>
			<label class="bold">select flight number</label> 
			<select name="fno" class="form-select">
		
				<option value="<?php echo $row->id;?>"><?php echo $row->fno?>
					
				</option>
			</select>

				<label class="bold">select flight name</label> 
			<select name="fname" class="form-select">
		
				<option ><?php echo $row->fname?>

					
				</option>
			</select>

			<label class="bold">Departure date</label> 
			<select name="bus" class="form-select">
		
				<option><?php echo $row->depdate?>

					
				</option>

			
			<?php
				}
			}
			?>
			</select><br><br>
			<!-- <label class="bold">today's date</label> <br>
			<input type="date" name="sdate"><br><br> -->
			<textarea placeholder="Notification" name="notification" class="form-control"></textarea><br><br>
			<a href="<?php echo base_url()?>main/adhome" class="btn btn-warning">Back</a>
			<input type="submit" name="submit" value="Notify" class="btn btn-primary">

		</fieldset>
	</center>

</form>

</body>
</html>