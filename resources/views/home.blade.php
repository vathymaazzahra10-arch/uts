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

        /* Navbar */
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
        }

        .menu-btn {
            position: absolute;
            right: 20px;
            top: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 6px 10px;
            cursor: pointer;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            right: -250px;
            /* Awalnya tersembunyi */
            width: 250px;
            height: 100%;
            background-color: #fff;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            transition: right 0.3s ease;
            overflow-x: hidden;
            z-index: 1050;
            padding: 20px;
        }

        .sidebar.open {
            right: 0;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 22px;
            cursor: pointer;
        }

        .sidebar h4 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: black;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .search-box {
            margin-top: 15px;
        }

        /* Overlay saat sidebar terbuka */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1040;
            display: none;
        }

        .overlay.show {
            display: block;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <span class="navbar-brand">UTS Laravel</span>
        <h1>Halaman Home</h1>
        <button class="menu-btn" onclick="toggleSidebar()">☰</button>
    </nav>

    <!-- Overlay -->
    <div id="overlay" class="overlay" onclick="toggleSidebar()"></div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <button class="close-btn" onclick="toggleSidebar()">×</button>
        <h4>UTS Laravel</h4>
        <a href="#">Home</a>
        <a href="#">Produk</a>
        <div class="search-box">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const overlay = document.getElementById("overlay");

            sidebar.classList.toggle("open");
            overlay.classList.toggle("show");
        }
    </script>

</body>

</html>