<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Proza+Libre&display=swap"
      rel="stylesheet"
    />
  </head>

  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: "Luxurious Roman", cursive;
    }

    body,
    .bg {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
    }

    .bg::before {
      content: "";
      background: url("./background.jpg") no-repeat center center/cover;
      opacity: 0.89;
      z-index: -51;
      position: absolute;
      top: 0%;
      left: 0%;
      width: 100%;
      height: 100vh;
      box-sizing: border-box;
    }

    .navbar {
      position: absolute;
      top: 0px;
      background: rgba(144, 119, 119, 0.1);
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      width: 100vw;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar-links {
      flex: 1;
      text-align: right;
    }

    .navbar-links ul li {
      list-style: none;
      display: inline-block;
      padding: 20px 35px;
      position: relative;
    }

    .navbar-links ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 30px;
    }

    .navbar-links ul li::after {
      content: "";
      width: 0%;
      height: 2px;
      background: #d38581;
      display: block;
      margin: auto;
      transition: 0.05s;
    }

    .navbar-links ul li:hover::after {
      width: 100%;
    }

    .logopaper {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100vw;
      border-radius: 2px;
    }

    .tpicks {
      width: 100vw;
      font-family: "Proza Libre";
      font-style: normal;
      font-weight: 400;
      font-size: 19px;
      line-height: 41px;
      text-align: center;
      color: #ffffff;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .comm1 {
      width: 100vw;
      font-family: "Proza Libre";
      font-style: normal;
      font-weight: 700;
      font-size: 15px;
      line-height: 30px;
      text-align: center;
      color: #ffffff;
    }

    .backdrop {
      width: 1000px;
      height: 300px;
      background: #9c919148;
      display: flex;
      align-items: center;
      justify-content: space-around;
      margin-top:20px
    }

    .pic {
      width: 165px;
      height: 250px;
      z-index: 100;
    }

    .more {
      width: 100vw;
      height: 41px;
      text-align: center;
      font-family: "Proza Libre";
      font-style: normal;
      font-weight: 300;
      font-size: 20px;
      line-height: 41px;
      color: #ffffff;
      padding-top: 20px;
    }
  </style>

  <body>
    <div class="bg">
      <div class="navbar">
        <div class="navbar-links">
          <ul>
            <li><a href="./homepg.html" style="font-size: 15px">Home</a></li>
            <li><a href="./aboutpg.html" style="font-size: 15px">About</a></li>
            <li><a href="./browse.php" style="font-size: 15px">Browse</a></li>
            <li>
              <a href="showcase.php" style="font-size: 15px">Showcase</a>
            </li>
            <li>
              <a href="login.php" style="font-size: 15px">Login | SignUp</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="logopaper">
        <img
          src="./paperlesspages.png"
          height="250px"
          width="650px"
          alt="logo"
          style="vertical-align: middle"
        />
      </div>

      <div class="comm1">
        Life without an eBook is like life without a library nearby.
      </div>

      <div class="tpicks">- OUR TOP PICKS THIS MONTH -</div>

      <div class="backdrop">
        <marquee scrollamount="6">
        <img src=".\51kRgXabxNL 1.jpg" alt="" class="pic" style="padding-top: 25px;padding: 40px;"/>
        <img src=".\71lgdkZocLL 1.jpg" alt="" class="pic" style="padding-top: 25px;padding: 40px;"/>
        <img src=".\71XuGvUBAcL 1.jpg" alt="" class="pic" style="padding-top: 25px;padding: 40px;"/>
        <img src=".\81browCHrSL 1.jpg" alt="" class="pic" style="padding-top: 25px;padding: 40px;"/>
        <img src=".\81dAI+6eS1S 1.jpg" alt="" class="pic" style="padding-top: 25px;padding: 40px;"/>
        </marquee>
      </div>
      <div class="more">For More Check Our Library</div>
    </div>
  </body>
</html>