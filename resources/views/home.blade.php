<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        /* Navbar style */
        .navbar {
            background-color: #f8f9fa;
            padding: 10px 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            position: relative;
        }

        .navbar-brand {
            font-weight: 500;
            font-size: 18px;
        }

        .navbar h1 {
            font-weight: 700;
            font-size: 42px;
            margin-top: 5px;
            margin-left: 150px;
            /* agar posisinya agak ke kanan */
        }

        .menu-btn {
            position: absolute;
            right: 20px;
            top: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 6px 10px;
        }

        /* Sidebar tampilan */
        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            width: 0;
            height: 100%;
            background-color: #f8f9fa;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            overflow-x: hidden;
            z-index: 2;
        }

        .sidebar.open {
            width: 250px;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <span class="navbar-brand">UTS Laravel</span>
        <h1>Halaman Home</h1>
        <button class="menu-btn" onclick="toggleSidebar()">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Sidebar (kosong hanya tampilan) -->
    <div id="sidebar" class="sidebar"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("open");
        }
    </script>
</body>

</html>