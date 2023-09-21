<? include "config.php"?>
<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Profile</div>
    <div class="#">
        <img src="image.png" width="14%" height="14%">

      <form action="profile_process.php" method="POST">
        <div class="user-details">
          
            
            <div class="input-box">
              <span class="details">User Name</span>
              <input type="text" placeholder="Your name" name="user_name" required>
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" placeholder="Email" name="email" required>
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" placeholder="phone number" name="number" required>
            </div>
          
            <div class="input-box">
              <span class="details">Address</span>
              <input type="text" placeholder="address" name="addrses" required>
            </div>
          </div>
          
          </div>
          <button style="float: left;margin: 30px 0 0 20.2%;">CANCEL</button>


<button
name="Update" style="float: right;margin: 30px 20.2% 0 0;">Update</button>
      </form>
    </div>
  </div>

</body>
</html>
