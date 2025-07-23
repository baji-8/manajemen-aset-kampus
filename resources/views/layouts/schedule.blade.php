<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Schedule Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar atau Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Schedule Management</a>
    </nav>

    <!-- Konten utama aplikasi -->
    <div class="container mt-5">
        @yield('content')  <!-- Konten halaman dinamis -->
    </div>

    <!-- Footer -->
    <footer class="footer bg-light mt-5 py-3 text-center">
        <p>&copy; 2025 Campus Management</p>
    </footer>

</body>
</html>
