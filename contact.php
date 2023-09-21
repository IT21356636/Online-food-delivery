<? include "config.php"?>

<!DOCTYPE html>
<html land="en">
 <head>
  <meta charset="UTF-8">
   <title>contact us</title>
    <link rel="stylesheet" href="css/contact.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    
 </head>
    <body>
     <div class="container">
	  <h1>Contact us</h1>
	  <p>we would love to responds to your queries and help you succeed.</p>
	  <div class="contact-box">
	   <div class="contact-left">
	   <h3>sent your request</h3>
	   <form action="contact_process.php" method="POST" id="reg_form">
        <div>     
        <div>
                    <div><div>
                        <label for="name"><b> Name :</b></label>
                        <input class="form-contactus" type="text" id="fname" name="c_name" placeholder="name.." autocomplete="off" required="">
                    </div><br>
                    <div>
                        <label for="email"><b>Email :</b></label>
                        <input class="form-contactus" type="Email" id="email" name="C_email" placeholder="Your valide email.." autocomplete="off">
                    </div><br>
                    <div>                        
                        <label for="male"><b>Male :</b></label>
                        <input class="form-radio" type="radio" name="gender" id="male" value="M" checked>
                        <label for="male"><b>Female :</b></label>
                        <input class="form-radio" type="radio" name="gender" id="female" value="F">
                    </div><br>
                    <div>
                        <label for="description"><b>Description :</b></label><br>
                        <textarea class="form-element" name="C_description" rows="6" cols="50"></textarea>
                    </div><br>
                    <div>
                        <input type="submit" class="contactus_btn " id="contactus_btn" value="Submit" style="vertical-align:middle">
                    </div><br>
                    </div>    
	   
	   
	   </div>
	   <div class="contact-right">
	    <h3>Rech us with</h3>
		
		<table>
		 <tr>
		 <td>Email</td>
		 <td>Yummyfood1990@gmail.com</td>
		 </tr>
		 <tr>
		 <td>Phone number</td>
		 <td>+94 779008511</td>
		 </tr>
		<tr>
		 <td>Address</td>
		 <td>SLIIT(Sri Lanka  Institute of information technology)<br>
		Mihidu mawath<br>
		 Kurunegala</td>
		 </tr>
		
	   
	   </div>
	  
	  </div>
	  
	  </div>
  
  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8233389196644!2d80.36069061376594!3d7.484750394600966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae33a1f76f3dfaf%3A0x288f333fefb6c535!2sSLIIT%20(Sri%20Lanka%20Institute%20of%20Information%20Technology)%20Kurunegala%20branch!5e0!3m2!1sen!2slk!4v1652976873600!5m2!1sen!2slk" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
   
</body>
  </html>