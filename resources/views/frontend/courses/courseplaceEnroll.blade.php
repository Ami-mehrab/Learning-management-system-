<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Place Order - Course Enrollment</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: #f8f9fa;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
    }
    .btn-primary {
      border-radius: 50px;
      padding: 0.75rem 2rem;
      font-weight: 600;
      font-size: 1.1rem;
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #0a58ca;
    }
    .course-title {
      font-weight: 700;
      font-size: 1.5rem;
      margin-bottom: 0.25rem;
    }
    .price-tag {
      font-size: 1.25rem;
      font-weight: 700;
      color: #198754; /* Bootstrap green */
    }
    .payment-icons img {
      height: 32px;
      margin-right: 0.5rem;
    }
  </style>
</head>
<body>
  <div class="container p-3" style="max-width: 720px;">
    <div class="card p-4 bg-white">
      <h2 class="mb-4 text-center text-primary">Confirm Your Order</h2>

      <!-- Course Summary -->
      <div class="mb-4">
        <h3 class="course-title"></h3>
        <p>Master the fundamentals of HTML, CSS, JavaScript, and Bootstrap to build responsive websites and applications.</p>
        <div class="d-flex justify-content-between align-items-center">
          <span class="price-tag">Total Amount: {{array_sum(array_column(Session::get('cart'),'subtotal'))}} BDT</span>
          <span class="badge bg-success">Enrolled</span>
        </div>
      </div>

      <!-- User Enrollment Info -->
       <form action="{{Route('place.enroll')}}" method="POST"  novalidate="novalidate">
        @csrf
      <div class="mb-4">
        <h5 class="mb-3">Your Details</h5>
        
          <div class="row g-3">
            <div class="col-md-6">
              <label for="inputName" class="form-label">Name</label>
              <input type="text" name= "name" class="form-control" id="inputName" value="Enter name" required />
            </div>
            <div class="col-md-6">
              <label for="" class="form-label">Phone</label>
              <input type="number" name="phone"class="form-control" id="inputNumber" value="Enter phone" required />
            </div>
            <div class="col-md-6">
              <label for="inputEmail" class="form-label">Email Address</label>
              <input type="email" name= "email" class="form-control" id="inputEmail" value="john.doe@example.com" required />
            </div>
            <div class="col-md-6">
              <label for="" class="form-label"></label>
              <input type="hidden" name= "total" class="form-control" id="" value="{{array_sum(array_column(Session::get('cart'),'subtotal'))}}" required />
            </div>

          </div>
      </div>
     

      <!-- Payment Method -->
      <div class="mb-4">
        <h5 class="mb-3">Payment Method</h5>
        <>
          <div class="mb-2 payment-icons d-flex align-items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/633/633611.png" alt="Visa" title="Visa" />
            <img src="https://cdn-icons-png.flaticon.com/512/633/633612.png" alt="MasterCard" title="MasterCard" />
            <img src="https://cdn-icons-png.flaticon.com/512/633/633603.png" alt="American Express" title="American Express" />
            <img src="https://cdn-icons-png.flaticon.com/512/3492/3492218.png" alt="PayPal" title="PayPal" />
          </div>
          <select class="form-select" aria-label="Select Payment Method">
            <option selected>Select your payment method</option>
            <option value="credit-card">Credit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bank-transfer">Bank Transfer</option>
          </select>
        
      </div>

      <!-- Place Order Button -->
      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg">
          Place Order
        </button>
      </div>
    </form>
    </div>
  </div>

  <!-- Bootstrap JS (optional for any JS components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

