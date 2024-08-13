<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Theskillsmedia</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <style>
    /* CSS styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #714bd7;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header-name {
      font-size: 24px;
      font-weight: bold;
    }

    .header-features {
      display: flex;
      align-items: center;
    }

    .header-feature {
      display: flex;
      align-items: center;
      margin-left: 20px;
      text-decoration: none;
      color: #fff;
      font-size: 16px;
      position: relative;
    }

    .header-feature img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .header-feature-details {
      display: none;
      position: absolute;
      top: 50px;
      right: 0;
      background-color: #333;
      padding: 10px;
      z-index: 1;
      width: 200px;
    }

    .header-feature:hover .header-feature-details {
      display: block;
    }

    .header-feature i {
      font-size: 20px;
      margin-right: 5px;
    }

    .header-feature-details p {
      margin: 5px 0;
    }

    @media (max-width: 767px) {
      header {
        flex-direction: column;
        padding: 20px 10px;
      }

      .header-name {
        font-size: 20px;
        margin-bottom: 10px;
      }

      .header-features {
        flex-wrap: wrap;
        justify-content: center;
      }

      .header-feature {
        margin: 10px;
      }

      .header-feature-details {
        top: 60px;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="header-name">Emmanuel</div>
    <div class="header-features">
      <a href="#" class="header-feature">
        <i class="fas fa-home"></i>
        Ahabanza
      </a>
     
      <a href="#" class="header-feature">
        <i class="fas fa-bell"></i>
        Ubutumwa
      </a>
      <a href="#" class="header-feature">
        <i class="fas fa-book"></i>
        Ivyigwa
      </a>

      <!-- <a href="#" class="header-feature">
        <img src="https://via.placeholder.com/40" alt="Profile Picture">
        <div class="header-feature-details">
          <p>Niyonsavye Emmanuel</p>
          >
          <p>View Profile</p>
        </div>
      </a> -->
    </div>
  </header>

  <!-- Include Font Awesome icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
</body>
<script>

    // Get the hamburger menu button and the header features
const hamburgerBtn = document.querySelector('.header-feature.show');
const headerFeatures = document.querySelectorAll('.header-feature:not(.show)');

// Add a click event listener to the hamburger button
hamburgerBtn.addEventListener('click', () => {
  // Toggle the visibility of the header features
  headerFeatures.forEach(feature => {
    feature.classList.toggle('show');
  });
});
    </script>
</html>