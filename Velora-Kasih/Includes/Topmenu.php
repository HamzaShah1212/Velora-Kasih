<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velora Kasih Support</title>
  <link rel="stylesheet" href="./Assests/style.css">
  <style>
    /* Additional styles for hamburger menu and mobile responsiveness */
    /* Reset */
html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  overflow-x: hidden;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Top Banner */
.top {
  background-color: #07253F; /* navy blue shade */
  padding: 10px 0;
}

.top-center {
  color: white;
  text-align: center;
  font-size: 14px;
  margin: 0;
}

/* Navbar Background */
.bg-color {
  background-color: #e8f1ff;
  padding: 10px 20px;
}

/* Navbar Flex */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 80px;  /* fixed navbar height */
  box-sizing: border-box;
  padding: 0 20px;   /* reduced left/right padding */
}

/* Logo size control (Desktop) */
.nav-logo img {
  max-height: 307px;   /* Reduced logo size */
  width: auto;
  display: block;     /* extra white space remove */
  object-fit: contain;
}

/* Menu Styling */
.nav-items ul {
  display: flex;
  gap: 30px;
  margin: 0;
  padding: 0;
  align-items: center;
}

.nav-items li {
  list-style: none;
}

.nav-items li a {
  text-decoration: none;
  font-size: 16px;
  font-weight: 500;
  color: #2b2b2b;
  transition: color 0.3s;
}

.nav-items li a:hover {
  color: #3ac117; /* green hover effect */
}
.nav-items li a:active {
  color: #3ac117; /* green active effect */
   text-decoration: underline;
}
/* Hire Us Button */
.btn {
  background-color: #c6f22a;
  color: #000;
  padding: 10px 20px;
  border: none;
  border-radius: 6px;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s;
}

.btn:hover {
  background-color: #a4d422;
}

/* Hamburger Menu */
.hamburger {
  display: none;
  flex-direction: column;
  gap: 5px;
  cursor: pointer;
  z-index: 1000;
}

.hamburger span {
  width: 25px;
  height: 3px;
  background: #333;
  border-radius: 2px;
  transition: 0.3s;
}


  </style>
</head>
<body>

  <!-- Top Bar -->
  <section class="top"> 
    <h4 class="top-center">
      The health and well-being of our patients and their health care team will always be our priority, 
      so we follow the best practices for cleanliness.
    </h4>
  </section>

  <!-- Navbar -->
  <section class="bg-color">
    <nav>
      <!-- Logo -->
      <div class="nav-logo">
        <img src="./Assests/images/background.png" alt="Velora Logo">
      </div>

      <!-- Hamburger Menu (positioned to the right) -->
      <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <!-- Menu Items -->
      <div class="nav-items" id="nav-items">
        <ul>
          <li><a href="#">Find Care</a></li>
          <li><a href="\Velora-Kasih\Includes\Our Services.php">Our Services</a></li>
          <li><a href="#">About Us</a></li>
          <li><button class="btn">Hire Us</button></li>
        </ul>
      </div>
    </nav>
  </section>

  <!-- Script for Toggle -->
  <script>
    const hamburger = document.getElementById('hamburger');
    const navItems = document.getElementById('nav-items');

    hamburger.addEventListener('click', () => {
      navItems.classList.toggle('active');
      // Animate hamburger to X when active
      hamburger.classList.toggle('active');
    });
  </script>

</body>
</html>