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
            <form action="login.php" autocomplete="off" class="sign-in-form" method="post">
              <div class="logo">
                <img src="img/logo.png">
                <h4>Medic</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
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
                  <label>Uid</label>
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

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form action="register.php" autocomplete="off" class="sign-up-form" method="post">
              <div class="logo">
                <img src="img/logo.png">
                <h4>Medic</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">

                <!-- Progress bar -->
                <div class="progressbar">
                  <div class="progress" id="progress"></div>
                  
                  <div
                    class="progress-step progress-step-active"
                    data-title="Intro"
                  ></div>
                  <div class="progress-step" data-title="Details"></div>
                  <div class="progress-step" data-title="Docs"></div>
                  <div class="progress-step" data-title="Password"></div>
                </div>

                <!-- Steps -->
                <div class="form-step form-step-active">

                  <div class="input-group">
                    <div class="input-wrap">
                      <input type="text" minlength="4" class="input-field" name="username" id="username"/>
                      <label>Name</label>
                    </div>
                  </div>

                  <div class="input-group">
                    <div class="input-wrap">
                      <input type="email" minlength="4" class="input-field" name="email" id="email" />
                      <label>Email</label>
                    </div>
                  </div>

                  <div class="input-group">
                    <div class="input-wrap">
                      <input type="number" minlength="10" maxlength="10" class="input-field" name="phone" id="phone"/>
                      <label>Phone Number</label>
                    </div>
                  </div>

                  <div class="input-group">
                    <div class="input-wrap">
                      <textarea type="text" class="input-field" name="address" id="address" ></textarea>
                      <label>Address</label>
                    </div>
                  </div>

                  
                  <div class="">
                    <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
                  </div>
                </div>
                <div class="form-step">
                  <div class="input-group">
                    <div class="input-wrap">
                      <input type="date" class="input-field" name="dob" id="dob"/>
                      <label>Date of birth</label>
                    </div>
                  </div>

                  <div class="input-group">
                    <div class="input-wrap">
                      <select class="input-field" name="gender" id="gender">
                        <optgroup label="Gender">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>

                  <div class="input-group">
                    <div class="input-wrap">
                      <select class="input-field" name="mstatus" id="mstatus">
                        <optgroup label="Marital Status">
                          <option value="unmarried">Unmarried</option>
                          <option value="married">Married</option>
                          <option value="divorced">Divorsed</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>

                  <div class="input-group">
                    <div class="input-wrap">
                      <select class="input-field" name="employment" id="employment">
                        <optgroup label="Employment status">
                          <option value="Employed">Employed</option>
                          <option value="Unemployed">Unemployed</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>
                <div class="form-step">
                  <div class="input-group">
                    <div class="input-wrap">
                      <input class="input-field" type="file" name="fileToUpload" id="fileToUpload">
                      <label style="color: #000 !important;">Passport size photo (click to upload)</label>
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-wrap">
                      <input type="file" class="input-field" name="adh" id="adh"  style="opacity: 0;"/>
                      <label style="color: #000 !important;">Aadhar card (click to upload)</label>
                    </div>
                  </div>

                  <div class="input-group">
                    <div class="input-wrap">
                      <input type="number" class="input-field" name="aadharnumber" id="aadharnumber"/>
                      <label>Adhar card number</label>
                    </div>
                  </div>

                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
                </div>
                <div class="form-step">
                  <div class="input-group">
                    <div class="input-wrap">
                      <input type="password" minlength="4" class="input-field" name="password" id="password"/>
                      <label>Password</label>
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-wrap">
                      <input type="password" minlength="4" class="input-field" name="cpassword" id="cpassword"/>
                      <label>Confirm Password</label>
                    </div>
                  </div>
                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <input type="submit" name="register" value="Submit" class="btn" />
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/img.png" class="image img-1 show" alt="" />
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
    <script src="app.js"></script>
    <script type="text/javascript" src="js/register.js"></script>
  </body>
</html>