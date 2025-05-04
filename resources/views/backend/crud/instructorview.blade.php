<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instructor's profile</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* General card styles */
    .user-card {
      display: flex;
      flex-direction: column;
      overflow: hidden;
      border-radius: 1rem;
      background-color: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease-in-out;
    }

    /* Card cover styles */
    .card-cover {
      margin-bottom: 2rem;
      height: 200px;
      background-size: cover;
      background-position: center;
      position: relative;
    }

    /* Avatar wrapper - positioned relative to contain the absolutely positioned avatar */
    .avatar-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      top: 95%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
    }

    /* Avatar styling */
    .avatar {
      position: relative;
      background-color: rgba(169, 169, 169, 0.5);
      /* Light mode */
      padding: 0.5rem;
      background-color: rgba(97, 97, 97, 0.5);
      /* Dark mode */
      border-radius: 50%;
      z-index: 10;
    }

    .avatar-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 3px solid white;
      /* Optional, adds a border for visual emphasis */
    }

    /* Card body styling */
    .card-body {
      padding: 1.25rem;
      text-align: center;
      flex-grow: 1;
      z-index: 5;
      position: relative;
    }

    /* Card name styling */
    .card-name {
      margin-top: 1rem;
      margin-bottom: 0.25rem;
      font-size: 1.125rem;
      font-weight: 600;
    }

    /* Card information styling */
    .card-info {
      font-size: 0.875rem;
      font-weight: 500;
      color: #4b5563;
    }

    /* Table styles */
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 1rem 0;
      background-color: white;
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      padding: 1rem;
      text-align: left;
      border-bottom: 1px solid #e5e7eb;
      line-height: 1.5;
      color: #1f2937;
      overflow: visible;
      white-space: normal;
      word-wrap: break-word;
      max-width: 300px;
    }

    th {
      background-color: #f3f4f6;
      font-weight: 600;
      color: #374151;
    }

    tr:hover {
      background-color: #f9fafb;
    }

    /* Dark mode table styles */
    body.dark-mode table {
      background-color: #2d3748;
      color: #e5e7eb;
    }

    body.dark-mode th {
      background-color: #374151;
      color: #e5e7eb;
    }

    body.dark-mode td {
      border-bottom-color: #4b5563;
      color: #f3f4f6;
    }

    body.dark-mode tr:hover {
      background-color: #374151;
    }

    /* Responsive table */
    @media (max-width: 640px) {
      table {
        display: block;
        overflow-x: auto;
      }
    }

    /* Dark mode styles */
    body {
      background-color: #1f2937;
      color: #e5e7eb;
    }

    body.dark-mode .user-card {
      background-color: #2d3748;
    }

    body.dark-mode .card-info {
      color: #cbd5e0;
    }

    body.dark-mode table {
      background-color: #2d3748;
    }

    body.dark-mode th {
      background-color: #374151;
      color: #e5e7eb;
    }

    body.dark-mode td {
      border-bottom-color: #4b5563;
    }

    body.dark-mode tr:hover {
      background-color: #374151;
    }
    .colorful-btn {
  background: linear-gradient(45deg, #ff6ec4, #7873f5);
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 25px;
  text-decoration: none;
  font-weight: bold;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  transition: background 0.3s ease, transform 0.2s ease;
}
.colorful-btn:hover {
  background: linear-gradient(45deg, #ff8ee0, #6a66f2);
  transform: scale(1.05);
}

    
  </style>
</head>

<body>
  <!-- Cards: User -->
  <div class="user-card">
    <!-- Card Cover/Avatar -->
    <div class="card-cover" style="background-image: url('https://cdn.tailkit.com/media/placeholders/photo-JgOeRuGD_Y4-800x400.jpg');">
      <div class="avatar-wrapper">
        <div class="avatar">
          <img src="{{'/uploads/instructor/'.$instructor->Image}}" alt="User Avatar" class="avatar-img">
        </div>
      </div>
    </div>
    <!-- END Card Cover/Avatar -->

    <!-- Card Body -->
    
    <div class="card-body">
      <h3 class="card-name"style ="color:#1f2937">{{$instructor->Name}}</h3>
      <p class="card-info"></p>

      <!-- User Information Table -->
      <table>
        <thead>
          <tr>
            <th style ="color:green">Category</th>
            <th style ="color:green">Details</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td>Instructor ID</td>
            <td>{{$instructor->id}}</td>
          </tr>
          <tr>
            @foreach($course as $courses)
            <th>Course Name</th>
            <td>{{$courses->name}}</td>
          </tr>
        @endforeach
          <tr>
            <th>Date of birth</th>
            <td>{{$instructor->Date_of_Birth}}</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td>{{$instructor->Phone}}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{$instructor->Email}}</td>
          </tr>
          <tr>
            <td>Biography</td>
            <td>{{$instructor->bio}}</td>
          </tr>
        </tbody>
      </table>
      <div class="text-end">

      <a href="{{ Route('instructor') }}" class="btn colorful-btn">Back to list</a>

      </div>
      <!-- END User Information Table -->
    </div>
    <!-- END Card Body -->
  </div>
  <!-- END Cards: User -->
</body>

</html>