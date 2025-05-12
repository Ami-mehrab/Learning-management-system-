<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Course List</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 1rem;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    h1 {
      margin-bottom: 1rem;
      font-weight: 700;
      color: #343a40;
    }
    .card {
      transition: box-shadow 0.3s ease;
      border-radius: 0.75rem;
      box-shadow: 0 1px 4px rgb(0 0 0 / 0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      height: 100%;
      background: #fff;
    }
    .card:hover {
      box-shadow: 0 5px 15px rgb(0 0 0 / 0.15);
    }
    .course-image {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-bottom: 1px solid #dee2e6;
      border-top-left-radius: 0.75rem;
      border-top-right-radius: 0.75rem;
    }
    .card-body {
      padding: 1rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }
    .course-title {
      font-weight: 600;
      color: #0d6efd;
      font-size: 1.25rem;
      margin-bottom: 0.25rem;
      flex-shrink: 0;
    }
    .course-instructor, .course-duration {
      font-size: 0.875rem;
      color: #6c757d;
      margin-bottom: 0.2rem;
      flex-shrink: 0;
    }
    .course-description {
      margin-top: 0.5rem;
      font-size: 0.95rem;
      color: #495057;
      flex-grow: 1;
    }
    .courses-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.25rem;
      width: 100%;
      max-width: 960px;
    }
  </style>
</head>
<body>

  <h1>Available Courses</h1>

  <div class="courses-container">
    <!-- Course Card -->
    <div class="card">
      <img src="" alt="Course 1" class="course-image" />
      <div class="card-body d-flex flex-column">
        <div class="course-title">Web Development Basics</div>
        <div class="course-instructor"><strong>Instructor:</strong> Jane Doe</div>
        <div class="course-duration"><strong>Duration:</strong> 6 weeks</div>
        <div class="course-description">Learn the fundamentals of HTML, CSS, and JavaScript to build responsive websites.</div>
      </div>
    </div>

   
    <div class="card">
      <img src="" alt="Course 2" class="course-image" />
      <div class="card-body d-flex flex-column">
        <div class="course-title">Data Science Essentials</div>
        <div class="course-instructor"><strong>Instructor:</strong> John Smith</div>
        <div class="course-duration"><strong>Duration:</strong> 8 weeks</div>
        <div class="course-description">An introduction to data analysis, Python, and machine learning basics.</div>
      </div>
    </div>
    <div class="card">
      <img src="" alt="Course 3" class="course-image" />
      <div class="card-body d-flex flex-column">
        <div class="course-title">Data Science Essentials</div>
        <div class="course-instructor"><strong>Instructor:</strong> John Smith</div>
        <div class="course-duration"><strong>Duration:</strong> 8 weeks</div>
        <div class="course-description">An introduction to data analysis, Python, and machine learning basics.</div>
      </div>
    </div>
    <div class="card">
      <img src="" alt="Course 4" class="course-image" />
      <div class="card-body d-flex flex-column">
        <div class="course-title">Data Science Essentials</div>
        <div class="course-instructor"><strong>Instructor:</strong> John Smith</div>
        <div class="course-duration"><strong>Duration:</strong> 8 weeks</div>
        <div class="course-description">An introduction to data analysis, Python, and machine learning basics.</div>
      </div>
    </div>

    <!-- Add more cards as needed -->
  </div>

</body>
</html>
