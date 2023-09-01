<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome Oti Lanfill Site</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
  
</head>
<body>
  <?php
  include 'header.php';
  ?>
    <div class="container">
          <div class="inline-flex">
           <?php 
    echo "<h1>KMA OTI LANDFILL SITE</h1>"
    ?>
     <img src="kma.svg" width="155" height="150" alt="logo"/>
        
    </div>

  
   
    <section class="section-flex">
       

     <?php 
    echo "<h3>Hello Administrator, Welcome</h3>"
    ?>
           <ul>
    
        <li>
            <a href="#"> LOGIN</a>    
       </li>
          <li>
            <a href="#">REGISTER</a>    
        </li>
          <li>
            <a href="#">  FORGOT PASSWORD</a>    
      ?</li>
    </ul>
        
    </section>
   
    </div>
       <?php include 'footer.php'; ?>
 

</body>
</html>