<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> The skills media</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .user-info {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .user-info i {
      font-size: 40px;
      margin-right: 20px;
      color: #4CAF50;
    }

    .user-info h3 {
      margin: 0;
    }

    .user-details {
      margin-bottom: 30px;
    }

    .user-details p {
      margin: 0;
      line-height: 1.6;
    }

    .user-details p span {
      font-weight: bold;
    }

    .user-actions {
      display: flex;
      justify-content: space-between;
    }

    .user-actions button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .user-actions button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>User Account Details</h1>

    <div class="user-info">
      <i class="fas fa-user"></i>
      <h3>Ir Niyonsavye Emmanuel</h3>
    </div>

    <div class="user-details">
      <p><span>Email:</span> exemple@gmail.com</p>
      <p><span>Phone:</span> +1 (123) 456-7890</p>
      <p><span>Address:</span> Magarama, Gitega  Burundi</p>
      <p><span>Joined:</span> January 1, 2024</p>
    </div>

    <div class="user-actions">
      <button>Edit Profile</button>
     
    </div>
  </div>
</body>
</html>