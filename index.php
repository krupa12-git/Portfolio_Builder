<!DOCTYPE html>
<html>

<head>
  <title>PortFolio Builder</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="login-box">
    <h2>Portfolio Form</h2>
    <form method="post" action="upload.php" enctype="multipart/form-data">
      <div class="user-box">
        <input type="text" name="name" required="">
        <label>Name</label>
      </div>

       <div class="user-box">
        <input type="text" name="skill1" required="">
        <label>Heilight Skills 1</label>
      </div>

     <div class="user-box">
        <input type="text" name="skil" required="">
        <label>Heilight Skills 2</label>
      </div>
      <div class="user-box">
        <input type="text" name="ski" required="">
        <label>Heilight Skills 3</label>
      </div>





      <div class="user-box">
        <input type="tel" name="contact" pattern="+91 [0-9]{3}-[0-9]{2}-[0-9]{3}" required="">
        <label>Contact</label>
      </div>

       <div class="user-box">
        <input type="email" name="emai" required="">
        <label>E-mail</label>
      </div>
      
      <div class="user-box">
        <!-- <input type="text" name="addr" required=""> -->
        <textarea name="addr" class="add" cols="30" rows="1"></textarea>
        <label>Address</label>
      </div>
      
      <div class="user-box">
        <input type="text" name="abc" required="">
        
        <label>About Me</label>
      </div>

      <div class="user-box">
        <input type="file" name="image" id="image" required="">
        <label for="">image</label>
      </div>

      
      <a href="">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" class="submit transparent-button" name="submit">
      </a>

    </form>
  </div>
</body>

</html>