<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyApp')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            width: 280px;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            position: fixed;
            top: 56px; /* Adjust based on header height */
            bottom: 0;
            overflow-y: auto;
            transition: all 0.3s;
        }

        .content {
            margin-left: 280px;
            padding: 20px;
            flex: 1;
        }

        .footer {
            background-color: #343a40;
        }

        .btn-toggle-nav a:hover {
            background-color: #e2e6ea;
            text-decoration: none;
        }

        /* Dark mode styles */
        body.dark-mode {
            background-color: #212529;
            color: #fff;
        }

        body.dark-mode .navbar,
        body.dark-mode .footer {
            background-color: #343a40;
        }

        body.dark-mode .sidebar {
            background-color: #343a40;
            border-color: #495057;
        }

        body.dark-mode .btn-toggle-nav a:hover {
            background-color: #495057;
        }

        .dark-mode-toggle {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <span class="ms-3 dark-mode-toggle text-white">
                    <i class="fas fa-moon"></i> Dark Mode
                </span>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar">
        @include('layouts.sidebar')
    </aside>

    <!-- Main Content -->
    <main class="content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 text-white">
        <div class="container text-center">
            <span>&copy; 2024 My App. All rights reserved.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        new DataTable('.datatable');
        new DataTable('.datatable');
    </script>
    <script>
        // Dark mode toggle
        document.querySelector('.dark-mode-toggle').addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>

</html>
