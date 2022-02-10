<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register-Student</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="studentreg1.css">
<link rel="stylesheet" href="style.css">
</head>
<body>


<ul>
  <li><a href="facultyreg.php">Faculty</a></li>
  <li><a href="studentreg.php">Students</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="index.php">Home</a></li>
</ul>

<div class="main-reg">
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="upload.php" method="POST" enctype="multipart/form-data"> 
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">PRN</span>
            <input type="text" name="prn" placeholder="Enter your Roll No." required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Branch</span>
            <input type="text" name="branch" placeholder="Enter your department" required>
          </div>
          <div class="input-box">
            <span class="details">Year</span>
            <input type="text" name="year" placeholder="Enter your College Year" required>
          </div>
          <div class="input-box1">
            <span class="details">Profile-Photo</span>
            <input id="image" type="file" name="photo" placeholder="Photo" required="" capture>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>