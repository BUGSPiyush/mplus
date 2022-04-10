<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="hlogin.php" autocomplete="off" class="sign-in-form" method="post">
              <div class="logo">
                <img src="../img/logo.png">
                <h4>Medic</h4>
              </div>

              <div class="heading">
                <h2>Hospital Login</h2>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                  name="uid"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>username</label>
                </div>

                <div class="input-wrap">
                  <input
                    name="password"
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" name="signin" value="Sign In" class="sign-btn" />

              </div>
            </form>
          </div>
          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/image3.png" class="image img-1 show" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Your Data vault</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Javascript file -->
    <script src="../app.js"></script>
    <script type="text/javascript" src="js/register.js"></script>
  </body>
</html>