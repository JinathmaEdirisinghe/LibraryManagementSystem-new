<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login to LMS</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="form_container">
      <div class="form">
         <div class="close_btn">
            <a href="index.html"><i class="fa-solid fa-xmark"></i></a>
         </div>
         <div class="section1">
            <div class="title">
               <div class="title1">welcome</div>
               <div class="form_logo">
                  <img src="image/Logo.png" alt="" width="150px">
               </div>
               <div class="title3">library management system</div>
            </div>
            <div class="image">
               <img src="image/LMS 2 .png" alt="" width="200px">
            </div>
         </div>
         <div class="section2 login">
            <form action="#" method="post">
               <h2>Login Form</h2>
               <div class="input_box">
                  <label>Registration No</label>
                  <input type="text" name="reg_no" required>
               </div>
               <div class="input_box">
                  <label>Password</label>
                  <input type="password" name="password" required>
               </div>
               <button type="submit" name="login">Login</button>
               <div class="buttom_link">
                  <p>I don't have an account <a href="register.php">Register</a></p>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
</html>