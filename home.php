<?php  
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <style>



 
.btn{
    background-color: blue;
    padding: 8px;
    margin: 10px;
    border-radius: 10%;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  background: #fff;
  color: #000;
  font-size: 15px;
  line-height: 1.5;
}

a {
  color: #262626;
  text-decoration: none;
}

ul {
  list-style: none;
}

.container {
  width: 90%;
  max-width: 1100px;
  margin: auto;
}

/* Nav */
.main-nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 60px;
  padding: 20px 0;
  font-size: 13px;
}

.main-nav .logo {
  width: 110px;
}

.main-nav ul {
  display: flex;
}

.main-nav ul li {
  padding: 0 10px;
}

.main-nav ul li a {
  padding-bottom: 2px;
}

.main-nav ul li a:hover {
  border-bottom: 2px solid #262626;
}

.main-nav ul.main-menu {
  flex: 1;
  margin-left: 20px;
}

.menu-btn {
  cursor: pointer;
  position: absolute;
  top: 20px;
  right: 30px;
  z-index: 2;
  display: none;
}

.btn {
  cursor: pointer;
  display: inline-block;
  border: 0;
  font-weight: bold;
  padding: 10px 20px;
  background: #262626;
  color: #fff;
  font-size: 15px;
}

.btn:hover {
  opacity: 0.9;
}

.dark {
  color: #fff;
}

.dark .btn {
  background: #f4f4f4;
  color: #333;
}

/* Showcase */
.showcase {
  width: 100%;
  height: 400px;
  background: url("https://i.ibb.co/zGSDGCL/slide1.png") no-repeat center
    center/cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  justify-content: flex-end;
  padding-bottom: 50px;
  margin-bottom: 20px;
}

.showcase h2,
.showcase p {
  margin-bottom: 10px;
}

.showcase .btn {
  margin-top: 20px;
}

/* Home cards */
.home-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
  margin-bottom: 40px;
}

.home-cards img {
  width: 100%;
  margin-bottom: 20px;
}

.home-cards h3 {
  margin-bottom: 5px;
}

.home-cards a {
  display: inline-block;
  padding-top: 10px;
  color: #0067b8;
  text-transform: uppercase;
  font-weight: bold;
}

.home-cards a:hover i {
  margin-left: 10px;
}

/* Xbox */
.xbox {
  width: 100%;
  height: 350px;
  background: url("https://i.ibb.co/tBJGPD9/xbox.png") no-repeat center
    center/cover;
  margin-bottom: 20px;
}

.xbox .content {
  width: 40%;
  padding: 50px 0 0 30px;
}

.xbox p,
.carbon p {
  margin: 10px 0 20px;
}

/* Carbon */
.carbon {
  width: 100%;
  height: 350px;
  background: url("https://i.ibb.co/72cgtsz/carbon.jpg") no-repeat center
    center/cover;
}

.carbon .content {
  width: 55%;
  padding: 100px 0 0 30px;
}

/* Follow */
.follow {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  margin: 30px 0 30px;
}

.follow * {
  margin-right: 10px;
}

/* Links */
.links {
  background: #f2f2f2;
  color: #616161;
  font-size: 12px;
  padding: 35px 0;
}

.links-inner {
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 20px;
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-gap: 10px;
  align-items: flex-start;
  justify-content: center;
}

.links li {
  line-height: 2.8;
}

/* Footer */
.footer {
  background: #f2f2f2;
  color: #616161;
  font-size: 12px;
  padding: 20px 0;
}

