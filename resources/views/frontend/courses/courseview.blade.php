<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Responsive Bootstrap Course List with Images</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Custom styles */
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
    #searchInput {
      max-width: 400px;
      margin-bottom: 1.5rem;
      border-radius: 0.375rem;
      border: 1px solid #ced4da;
      padding: 0.5rem 1rem;
      font-size: 1rem;
      box-shadow: none;
      transition: border-color 0.3s ease;
    }
    #searchInput:focus {
      border-color: #0d6efd;
      outline: none;
      box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
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
    /* Responsive grid for cards */
    .courses-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.25rem;
      width: 100%;
      max-width: 960px;
    }
    /* Make sure everything fits nicely on small mobile screens */
    @media (max-width: 400px) {
      #searchInput {
        max-width: 100%;
      }
      body {
        padding: 0.75rem;
      }
      .course-image {
        height: 140px;
      }
    }
  </style>
</head>
<body>

  <h1>Available Courses</h1>
  <input type="text" id="searchInput" placeholder="Search courses..." aria-label="Search courses" />

  <div class="courses-container" id="coursesContainer">
    <!-- Course cards inserted by JavaScript -->
  </div>

  <!-- Bootstrap JS Bundle CDN (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const courses = [
      {
        title: "Introduction to Web Development",
        instructor: "Jane Doe",
        duration: "6 weeks",
        description: "Learn the basics of HTML, CSS, and JavaScript to build your first web pages.",
        image: "https://images.pexels.com/photos/270360/pexels-photo-270360.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=160"
      },
      {
        title: "Advanced JavaScript",
        instructor: "John Smith",
        duration: "8 weeks",
        description: "Deep dive into JavaScript concepts including closures, prototypes, and async programming.",
        image: "https://images.pexels.com/photos/1181355/pexels-photo-1181355.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=160"
      },
      {
        title: "Responsive Design with Bootstrap",
        instructor: "Emily Johnson",
        duration: "4 weeks",
        description: "Master responsive web design techniques using Bootstrap framework.",
        image: "https://images.pexels.com/photos/270360/pexels-photo-270360.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=160"
      },
      {
        title: "Python for Data Science",
        instructor: "Michael Williams",
        duration: "10 weeks",
        description: "Learn Python programming and data science libraries like Pandas and Matplotlib.",
        image: "https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=160"
      },
      {
        title: "Machine Learning Basics",
        instructor: "Sophia Brown",
        duration: "12 weeks",
        description: "Get started with machine learning algorithms, data processing, and model evaluation.",
        image: "https://images.pexels.com/photos/3861968/pexels-photo-3861968.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=160"
      },
      {
        title: "Introduction to Cloud Computing",
        instructor: "David Lee",
        duration: "5 weeks",
        description: "Understand cloud computing concepts and popular platforms such as AWS and Azure.",
        image: "https://images.pexels.com/photos/1181336/pexels-photo-1181336.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=160"
      }
    ];

    const coursesContainer = document.getElementById('coursesContainer');
    const searchInput = document.getElementById('searchInput');

    // Function to create a course card element
    function createCourseCard(course) {
      const card = document.createElement('div');
      card.className = 'card';

      card.innerHTML = `
        <img src="${course.image}" alt="${course.title} image" class="course-image" loading="lazy" />
        <div class="card-body d-flex flex-column">
          <div class="course-title">${course.title}</div>
          <div class="course-instructor"><strong>Instructor:</strong> ${course.instructor}</div>
          <div class="course-duration"><strong>Duration:</strong> ${course.duration}</div>
          <div class="course-description">${course.description}</div>
        </div>
      `;

      return card;
    }

    // Render all courses initially
    function renderCourses(filteredCourses) {
      coursesContainer.innerHTML = '';
      if (filteredCourses.length === 0) {
        coursesContainer.innerHTML = '<p class="text-muted">No courses found matching your search.</p>';
        return;
      }
      filteredCourses.forEach(course => {
        coursesContainer.appendChild(createCourseCard(course));
      });
    }

    // Handle search input to filter courses
    function handleSearch() {
      const query = searchInput.value.toLowerCase().trim();
      const filtered = courses.filter(course => 
        course.title.toLowerCase().includes(query) ||
        course.instructor.toLowerCase().includes(query) ||
        course.description.toLowerCase().includes(query)
      );
      renderCourses(filtered);
    }

    // Initialize
    renderCourses(courses);
    searchInput.addEventListener('input', handleSearch);

  </script>
</body>
</html>


