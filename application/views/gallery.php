<!DOCTYPE html>
<html>
    <head>
        <title>AIRLIFT</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        .back
{
   background-color: rgba(0,0,0,0.1); 
}
.front
{
   background-color: rgba(0,0,0,0.3);
   margin: 1px; 

</style>

<header>
    <nav class="back">
        <div class="container-fluid top ">
            <div class="row">
                <div class="col-7">
                    <a href="#"class="text-decoration-none  text-dark">Home</a>
                    <a href="#" class="text-decoration-none  text-dark">Terms</a>
                </div>
            <div class="col-5 text-end">
                    <i class="fab fa-facebook text-dark"></i>
                    <i class="fab fa-instagram text-dark"></i>
                    <i class="fab fa-youtube text-dark"></i>
                    <i class="fab fa-google text-dark"></i>
                </div>
            </div>
        </div>
    </nav>
</header>
<nav class="navbar navbar-expand-lg top1 front">
        <div class="container">
            <a href="#" class="text-decoration-none text-dark"><h4>AIRLINE FLIGHT AND RESERVATION SYSTEM</h4></a>
                <ul class="navbar-nav">
                <li class="nav-item"><a href="<?php echo base_url()?>main/index" class="nav-link  text-dark">Home</a></li>
            </ul><ul></ul>
        </div>
    </nav>
    <div class="head">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
                <div class="carousel-item active">
                      <img src="../img/13.jpg" class="d-block w-100" alt="pic">
                </div>
              <div class="carousel-item">
                      <img src="../img/12.jpg" class="d-block w-100" alt="pic">
              </div>
              <div class="carousel-item">
                      <img src="../img/11.jpg" class="d-block w-100" alt="pic">
              </div>
              <div class="carousel-item">
                      <img src="../img/38.jpg" class="d-block w-100" alt="pic">
              </div>
               <div class="carousel-item">
                      <img src="../img/17.jpg" class="d-block w-100" alt="pic">
              </div>
               <div class="carousel-item">
                      <img src="../img/15.jpg" class="d-block w-100" alt="pic">
              </div>

          </div>
    </div>
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
</button>



 <!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">

</script>
</body>     
</html>



