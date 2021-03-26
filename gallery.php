<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template for an Interactive Web Page</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
</head>
<body>
    <div class="container" style="margin-top:30px">
    <!-- Header Section                                      #1-->
    <header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;">
       <?php include('header.php');?>
    </header>

    <!-- Body Section                                          #2--> 
        <div class="row" style="padding-left:0px">
        <!-- Left-side Column Menu Section -->
           <nav class="col-sm-2">
            <ul class="nav nav-pills flex-column"> 
            <?php include('nav.php');?>
            </ul>
           </nav>
    <!-- Center Column Content Section -->
       <div class="col-sm-8">
          <h2 class="text-center">Welcome to the Photo Gallery of Zack Amata's Interactive Web Page!!</h2>
		  
		  <p style="float: left; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;"><img src="images/DSC_0005.JPG" style="width: 100%">That is me Zack Amata with my wife Ochuko</p>
		  <p style="float: left; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;"><img src="images/DSC_0007.JPG" style="width: 100%">Me, Ochuko and Anwuli</p>
		  <p style="float: left; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;"><img src="images/DSC_0193.JPG" style="width: 100%">The birthday cake</p>
		  <p style="float: left; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;"><img src="images/DSC_0023.JPG" style="width: 100%">General Edafioghor,Zack Amata, Ocuko Amata, Prof Ifo Amata</p>
		  <p style="float: left; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;"><img src="images/DSC_0328.JPG" style="width: 100%">Ifo </p>
		  <p style="float: left; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;"><img src="images/S176-024.jpg" style="width: 100%">Professor Alex Ifo Amata</p>
		  
		  
		  
		  
		  <p>
		  <img src="images/DSC_0005.JPG" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		  <img src="images/DSC_0007.JPG" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		  <img src="images/DSC_0193.JPG" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		  <img src="images/DSC_0328.JPG" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		  <img src="images/DSC_0023.JPG" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		  <img src="images/S176-024.jpg" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		  <img src="images/" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		  <img src="images/" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		  <img src="images/" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		  <img src="images/" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">

<p style="clear: both;">
		  </p>
       </div>   

    <!-- Right-side Column Content Section                               #3-->  
        <aside class="col-sm-2">
        <?php include('info-col.php');?>
        </aside>  
    
    <!-- Footer Content Section                                            #4-->
    <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
    <?php include('footer.php');?>
    </footer>
    </div>
	</div>
</body>
</html>

