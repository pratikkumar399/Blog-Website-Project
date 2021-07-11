<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
    <link rel="stylesheet" href="indexstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	 <style>
     body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
   </style>
	
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Kontent Creator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="postpage.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                          Blogs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="programming.html">Programming</a></li>
                            <li><a class="dropdown-item" href="lifestyle.html">Lifestyle</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="aboutus.php" tabindex="1" aria-disabled="true">About us</a>
                    </li>
                </ul>
                

            </div>
        </div>
    </nav>

   <hr>


<div class="about-section">
  <h1>About Us Page</h1>
  <p>Know the Kontent Bloggers.</p>
  <p>We are a group of three programmers having interest in programming .  We have made this website to showcase our programming capability . Also we will be creating a lot of stuff on this website . So , keep an eye on it and check us out regularly.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="IMG_20200320_004341.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Pratik Rai</h2>
        <p class="title">Developer</p>
        <p>Hey , I have programed the backend of  this website.</p>
        <p>pratikkumar399@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="WhatsApp Image 2021-07-07 at 7.16.43 PM.jpeg" alt="Lovepreet" style="width:100%">
      <div class="container">
        <h2>Lovepreet Singh</h2>
        <p class="title">Designer</p>
        <p>I'm a designer. And I have designed most of the webpage through my css skills</p>
        <p>mike@example.com</p>
        <p><a href="https://www.linkedin.com/in/lovepreet-singh-46a714200"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="WhatsApp Image 2021-07-07 at 8.20.52 PM.jpeg" alt="Ravi" style="width:100%">
      <div class="container">
        <h2>Ravi Kumar rana</h2>
        <p class="title">Html Expert</p>
        <p>I am very well versed in HTML. And I have designed the structure of this website</p>
        <p>john@example.com</p>
        <p><a href="http://linkedin.com/in/ravi-kumar-rana-710934159"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>