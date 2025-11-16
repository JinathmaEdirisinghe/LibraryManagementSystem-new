<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register to LMS</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="form_container">
      <div class="form">
         <div class="section1">
            <div class="title">
               <div class="title1">Welcome</div>
               <div class="form_logo">
                  <img src="image/Logo.png" alt="Logo" width="150px">
               </div>
               <div class="title3">Library Management System</div>
            </div>
            <div class="image">
               <img src="image/LMS 1 .png" alt="LMS Image">
            </div>
         </div>

         <div class="section2">
            <form action="#" method="post">
               <h2>Registration Form</h2>

               <div class="input_box">
                  <label>Registration No</label>
                  <input type="text" name="reg_no">
               </div>

               <div class="box2">
                  <div class="input_box">
                     <label>First Name</label>
                     <input type="text" name="first_name">
                  </div>
                  <div class="input_box">
                     <label>Last Name</label>
                     <input type="text" name="last_name">
                  </div>
               </div>

               <div class="box2">
                  <div class="input_box">
                     <label>Password</label>
                     <input type="password" name="password">
                  </div>
                  <div class="input_box">
                     <label>Confirm Password</label>
                     <input type="password" name="confirm_password">
                  </div>
               </div>

               <div class="input_box">
                  <label>Email</label>
                  <input type="email" name="email">
               </div>

               <div class="input_box">
                  <label>Mobile No</label>
                  <input type="number" name="phone">
               </div>

               <button type="submit" name="register">Register</button>

               <div class="buttom_link">
                  <p>Already have an account? <a href="login.php">Login</a></p>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
</html>