.footer-inner {
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 20px 0 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.footer div {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
}

.footer div i {
  margin-right: 10px;
}

.footer ul {
  display: flex;
  flex-wrap: wrap;
}

.footer li {
  margin-right: 30px;
  margin-bottom: 20px;
}

@media (max-width: 700px) {
  .menu-btn {
    display: block;
  }

  .menu-btn:hover {
    opacity: 0.5;
  }

  .main-nav ul.right-menu {
    margin-right: 50px;
  }

  .main-nav ul.main-menu {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    background: #f2f2f2;
    width: 50%;
    height: 100%;
    border-right: #ccc 1px solid;
    opacity: 0.9;
    padding: 30px;
    transform: translateX(-500px);
    transition: transform 0.5s ease-in-out;
  }

  .main-nav ul.main-menu li {
    padding: 10px;
    border-bottom: #ccc solid 1px;
    font-size: 14px;
  }

  .main-nav ul.main-menu li:last-child {
    border-bottom: 0;
  }

  .main-nav ul.main-menu.show {
    transform: translateX(-20px);
  }

  .home-cards {
    grid-template-columns: repeat(2, 1fr);
  }

  .xbox .content p {
    display: none;
  }

  .xbox .content h2 {
    margin-bottom: 20px;
  }

  .carbon .content {
    width: 85%;
  }

  .links .links-inner {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 500px) {
  .home-cards {
    grid-template-columns: 1fr;
  }

  .links .links-inner {
    grid-template-columns: 1fr;
  }

  .links .links-inner ul {
    margin-bottom: 20px;
  }
}

    </style>
</head>
<body>
    <div style="background-image:url(images/nature2.jpg);background-repeat:no-repeat; width:100%; max-height:max-content">
<h1 class="hello" style="text-align: center; color:red">Welcome
    <?php echo $_SESSION['username'];
    ?>
</h1>
<div class="menu-btn">
  <i class="fas fa-bars fa-2x"></i>
</div>

<div class="container">
  <!-- Nav -->
 

  <!-- Xbox -->
  <section class="xbox">
    <div class="content">
      <h2>Xbox Game Pass Ultimate</h2>
      <p>Xbox Game Pass Ultimate Xbox Live Gold and over 100 high-quality
        console and PC games. Play together with friends and discover your
        next favorite game.</p>
      <a href="#" class="btn">
        Join Now <i class="fas fa-chevron-right"></i>
      </a>
    </div>
  </section>

  <!-- Carbon -->
  <section class="carbon dark">
    <div class="content">
      <h2>Commiting To Carbon Negative</h2>
      <p>Microsoft will be carbon negative by 2030 and by 2050 we will remove
        all carbon the company has emitted since it was founded in 1975</p>
      <a href="#" class="btn">
        Learn More <i class="fas fa-chevron-right"></i>
      </a>
    </div>
  </section>

  <!-- Follow -->
  <section class="follow">
    <p>Follow Microsoft</p>
    <a href="https://facebook.com">
      <img src="https://i.ibb.co/LrVMXNR/social-fb.png" alt="Facebook">
    </a>
    <a href="https://twitter.com">
      <img src="https://i.ibb.co/vJvbLwm/social-twitter.png" alt="Twitter">
    </a>
    <a href="https://linkedin.com">
      <img src="https://i.ibb.co/b30HMhR/social-linkedin.png" alt="Linkedin">
    </a>
  </section>
</div>
<!-- Links -->
<section class="links" style="background-color:black">
  <div class="links-inner">
    <ul>
      <li>
        <h3>What's New</h3>
      </li>
      <li><a href="#">Surface Pro X</a></li>
      <li><a href="#">Surface Laptop 3</a></li>
      <li><a href="#">Surface Pro 7</a></li>
      <li><a href="#">Windows 10 apps</a></li>
      <li><a href="#">Office apps</a></li>
    </ul>
    <ul>
      <li>
        <h3>Microsoft Store</h3>
      </li>
      <li><a href="#">Account Profile</a></li>
      <li><a href="#">Download Center</a></li>
      <li><a href="#">Microsoft Store support</a></li>
      <li><a href="#">Returns</a></li>
      <li><a href="#">Older tracking</a></li>
    </ul>
    <ul>
      <li>
        <h3>Education</h3>
      </li>
      <li><a href="#">Microsfot in education</a></li>
      <li><a href="#">Office for students</a></li>
      <li><a href="#">Office 365 for schools</a></li>
      <li><a href="#">Deals for studentss</a></li>
      <li><a href="#">Microsfot Azure</a></li>
    </ul>
    <ul>
      <li>
        <h3>Enterprise</h3>
      </li>
      <li><a href="#">Azure</a></li>
      <li><a href="#">AppSource</a></li>
      <li><a href="#">Automotive</a></li>
      <li><a href="#">Government</a></li>
      <li><a href="#">Healthcare</a></li>
    </ul>
    <ul>
      <li>
        <h3>Developer</h3>
      </li>
      <li><a href="#">Visual Studio</a></li>
      <li><a href="#">Windowszs Dev Center</a></li>
      <li><a href="#">Developer Network</a></li>
      <li><a href="#">TechNet</a></li>
      <li><a href="#">Microsoft Developer</a></li>
    </ul>
    <ul>
      <li>
        <h3>Company</h3>
      </li>
      <li><a href="#">Careers</a></li>
      <li><a href="#">About Microsoft</a></li>
      <li><a href="#">Company news</a></li>
      <li><a href="#">Privacy at Microsoft</a></li>
      <li><a href="#">Inverstors</a></li>
    </ul>
  </div>
</section>

 <div class="footer"style="text-align:center">
    <a href="logout.php"><button class="btn" style="color:blueviolet">Log out</button></a>
 </div>
 </div>
</body>
</html>