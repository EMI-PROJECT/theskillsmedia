<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Application</title>
  <style>
    /* CSS Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #522ee5;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav ul {
      list-style-type: none;
      display: flex;
    }

    nav ul li {
      margin-right: 20px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
    }

    .hamburger {
      display: none;
      cursor: pointer;
    }

    .bar {
      width: 25px;
      height: 3px;
      background-color: #fff;
      margin: 5px 0;
      transition: all 0.3s ease-in-out;
    }

    .main-content {
      padding: 20px;
    }

    @media (max-width: 768px) {
      nav ul {
        display: none;
      }

      .hamburger {
        display: block;
      }

      .hamburger.active .bar:nth-child(2) {
        opacity: 0;
      }

      .hamburger.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
      }

      .hamburger.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
      }

      nav.mobile-nav ul {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 20px;
      }

      nav.mobile-nav ul li {
        margin: 10px 0;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <h1>TheSkillsMedia</h1>
    </div>
    <nav>
      <ul>
        <li><a href="#"><i class="fas fa-home"></i>Ahabanza</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Ivyigwa Vyanje</a></li>
        <li><a href="#"><i class="fas fa-bell"></i>Ubutumwa</a></li>
        <li><a href="#"><i class="fas fa-user"></i>Umwidondoro</a></li>
      </ul>
    </nav>
    <div class="hamburger">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </header>

  <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector("nav ul");

    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("mobile-nav");
    });
  </script>
</body>
</html>