<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Course List</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 2rem 1rem;
    }

    h1 {
      margin-bottom: 2rem;
      font-weight: 700;
      text-align: center;
      color: #343a40;
    }

    .courses-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .card {
      border-radius: 0.75rem;
      overflow: hidden;
      transition: box-shadow 0.3s ease;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      background: #ffffff;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .course-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-body {
      padding: 1rem;
    }

    .course-title {
      font-size: 1.25rem;
      color: #0d6efd;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .course-instructor, .course-duration {
      font-size: 0.9rem;
      color: #6c757d;
    }

    .course-description {
      margin-top: 0.5rem;
      font-size: 0.95rem;
      color: #495057;
    }
  </style>
</head>
<body>

  <h1>Available Courses</h1>

  <div class="courses-container">
    @foreach($course as $courses)
      <div class="card">
        <img src="{{ '/uploads/course/'.$courses->image }}" alt="Course" class="course-image" />
        <div class="card-body">
          <div class="course-title">{{ $courses->name }}</div>
          <div class="course-instructor"><strong>Instructor:</strong> {{ $courses->instructor->Name }}</div>
          <div class="course-duration"><strong>Duration:</strong> {{ $courses->duration }}</div>
          <div class="course-description">{{ $courses->outline }}</div>
        </div>
      </div>
    @endforeach
  </div>

</body>
</html>
