<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velora Kasih Support</title>
  <link rel="stylesheet" href="./Assests/style.css">
  <style>
    /* Additional styles for hamburger menu and mobile responsiveness */
    
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
          <li><a href="#">Our Services</a></li>
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