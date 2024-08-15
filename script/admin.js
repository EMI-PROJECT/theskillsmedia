
$(document).ready(function() {
  $('.sidebar-link').click(function(e) {
    e.preventDefault();
    $('.sidebar-link').removeClass('active');
    $(this).addClass('active');
    var contentId = $(this).data('content');
    loadContent(contentId);
  });

  function loadContent(contentId) {
    var contentMap = {
      dashboard: `
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Course Progress</h5>
              </div>
              <div class="card-body">
                <div class="progress mb-3">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
                <p>You have completed 75% of your courses.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Upcoming Deadlines</h5>
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Project Proposal <span class="badge bg-primary rounded-pill">2 days</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Midterm Exam <span class="badge bg-primary rounded-pill">7 days</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Final Paper <span class="badge bg-primary rounded-pill">14 days</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Grades</h5>
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Introduction to Programming <span class="badge bg-success rounded-pill">A</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Data Structures and Algorithms <span class="badge bg-warning rounded-pill">B</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Machine Learning <span class="badge bg-danger rounded-pill">C</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      `,
      courses: `
        <h2>Courses</h2>
        <p>This is the Courses section.</p>
      `,
      students: `
        <h2>Students</h2>
        <p>This is the Students section.</p>
      `,
      Users: `
        <h2>Users</h2>
        <p>This is the Users  section.</p>
      `,
      reports: `
        <h2>Reports</h2>
        <p>This is the Reports section.</p>
      `,
      settings: `
        <h2>Settings</h2>
        <p>This is the Settings section.</p>
      `
    };

    $('#content-container').html(contentMap[contentId]);
  }

  // Load the initial content (Dashboard)
  loadContent('dashboard');
});
