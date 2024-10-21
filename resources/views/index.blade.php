<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMM Online Store</title>
  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for hover outline */
    .navbar-nav .nav-link:hover {
      border: 1px solid white;
      border-radius: 5px;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">
  <!-- Header -->
  <header class="bg-dark text-white py-3">
    <div class="container">
      <h1 class="mb-0 text-center">
        <a class="text-decoration-none text-white" href="{{ url('/') }}">CMM Online Store</a>
    </h1>
    </div>
  </header>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center m-2" id="navbarNav">
        <ul class="navbar-nav text-center">
          <li class="nav-item">
            <a class="nav-link" href="#">CMM Probes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Certified CMMs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CMM Software</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CMM Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CMM Fixtures</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container my-5">
    <div class="row">
      <div class="col">
        <h2>CMM Marketplace Platform</h2>
        <p>
            Our platform connects customers directly with top-tier suppliers of CMM (Coordinate Measuring Machine) products and services, eliminating intermediaries to secure the best prices. Whether you need new or used CMM machines, CMM Probes, calibration, retrofitting, or maintenance services, our marketplace offers a streamlined solution for sourcing everything related to CMM technology, all in one place.
        </p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-dark text-white py-3 mt-auto">
    <div class="container">
      <p class="mb-0 text-center">&copy; {{ date('Y') }} CMM Online Store. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap 5.3 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
