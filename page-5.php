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
          <h2 class="text-center">Welcome to Page Five of Zack Amata's Interactive Web Page!!</h2><img src="images/baka.jpg" alt="" style="padding-right:10px;padding-bottom:5px;float:left;width:400px">
              <p><img src="" alt="" style="float:right;width:400px">This is the main home page content. This is the main home page content. This is the main home page content.
              This is the main home page content. This is the main home page content. This is the main home page content.<br>
              This is the main home page content. This is the main home page content. This is the main home page content.
              This is the main home page content. This is the main home page content. This is the main home page content.
              This is the main home page content. This is the main home page content. This is the main home page content.<br>
              This is the main home page content. This is the main home page content. This is the main home page content.<img src="images/DSC_0122.JPG" alt="" style="float:right;width:400px">
              This is the main home page content. This is the main home page content. This is the main home page content.
              This is the main home page content. This is the main home page content. This is the main home page content.<br>
              This is the main home page content. This is the main home page content. This is the main home page content.<br>
              This is the main home page content. This is the main home page content. This is the main home page content.</p>
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

