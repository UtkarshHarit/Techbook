

<!--
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>TECHBOOK LOGIN</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<div class="container">
  <div class="info">
    <h1>TECHBOOK LOGIN</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Tanishq Singhal</a></span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="register-form" action="register.php" method="POST" enctype='multipart/form-data'>
    <input type="text" name="username" placeholder="username"/>
    <input type="text" name="colid" placeholder="CollegeID"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="text" name="email" placeholder="email address"/>
    <label style="font-style: italic bold; text-decoration: underline;">Upload Profile Picture</label>
    <input type="file" name="img" id="img" />
  
    <button>create</button>
    
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="form" action="login.php" method="POST">
    <input type="text" name="username" placeholder="username"/>
    <input type="password" name="password" placeholder="password"/>
    <button>login</button>
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>-->















<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>TECHBOOK</title>
    <meta name="description" content="Examples for creative website header animations using Canvas and JavaScript" />
    <meta name="keywords" content="header, canvas, animated, creative, inspiration, javascript" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>



  </head>
  <body>






    <div class="container demo-1">
      
        <div id="large-header" class="large-header">
          <canvas id="demo-canvas"></canvas>
          
          <h1 class="main-title">

          <br /> 









          
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="register-form"  action="register.php" method="POST" enctype='multipart/form-data'>
   <input type="text" name="username" placeholder="username" required/>
    <input type="text" name="colid" placeholder="CollegeID" required />
    <input type="password" name="password" placeholder="password" required/>
    <input type="text" name="email" placeholder="email address" required/>


<input type="button" id="loadFileXml" value="SELECT PROFILE PICTURE" onclick="document.getElementById('img').click();" />
<input type="file" style="display:none;" id="img" name="img" required />




   <!-- <input style="color: black; display:none;" type="file" name="img" id="img"  />-->


    <button>create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="form" action="login.php" method="POST">
    <input type="text" placeholder="username" name="username" required/>
    <input type="password" placeholder="password" name="password" required/>
    <button>login</button>
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
</div>




          </h1>

        </div>
        
        
        
        </div>
     



    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script src="js/TweenLite.min.js"></script>
    <script src="js/EasePack.min.js"></script>
    <script src="js/rAF.js"></script>
    <script src="js/demo-1.js"></script>
    
  </body>
</html>