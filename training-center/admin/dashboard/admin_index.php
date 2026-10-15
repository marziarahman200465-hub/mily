<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --sidebar-width: 250px;
            --sidebar-bg: #0f1d32;
            --sidebar-hover: #172a45;
            --content-bg: #f4f6f9;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: var(--content-bg);
            overflow-x: hidden;
        }

        /* Sidebar Styling */
        #sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: var(--sidebar-bg);
            color: #fff;
            transition: all 0.3s ease;
            z-index: 1050;
            overflow-y: auto;
        }

        .sidebar-brand {
            padding: 1.2rem;
            font-size: 1.1rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .menu-category {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #94a3b8;
            padding: 1.2rem 1.2rem 0.4rem 1.2rem;
            font-weight: bold;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 0.65rem 1.2rem;
            color: #cbd5e1;
            text-decoration: none;
            font-size: 0.9rem;
            transition: background 0.2s;
        }

        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background-color: var(--sidebar-hover);
            color: #ffffff;
        }

        .sidebar-menu li a i {
            font-size: 1rem;
            margin-right: 0.75rem;
            width: 20px;
            text-align: center;
        }

        .sidebar-menu li a .bi-chevron-down {
            margin-left: auto;
            font-size: 0.7rem;
        }

        /* Submenu styles */
        .submenu {
            list-style: none;
            padding-left: 2rem;
            background-color: #0b1525;
        }

        .submenu li a {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            color: #94a3b8;
        }

        .submenu li a:hover {
            color: #ffffff;
            background-color: transparent;
        }

        /* Main Content Area */
        #main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: margin-left 0.3s ease;
        }

        /* Top Navbar */
        .top-navbar {
            height: 65px;
            background-color: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            padding: 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* Dashboard Body Card */
        .dashboard-container {
            padding: 1.5rem;
            flex-grow: 1;
        }

        .welcome-card {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            min-height: 80vh;
            padding: 2rem;
            position: relative;
        }

        .welcome-title {
            font-size: 1.8rem;
            font-weight: 500;
            color: #1e293b;
            margin-bottom: 0;
        }

        /* Responsive design for mobile */
        @media (max-width: 991.98px) {
            #sidebar {
                margin-left: calc(-1 * var(--sidebar-width));
            }
            #sidebar.show {
                margin-left: 0;
            }
            #main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-brand">
            <i class="bi bi-grid-1x2-fill me-2 text-info"></i> My Dashboard
        </div>
        
        <div class="menu-category">MAIN MENU</div>
        <ul class="sidebar-menu">
            <li><a href="#" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
            <li>
                <a href="#userSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="bi bi-people"></i> Users <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="collapse submenu" id="userSubmenu">
                    <li><a href="#">Add User</a></li>
                    <li><a href="#">Manage Users</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="bi bi-file-earmark-text"></i> Reports <i class="bi bi-chevron-down"></i></a></li>
            <li><a href="#"><i class="bi bi-gear"></i> Settings <i class="bi bi-chevron-down"></i></a></li>
        </ul>

        <div class="menu-category">OTHER</div>
        <ul class="sidebar-menu">
            <li><a href="#"><i class="bi bi-person"></i> My Profile</a></li>
            <li><a href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div id="main-content">
        <!-- Top Navbar -->
        <header class="top-navbar">
            <button class="btn btn-outline-secondary border-0 d-lg-none me-auto" id="sidebarToggle">
                <i class="bi bi-list fs-4"></i>
            </button>

            <div class="d-flex align-items-center gap-4">
                <!-- Notification Bell -->
                <a href="#" class="text-secondary position-relative fs-5 text-decoration-none">
                    <i class="bi bi-bell"></i>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle" style="font-size: 0.35rem;"></span>
                </a>
                
                <!-- Profile Dropdown -->
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark" data-bs-toggle="dropdown">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=50&h=50&fit=crop" class="rounded-circle border" width="36" height="36" alt="Profile">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 py-1">
                        <li><a class="dropdown-item py-2" href="#">Profile</a></li>
                        <li><a class="dropdown-item py-2" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider my-1"></li>
                        <li><a class="dropdown-item py-2 text-danger" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Dashboard Body Content -->
        <div class="dashboard-container">
            <div class="welcome-card shadow-sm">
                <h1 class="welcome-title">Welcome!</h1>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile Sidebar Toggle
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });
    </script>
</body>
</html>