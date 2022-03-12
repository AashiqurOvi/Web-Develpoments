<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name ="viewport" content=" width= device-width">
    <title>EZ Life | Sign Up </title>
    <link rel="stylesheet" href ="./css/style.css">

  </head>
  <body>
    <header>
      <div class ="container">
        <div id ="branding ">
          <h1><span class="highlight">EZ</span> Life Project</h1>
          </div>
          <nav id ="navigation">
            <ul>
              <li> <a href="index.php">Home </a> </li>
              <li> <a href="login.php">Log in</li>
              <li class="current"> <a href="signup.php">Sign up</li>
              <li> <a href="about.php">About </a> </li>
            </ul>
          </nav>
          </div>
    </header>

    <section id = "showcase_signup" >
          <div class = "signup-box">

            <h1>Sign Up as User </h1>
              <form class="quote" action="sign01.php" method="POST">
                <div class="textbox">
                  <br>
                  <input type="text" placeholder="Name" name="U_name">
                </div>
                <div class="textbox">
                  <input type="email" placeholder="Email" name="U_email">
                </div>
                <div class="textbox">
                <input type="password" placeholder="Passsword" name="U_password">
                </div>
                <div class="textbox">
                <input type="text" placeholder="Phone No." name="U_phone">
                </div>
                <div class="textbox">
                <input type="text" placeholder="NID" name="U_nid">
                </div>
                <div class="textbox">
                <input type="text" placeholder="House No, Block, Road, Area, Dhaka" name="U_address">
                </div> <br>
                <button class="button_1" type="submit">Submit</button>
              </form>
              </div>

      </section>




    <footer>
      <p>EZ Life Co. &copy; 2019</p>
    </footer>
  </body>
</html>
