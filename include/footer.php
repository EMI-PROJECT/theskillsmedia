<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer with Icons</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <style>
    /* CSS styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    footer {
      background-color: #522ee5;
      color: #fff;
      padding: 20px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: space-around;
      align-items: center;
    }

    .footer-icon {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
      color: #fff;
      font-size: 14px;
    }

    .footer-icon i {
      font-size: 24px;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <footer>
    <a href="#" class="footer-icon">
      <i class="fas fa-home"></i>
      Ahabanza
    </a>
    <a href="#" class="footer-icon">
      <i class="fas fa-book"></i>
      Ivyigwa Vyanje
    </a>
   
    <a href="#" class="footer-icon">
      <i class="fas fa-bell"></i>
      Ubutumwa
    </a>
    <a href="#" class="footer-icon">
        <i class="fas fa-cog"></i>
        Gutunganya
      </a>
  
  

    <a href="#" class="footer-icon">
        <i class="fas fa-sign-out-alt"></i>
        Gusohoka
      </a>
  </footer>

  <!-- Include Font Awesome icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
</body>
</html>