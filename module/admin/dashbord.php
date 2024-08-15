<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Learning Dashboard</title>
  <!-- Include CSS framework (e.g., Bootstrap, Tailwind CSS) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <!-- Include Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 bg-primary text-white py-4">
        <div class="d-flex flex-column align-items-center">
          <a href="#" class="text-white mb-4 text-decoration-none">
            <i class="fas fa-graduation-cap fa-2x"></i>
            <span class="ms-2"><h3>TheSkillsMedia</h3></span>
          </a>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="#" class="nav-link text-white sidebar-link" data-content="dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span class="ms-2">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white sidebar-link" data-content="courses">
                <i class="fas fa-book"></i>
                <span class="ms-2">Courses</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white sidebar-link" data-content="students">
                <i class="fas fa-user-graduate"></i>
                <span class="ms-2">Students</span>
              </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white sidebar-link" data-content="students">
                    <i class="fas fa-users"></i>
                  <span class="ms-2">Manage Users</span>
                </a>
              </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white sidebar-link" data-content="reports">
                <i class="fas fa-chart-line"></i>
                <span class="ms-2">Reports</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white sidebar-link" data-content="settings">
                <i class="fas fa-cog"></i>
                <span class="ms-2">Settings</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-10">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
          <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">The Skills TheSkillsMedia</a>
                </li>
                <li class="nav-item">
                
                
              </ul>
            </div>
          </div>
        </nav>

        <div id="content-container">
          <!-- Content will be dynamically loaded here -->
        </div>
      </div>
    </div>
  </div>

  <!-- Include JavaScript framework (e.g., jQuery, Vue.js, React) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../../script/admin.js"></script> <!-- Lien vers le fichier admin.js -->
</body>

</html>





