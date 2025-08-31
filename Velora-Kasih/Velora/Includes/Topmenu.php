<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velora Kasih Support</title>
  <link rel="stylesheet" href="./Assests/style.css">
  <style>
    /* Additional styles for hamburger menu and mobile responsiveness */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      position: absolute;
      right: 20px;
      top: 30px;
      z-index: 1000;
    }

    .hamburger span {
      width: 25px;
      height: 3px;
      background: #333;
      border-radius: 2px;
      transition: 0.3s;
    }

    /* Mobile styles */
    @media screen and (max-width: 768px) {
  nav {
    position: relative;
    display: flex;
    justify-content: space-between; /* Logo left, hamburger right */
    align-items: center;            /* Vertical center */
    padding: 10px 15px;
  }

  .nav-logo img {
    max-height: 60px;   /* Logo ko reasonable size do */
    width: auto;
    margin-bottom: 0;   /* Remove extra gap */
  }

  .hamburger {
    display: flex;
    position: static;   /* Absolute hatado */
  }

  .nav-items {
    display: none;
    width: 100%;
    text-align: center;
    margin-top: 15px;
    position: absolute;
    top: 80px;
    left: 0;
    background-color: #e8f1ff;
    z-index: 999;
    padding: 20px 0;
  }

  .nav-items.active {
    display: block;
  }
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
        <span>asfsa</span>
        <span>asdaz</span>
        <span>asda</span>
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