<!--?php
include('dbcon.php');
?-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | SignUp</title>
  <header>
    <nav>
      <ul>
        <li><a href="./homepg.html" style="font-size: 18px;">Home</a></li>
        <li><a href="./aboutpg.php" style="font-size: 18px;">About</a></li>
        <li><a href="./showcase.php" style="font-size: 18px;">Showcase</a></li>
        <li><a href="./browse.php" style="font-size: 18px;">Browse</a></li>
        <li><a href="./dashboard.php" style="font-size: 18px;">Dashboard</a></li>
      </ul>
    </nav>
  </header>
  <style>
    * {
      font-family: 'Luxurious Roman', cursive;
      color: azure;
      
    }

    body {
      background-image: url(./bg.jpg);
      width: 100%;
      height: 100%;
      background-position: center;
      background-size: cover;
      position: relative;
      overflow: hidden;
    }


    header {
      background: rgba(255, 255, 255, 0);
      padding: 5px;
      box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
      position: fixed;
      top: 0;
      width: 100%;
    }

    nav ul {
      margin-right: 10px;
      list-style-type: disc;
      margin-block-start: 1em;
      margin-block-end: 1em;
      margin-inline-start: 0px;
      margin-inline-end: 0px;
      padding-inline-start: 40px;
      display: flex;
      justify-content: flex-end;
    }

    nav li {
      display: flex;
      margin-left: 20px;
      margin-right: 20px;
      align-items: right;
    }

    nav a {
      color: rgb(249, 247, 247);
      text-decoration: none;
      font-size: 25px;
    }
   
    .nav ul li:hover::before{
        width: 100%;
    }

    .nav ul li:hover::after{
        width: 100%;
        text-decoration: underline;
    }
    nav ul li::after {
      content: '';
      width: 0%;
      height: 2px;
      background: #d38581;
      display: block;
      margin: auto;
      transition: 0.5s;
    }
    .logo{
        background-image: url(./paperlesspages.png);
        background-repeat: no-repeat;
        position: absolute;
        top:6vh;
        background-position: center;
        width:750px;
        height: 320px;
        left: 600px;
        overflow: hidden;
    }

    form {
      align-items: center;
      width: 40%;
      margin-top: 300px;
      margin-left: 525px;
      padding: 40px;
      background: rgba(255, 255, 255, 0);
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0);
      font-family: 'Luxurious Roman', cursive;
    }
   
    h2 {
      margin-bottom: 20px;
      text-align: center;
      color: #e11e1e;
    }
    label{
      margin-left: 15vh;
      margin-top : 5vh;
      top:5vh;
    }

    input {
       width: 50%;
       padding: 10px;
       /* font-style: normal; */
       font-weight: normal;
       margin-bottom: 25px;
       margin-top: 25px;
       margin-left: 5vh;
       background-color: rgb(0 0 0 / 32%);
       border-radius: 5px;
       font-size: 20px;
       color: antiquewhite;
       border: 0px;
    }

    input.error {
      border: 2px solid #e74c3c;
    }

    input.success {
      border: 2px solid #2ecc71;
    }

    button {
      padding: 10px;
      margin-left: 370px;
      border: none;
      margin-top:4vh;
      background-color: #5d270cd5; 
      border-radius: 5px;
      color: #fff;
      font-size: 26px;
      cursor: pointer;
    }

    button:hover {
      background-color: #532007a9;
    }

    .form-group {
      margin-top:vh;
    }
  </style>
</head>

<body>
  <div class="logo">
  </div>
  <br/>

  <form action="code.php" method="POST">
            <div class="modal-body">
                <div class="form">
                    <label for=""> UserName </label>
                    <input type="text" name="username" class="form-control"  placeholder="Enter your UserName">
                     </br></br>
                </div>
                <div class="form">
                    <label for=""> EMail ID  </label> &nbsp;
                    <input type="email" name="email_id" class="form-control" placeholder="Enter your EMail ID">
                    </br></br>
                </div>
                <div class="form">
                    <label for=""> Password </label>&nbsp;
                    <input type="password" name="passwordsignup" class="form-control" placeholder="Enter your Password">
                    </br></br>
                </div>    
            </div>
            <div class="modal-footer justify-content-between">
              <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
              <button type="submit" name="adduser" class="btn btn-primary">Submit</button>
            </div>
    </form>
</body>
</html>