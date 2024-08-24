<!DOCTYPE html>
<html lang="rw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: #66a0eb;
  color: white;
}

.logo img {
  height: 90px;
  border-radius: 50px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav ul li {
  margin: 0 15px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
}

nav ul li a:hover {
  text-decoration: underline;
}
</style>
<body>
    <header>
        <div class="logo">
            <a href="">
                <img src="sof.jpg" alt="Logo" />
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="">Ahabanza</a></li>
                <li><a href="">Injira</a></li>
                <li><a href="">Iyandikishe</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>