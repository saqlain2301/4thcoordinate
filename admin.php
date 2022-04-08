<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Charity</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script
      type="text/javascript"
      src="https://npmcdn.com/parse/dist/parse.min.js"
    ></script>

</head>

<body>
  <!-- ======== header started ========= -->
  <header>
    <div class="my-nav">
      <div class="container">
        <div class="row">
          <div class="nav-items">
            <div class="menu-toggle">
              <div class="menu-hamburger"></div>
            </div>
            <div class="logo">
             <img src="assets/images/4clogo.jpeg">
            </div>
            <div class="menu-items">
              <div class="menu">
                <ul>
                  <li><a>Admin Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ======== main started ========= -->

  <main class="charity-01-main">

    <!-- ============abt-01 Section  Start============ -->

    <section class="abt-01">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-wrapper">
                        <h3>Admin Login</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="bg-0-b">
         <div class="container">
             <div class="row">
                 <div class="main-card-contact d-flex">

                     <div class="sup-card-contact-0a">
                         <div class="contact-a1">
                             <div id='success' style="display: none;"><h2>Success</h2></div>
                             <div id='failure' style="display: none;"><h2>Registration failed</h2></div>
                             <form>
                                 <div class="dived d-flex">
                                     <div class="form-group">
                                        <div class="form-sup">
                                            <div class="cal-01">
                                                <input type="text" name="username" id="username" class="form-control"
                                                    placeholder="Enter Your user Name">
                                                <i class="fal fa-user-tie"></i>
                                            </div>

                                            <div class="cal-01">
                                                <input type="email" name="email" id="email" class="form-control"
                                                    placeholder="Enter Your Email">
                                                <i class="fal fa-at"></i>
                                            </div>

                                            <div class="cal-01">
                                                <input type="password" name="password" id="password" class="form-control"
                                                    placeholder="password">
                                                <i class="fal fa-person-sign"></i>
                                            </div>

                                            <div class="cal-01">
                                                <input type="submit" name="submit" class="form-control fal fa-person-sign" id='signUp'
                                                    placeholder="SignUp">
                                                
                                             </div>
                                        </div>
                                    </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
  </main>

<!-- =====================>>>>>Footer Started>>>>>======================== -->

</body>
<script>

    // Initialize Parse
      Parse.initialize("pEI5H6qCeMJTNTzvVYYV52W6lYPNidMpOoB3ewpN", "ybrQu6Ls18Mt79VFfPO7WrfshZJrGJrsAgPlA80n"); //PASTE HERE YOUR Back4App APPLICATION ID AND YOUR JavaScript KEY
      Parse.serverURL = "https://parseapi.back4app.com/";

     async function createParseUser() {
        // Creates a new Parse "User" object, which is created by default in your Parse app
        let user = new Parse.User();
        // Set the input values to the new "User" object
        user.set("username", document.getElementById("username").value);
        user.set("email", document.getElementById("email").value);
        user.set("password", document.getElementById("password").value);
        try {
            // Call the save method, which returns the saved object if successful
            user =  await user.save();
            if (user !== null) {
                console.log('user created ')
                document.getElementById('success').style.display='block';
            // Notify the success by getting the attributes from the "User" object, by using the get method (the id attribute needs to be accessed directly, though)
            window.alert(
                `New User created with success! ObjectId: ${
                user.id
                }`
            );
            }
        } catch (error) {
            console.log('unable to create user')
            document.getElementById('failure').style.display = 'block';
            window.alert(`Error: ${error.message}`);
        }
        }

        // Add on click listener to call the create parse user function
        document.getElementById("signUp").addEventListener("click",async function () {
            createParseUser();
        });
    </script>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

</html>
