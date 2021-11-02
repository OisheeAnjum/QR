<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">QR Generator</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link"style="color:#FFFF" href="index.php">Home</a></li>
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-user"></i>Login</button>
                        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><i class="fa fa-user-plus"></i>SignUp</button>
                    </ul>
                </div>
            </div>
        </nav> 
 <div id="id01" class="modal">

                        <form class="modal-content animate"  action="/action_page.php" method="post">
                          <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                          
                            <a class="navbar-brand" id="modal" href="#!">QR<span>Generator</span></a>
                          </div>
                      
                          <div class="c1">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>
                      
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                              
                            <button type="submit">Login</button>
                            <label>
                              <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                          </div>
                      
                          <div class="container" style="background-color:#f1f1f1">
                            
                            <span class="psw">Forgot <a href="#">password?</a></span>
                          </div>
                          
                        </form>
                      </div>


                    
                    <div id="id02" class="modal">

                        <form class="modal-content animate" action="/action_page.php" method="post">
                          <div class="imgcontainer">
                            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                         
                            <a class="navbar-brand" id="modal" href="#!">QR<span>Generator</span></a>
                          </div>
                      
                          <div class="c1">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter email" name="email" required>

                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>
                      
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <label for="cpsw"><b>Confirm Password</b></label>
                            <input type="password" placeholder="Retype Password" name="cpsw" required>
                              
                            <button type="submit">SignUp</button>
                            <label>
                              <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                          </div>
                      
                          <div class="container" style="background-color:#f1f1f1">
                          
                            <span class="psw">Forgot <a href="#">password?</a></span>
                          </div>
                          
                        </form>
                      </div>
                      


