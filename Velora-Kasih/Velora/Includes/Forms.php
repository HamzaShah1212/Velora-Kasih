<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Base Styles for Desktop (default) */
    .form-container {
      display: flex;
      gap: 6px;
      justify-content: center;
      align-items: center;
      min-height: 85vh;
      padding: 20px;
    }

    .left-side {
      background-color: #ADD829;
      width: 620px;
      height: 707px;
      border-radius: 2%;
      position: relative;
      overflow: hidden;
      padding: 20px;
    }

    .text-color {
      color: #102851;
    }

    .hire-tittle {
      padding-top: 30px;
      margin-left: 50px;
      font-size: 28px;
      font-weight: 600;
    }

    .hire-para {
      margin-top: -15px;
      margin-left: 50px;
      font-size: 18px;
      font-weight: 400;
    }

    .contact-info p {
      font-size: 14px;
      margin: 24px 0;
      display: flex;
      align-items: center;
      font-size: 16px;
      font-weight: 400;
    }

    .contact-info i {
      margin-right: 15px !important;
      margin-left: 50px !important;
      color: #0d2341;
      font-size: 16px;
    }

    .circle {
      width: 138px;
      height: 138px;
      background-color: #b5db46d9;
      border-radius: 50%;
      position: absolute;
      top: 110px;
      right: -70px;
      /* Adjusted for better positioning */
      z-index: 2;
    }

    .circle2 {
      width: 269px;
      height: 269px;
      background-color: #bae144d9;
      border-radius: 50%;
      position: absolute;
      top: 150px;
      right: -100px;
      /* Adjusted for better positioning */
      z-index: 1;
    }


    .social-icon {
      display: flex;
      gap: 15px;
      margin-left: 50px;
      margin-top: 310px;
    }

    .social-icon a {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40px;
      height: 40px;
      background: #fcfcfcff;
      color: #0d2341;
      border-radius: 50%;
      font-size: 18px;
      text-decoration: none;
    }

    .booking-form-wrapper {
      --light-gray: #f7f7f7;
      --medium-gray: #e0e0e0;
      --dark-gray: #333;
      --text-color: #555;
      --green: #a4d23f;
      width: 52%;
      font-family: 'Inter', sans-serif;
      background-color: var(--light-gray);
      color: var(--text-color);
      padding: 1rem;
      box-sizing: border-box;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: #fff;
      padding: 4rem 2.5rem;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      max-width: 800px;
      width: 100%;
      display: grid;
      gap: 2rem;
    }

    .form-section {
      display: grid;
      gap: 1.5rem;
    }

    .input-group {
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    .input-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
    }

    .input-group label {
      font-weight: 500;
      margin-bottom: 0.5rem;
      color: var(--dark-gray);
    }

    .input-group input,
    .input-group textarea {
      width: 100%;
      border: none;
      border-bottom: 2px solid var(--medium-gray);
      background: transparent;
      padding: 0.5rem 0;
      outline: none;
      transition: border-bottom-color 0.3s ease;
      font-size: 1rem;
    }

    .input-group textarea {
      resize: none;
      min-height: 80px;
      border: 2px solid var(--medium-gray);
      border-radius: 10px;
      padding: 1rem;
    }

    .section-title {
      font-weight: 600;
      font-size: 1.25rem;
      color: var(--dark-gray);
      margin-top: 2rem !important;
      border-top: 2px solid var(--medium-gray);
    }

    .section-title:first-of-type {
      border-top: none;
    }

    .service-options {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem;
    }

    .option-group {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .option-group input[type="radio"] {
      -webkit-appearance: none;
      appearance: none;
      background-color: #fff;
      margin: 0;
      font: inherit;
      color: var(--medium-gray);
      width: 1.15em;
      height: 1.15em;
      border: 2px solid var(--medium-gray);
      border-radius: 50%;
      transform: translateY(-0.075em);
      display: grid;
      place-content: center;
      transition: border-color 0.3s ease, background-color 0.3s ease;
    }

    .option-group input[type="radio"]::before {
      content: "";
      width: 0.65em;
      height: 0.65em;
      border-radius: 50%;
      transform: scale(0);
      transition: transform 0.3s ease;
      box-shadow: inset 1em 1em var(--green);
    }

    .option-group input[type="radio"]:checked {
      border-color: var(--green);
    }

    .option-group input[type="radio"]:checked::before {
      transform: scale(1);
    }

    .option-group label {
      margin: 0;
    }

    .message {
      padding-top: 1rem;
      font-weight: 600;
      font-size: 1.25rem;
      color: var(--dark-gray);
    }

    .book-button {
      background-color: var(--green);
      color: white;
      padding: 1rem 2rem;
      border: none;
      border-radius: 10px;
      font-size: 1.15rem;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      margin-top: 2rem;
      margin-left: 35rem;
      /* Use auto margin for centering in flex/grid */
      margin-right: 0;
    }

    .book-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(138, 188, 30, 0.4);
    }

    /* Tablet (max-width 900px) */
    @media screen and (max-width: 900px) {
      .form-container {
        flex-direction: column;
        align-items: center;
        padding: 10px;
      }

      .left-side,
      .booking-form-wrapper {
        width: 100%;
        height: auto;
        margin: 0;
      }

      .left-side {
        border-radius: 10px;
        padding: 20px;
      }

      .social-icon {
        margin-top: 20px;
        margin-left: 20px;
      }

      .circle,
      .circle2 {
        display: none;
        /* Hide circles for smaller screens to simplify layout */
      }

      .book-button {
        width: 100%;
        margin-left: 0;
        justify-self: center;
      }
    }

    /* Tablet Portrait and Mobile (max-width 768px) */
    @media screen and (max-width: 768px) {

      .left-side,
      .booking-form-wrapper {
        padding: 15px;
      }

      .hire-tittle,
      .hire-para {
        margin-left: 20px;
      }

      .contact-info i {
        margin-left: 20px !important;
      }
    }

    /* Mobile (max-width 600px) */
    @media screen and (max-width: 600px) {
      .form-container {
        padding: 5px;
      }

      .left-side,
      .booking-form-wrapper {
        padding: 10px;
      }

      .input-row {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }

      .service-options {
        grid-template-columns: 1fr;
      }

      .book-button {
        margin-top: 1rem;
      }

      /* this is css of second button page */
      /* .our-visions-wrapper {
            font-family: 'Inter', sans-serif !important;
            /* margin: 0;
            padding: 0; */
      /* box-sizing: border-box; */
      /* background-color: #f7fafc; */
      /* color: #4a5568; */
    }

    */

    /* this is css of form lower section  */
    /* === Base Styles === */
    .page-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 4rem 3rem;
      background-color: white;
      color: #2d3748;
    }

    .image-section {
      position: relative;
      width: 100%;
      max-width: 24rem;
      margin-bottom: 2rem;
    }

    .image-wrapper {
      position: relative;
      width: 100%;
      height: auto;
    }

    .image-main {
      width: 100%;
      height: auto;
      border-radius: 0.75rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
        0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .image-overlay {
      position: absolute;
      width: 100%;
      height: auto;
      border-radius: 0.75rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
        0 4px 6px -2px rgba(0, 0, 0, 0.05);
      transform: translate(-50%, 50%);
      left: 50%;
      bottom: 0;
    }

    .text-section {
      width: 100%;
      max-width: 42rem;
      text-align: center;
      margin-top: 1rem;
      position: relative;
    }

    .main-heading {
      font-size: 2.5rem;
      font-weight: 700;
      text-align: center;
      margin-top: 1rem;
    }

    .heading-blue {
      color: #1a202c;
    }

    .heading-green {
      color: #ADD829;
    }

    .sub-paragraph {
      color: #718096;
      font-family: "Inter", sans-serif;
      font-weight: 500;
      font-size: 1.25rem;
      line-height: 1.5rem;
      letter-spacing: 0;
      text-align: center;
      width: 100%;
      margin-top: 1rem;
    }

    /* === Existing Larger Screen Media Queries === */
    @media (min-width: 640px) {
      .main-heading {
        font-size: 3.5rem;
      }
    }

    @media (min-width: 768px) {
      .page-container {
        flex-direction: row;
        padding: 4rem 5rem;
        margin-bottom: 13rem;
        margin-left: 6rem;
        align-items: flex-start;
      }

      .image-section {
        margin-bottom: 0;
        margin-right: 4rem;
      }

      .image-main {
        margin-left: 15rem;
      }

      .image-overlay {
        transform: translate(-50%, -33.333333%);
        left: 70.666667%;
        top: 105.666667%;
        bottom: auto;
      }

      .text-section {
        text-align: left;
        margin-top: 0;
        position: absolute;
        width: auto;
      }

      .main-heading {
        font-size: 56px;
        margin-left: 48rem;
        margin-top: -8rem;
        position: absolute;
        display: inline-flex;
      }

      .sub-paragraph {
        font-size: 1.45rem;
        margin-left: 48rem;
        width: 40rem;
        margin-top: -3rem;
        text-align: left;
      }
    }

    /* === Responsive Media Queries === */

    /* Mobile: max-width 600px */
    @media (max-width: 600px) {
      .page-container {
        padding: 2rem 1rem;
      }

      .image-main {
        margin-left: 0;
      }

      .image-overlay {
        transform: translate(-50%, 25%);
        left: 50%;
        top: 60%;
        bottom: 0;
      }

      .text-section {
        position: relative;
        margin-top: 18rem;
        text-align: center;
        width: 100%;
      }

      .main-heading {
        font-size: 1.8rem;
        margin-left: 0;
        margin-top: 1rem;
        position: relative;
      }

      .sub-paragraph {
        font-size: 1rem;
        width: 100%;
        margin-left: 0;
        margin-top: 0.5rem;
      }
    }

    /* Tablet Portrait / Mobile Landscape: 601px – 768px */
    @media (min-width: 601px) and (max-width: 768px) {
      .page-container {
        padding: 3rem 2rem;
      }

      .image-main {
        margin-left: 2rem;
      }

      .image-overlay {
        transform: translate(-50%, 25%);
        left: 50%;
        top: 50%;
        bottom: 0;
      }

      .main-heading {
        font-size: 2.2rem;
        margin-left: 0;
        margin-top: 18rem;
        position: relative;
      }

      .sub-paragraph {
        font-size: 1.1rem;
        width: 90%;
        margin-left: 0;
        margin-top: 0.5rem;
      }
    }

    /* Tablet / Small Laptop: 769px – 900px */
    @media (min-width: 769px) and (max-width: 900px) {
      .page-container {
        flex-direction: row;
        padding: 4rem 3rem;
        margin-left: 4rem;
        margin-bottom: 5rem;
        align-items: flex-start;
      }

      .image-main {
        margin-left: 8rem;
      }

      .image-overlay {
        transform: translate(-50%, -25%);
        left: 60%;
        top: 95%;
      }

      .text-section {
        position: relative;
        margin-left: 2rem;
        width: auto;
        text-align: left;
        margin-top: 25rem;
      }

      .main-heading {
        font-size: 3rem;
        margin-left: 2rem;
        margin-top: -4rem;
      }

      .sub-paragraph {
        font-size: 1.3rem;
        margin-left: 2rem;
        width: 30rem;
      }
    }

    /* Laptop / Desktop: 901px and above */
    @media (min-width: 901px) {
      .page-container {
        flex-direction: row;
        padding: 4rem 5rem;
        margin-bottom: 13rem;
        margin-left: 6rem;
        align-items: flex-start;
      }

      .image-main {
        margin-left: 15rem;
      }

      .image-overlay {
        transform: translate(-50%, -33.333333%);
        left: 70.666667%;
        top: 105.666667%;
      }

      .text-section {
        position: absolute;
        margin-left: 48rem;
        width: auto;
        text-align: left;
      }

      .main-heading {
        font-size: 56px;
        margin-left: 2rem;
        margin-top: -8rem;
      }

      .sub-paragraph {
        font-size: 1.45rem;
        margin-left: 2rem;
        width: 40rem;
        margin-top: -3rem;
      }
    }




    /* this is the form upper section code of css  */
    .services-wrapper {
      max-width: 86%;
      width: 86%;
      padding: 0 1.5rem;
      margin-left: 7rem;
      margin-top: 6rem;
    }
@media (max-width: 768px) {
       .services-wrapper {
      max-width: 60%;
      width: 60%;
      padding: 0 1.5rem;
      margin-left: 2rem;
      margin-top: 4rem;
    }}

    .services-header {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      font-family: "Inter", sans-serif;
      font-weight: 600;
      margin-bottom: 2rem;
      margin-left: 6rem;
    }

    .services-header h2 {
      font-size: 2.25rem;
      font-weight: 800;
      letter-spacing: -0.025em;
      color: #111827;
      margin-bottom: 0.5rem;
    }

    .services-header h2 .text-indigo {
      color: black;
    }

    .services-header h2 .text-green {
      color: #ADD829;
    }

    .services-header p {
      font-size: 1rem;
      color: #6b7280;
      max-width: 500px;
    }

    .services-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
    }

    @media (min-width: 768px) {
      .services-header {
        flex-direction: row;
        text-align: left;
        /* margin-left:-6rem; */
        justify-content: space-between;
      }

      .services-header p {
        text-align: left;
      }

      .services-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .card {
      background-color: #ffffff;
      padding: 6rem;
      gap: 5rem;
      border-radius: 0.75rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease-in-out;
      text-align: start;
    }

    .card:hover {
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      transform: translateY(-4px);
    }

    .card-icon {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 4rem;
      height: 4rem;
      border-radius: 9999px;
      /* margin: 0 auto 1.5rem auto; */
      border: 2px solid;
    }

    .card-icon.purple {
      background-color: #f3e8ff;
      border-color: #e9d5ff;
    }

    .card-icon.purple svg {
      color: #9333ea;
    }

    .card-icon.green {
      background-color: #dcfce7;
      border-color: #bbf7d0;
    }

    .card-icon.green svg {
      color: #16a34a;
    }

    .card-icon.blue {
      background-color: #dbeafe;
      border-color: #bfdbfe;
    }

    .card-icon.blue svg {
      color: #3b82f6;
    }

    .card h3 {
      font-size: 1.25rem;
      font-weight: 700;
      color: #111827;
      margin-bottom: 0.5rem;
    }

    .card p {
      font-size: 1rem;
      color: #6b7280;
    }

    .view-all-button {
      display: block;
      margin: 3rem auto 0 auto;
      background-color: #ADD829;
      color: #ffffff;
      width: fit-content;
      font-family: "Inter", sans-serif;
      font-size: 18px;
      margin-left: 80rem;
      font-weight: 700;
      padding: 1rem 3rem;
      border-radius: 0.75rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
        0 4px 6px -2px rgba(0, 0, 0, 0.05);
      transition: background-color 0.3s ease;
      text-decoration: none;
    }

    .view-all-button:hover {
      background-color: #16a34a;
    }

    /* === Responsive Media Queries === */

    /* Mobile: up to 480px */
    @media (max-width: 480px) {
      .view-all-button {
        font-size: 14px;
        padding: 0.8rem 2rem;
        margin-left: 0;
        text-align: center;
      }
    }

    /* Tablet: 481px – 767px */
    @media (min-width: 481px) and (max-width: 767px) {
      .view-all-button {
        font-size: 16px;
        padding: 0.9rem 2.5rem;
        margin-left: 2rem;
      }
    }

    /* Laptop: 768px – 1439px */
    @media (min-width: 768px) and (max-width: 1439px) {
      .view-all-button {
        font-size: 18px;
        padding: 1rem 3rem;
        margin-left: 5rem;
      }
    }

    /* Desktop: 1440px and above */
    @media (min-width: 1440px) {
      .view-all-button {
        font-size: 18px;
        padding: 1rem 3rem;
        margin-left: 80rem;
      }
    }
  </style>
</head>

<body>

  <!-- this is form upper section code  -->
  <div class="services-wrapper">
    <!-- Header Section -->
    <div class="services-header">
      <div>
        <h2>
          <span class="text-indigo">OUR</span> <span class="text-green">SERVICES</span>
        </h2>
      </div>
      <p>
        Comprehensive care services designed to support daily living, companionship, health, and comfort with compassion
        and trust.
      </p>
    </div>

    <!-- Services Cards -->
    <div class="services-grid">
      <!-- Personal Care Card -->
      <div class="card">
        <div class="card-icon purple">
          <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
          </svg>
        </div>
        <h3>Personal Care:</h3>
        <p>
          Assistance with daily activities like bathing, dressing, grooming, and toileting.
        </p>
      </div>

      <!-- Companion Care Card -->
      <div class="card">
        <div class="card-icon green">
          <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15.5V11h-2v6.5zm5-6.5h-2v6.5h2V11zM12 5c-1.66 0-3 1.34-3 3v4.5c0 1.66 1.34 3 3 3s3-1.34 3-3V8c0-1.66-1.34-3-3-3z" />
          </svg>
        </div>
        <h3>Companion Care</h3>
        <p>
          Emotional and social support through companionship, engaging in hobbies, watching TV, or simply chatting.
        </p>
      </div>

      <!-- Homemaker Services Card -->
      <div class="card">
        <div class="card-icon blue">
          <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
          </svg>
        </div>
        <h3>Homemaker Services</h3>
        <p>
          Household tasks including light cleaning, dusting, vacuuming, laundry, and meal planning and preparation.
        </p>
      </div>
    </div>

    <!-- "View All" Button -->
    <a href="#" class="view-all-button">
      View All
    </a>
  </div>
  <!-- the form upper section code end here  -->


  <div class="form-container">
    <div class="left-side">
      <h2 class="text-color hire-tittle">Hire US</h2>
      <p class="text-color hire-para">Fill the form and submit, Our Representative <br /> will get in touch with you
        soon.</p>
      <div class="contact-info">
        <p><i class="fa fa-phone"></i> +1012 3456 789</p>
        <p><i class="fa fa-envelope"></i> demo@gmail.com</p>
        <p><i class="fa fa-map-marker-alt"></i> 132 Dartmouth Street Boston, <br />Massachusetts 02156 United States</p>
      </div>
      <div class="circle"></div>
      <div class="circle2"></div>
      <div class="social-icon">
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <div class="booking-form-wrapper">
      <div class="container">
        <form>
          <div class="form-section">
            <div class="input-row">
              <div class="input-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="I">
              </div>
              <div class="input-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Doe">
              </div>
            </div>
            <div class="input-row">
              <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
              </div>
              <div class="input-group">
                <label for="phone-number">Phone Number</label>
                <input type="tel" id="phone-number" name="phone-number" placeholder="+1 012 3456 789">
              </div>
            </div>
          </div>

          <div class="form-section">
            <h2 class="section-title">Service</h2>
            <div class="service-options">
              <div class="option-group">
                <input type="radio" id="general-inquiry" name="service" value="general-inquiry" checked>
                <label for="general-inquiry">General Inquiry</label>
              </div>
              <div class="option-group">
                <input type="radio" id="companion-care" name="service" value="companion-care">
                <label for="companion-care">Companion Care</label>
              </div>
              <div class="option-group">
                <input type="radio" id="homemaker-services" name="service" value="homemaker-services">
                <label for="homemaker-services">Homemaker Services</label>
              </div>
              <div class="option-group">
                <input type="radio" id="respite-care" name="service" value="respite-care">
                <label for="respite-care">Respite Care</label>
              </div>
              <div class="option-group">
                <input type="radio" id="transportation" name="service" value="transportation">
                <label for="transportation">Transportation</label>
              </div>
              <div class="option-group">
                <input type="radio" id="errands-shopping" name="service" value="errands-shopping">
                <label for="errands-shopping">Errands & Shopping</label>
              </div>
              <div class="option-group">
                <input type="radio" id="medication-reminders" name="service" value="medication-reminders">
                <label for="medication-reminders">Medication Reminders</label>
              </div>
              <div class="option-group">
                <input type="radio" id="pet-care" name="service" value="pet-care">
                <label for="pet-care">Pet Care</label>
              </div>
              <div class="option-group">
                <input type="radio" id="light-housekeeping" name="service" value="light-housekeeping">
                <label for="light-housekeeping">Light Housekeeping</label>
              </div>
            </div>
          </div>

          <div class="form-section">
            <div class="input-group">
              <label class="message" for="message">Message</label>
              <textarea id="message" name="message" placeholder="Write your message.."></textarea>
            </div>
          </div>

          <button type="submit" class="book-button">Book Now</button>
        </form>
      </div>
    </div>

  </div>



  <!-- this is the second button page code -->
  <div class="our-visions-wrapper page-container">

    <!-- Left Section - Images -->
    <div class="image-section">
      <div class="image-wrapper">
        <img src="/Velora-Kasih\Assests\Images\image-02-1.png.png" alt="Two people shaking hands" class="image-main">
        <img src="/Velora-Kasih\Assests\Images\image-01-1.png.png" alt="A hand holding a patient's arm"
          class="image-overlay">
      </div>
    </div>

    <!-- Right Section - Text -->
    <div class="text-section">
      <h1 class="main-heading">
        <span class="heading-blue">Our&nbsp; </span> <span class="heading-green">Visions</span>
      </h1>
      <p class="sub-paragraph">
        To be a trusted companion for everyone going through difficult times offering presence filled with love,
        empathy, and sincerity, so that no one ever feels alone.
      </p>
    </div>

  </div>
</body>

</html>