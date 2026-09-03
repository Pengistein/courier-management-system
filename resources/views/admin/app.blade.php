<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Panel')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f5f6fa;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #212529;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
        }

        .sidebar-logo {
            height: 70px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            color: white;
            font-size: 20px;
            font-weight: bold;
            border-bottom: 1px solid #343a40;
        }

        .sidebar-menu {
            padding: 15px 10px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 15px;
            margin-bottom: 5px;
            color: #ced4da;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }

        .sidebar-menu a:hover {
            background: #343a40;
            color: white;
        }

        .sidebar-menu a.active {
            background: #0d6efd;
            color: white;
        }

        .sidebar-menu i {
            font-size: 18px;
        }

        .main-wrapper {
            margin-left: 250px;
            min-height: 100vh;
        }

        .admin-header {
            height: 70px;
            background: white;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 25px;
        }

        .header-title {
            font-size: 20px;
            font-weight: 600;
            color: #343a40;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification {
            font-size: 20px;
            color: #495057;
            cursor: pointer;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .admin-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #0d6efd;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .admin-name {
            font-weight: 600;
            color: #343a40;
        }

        .content {
            padding: 30px;
        }

        .page-title {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #212529;
        }

        .dashboard-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .dashboard-card .card-body {
            padding: 25px;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e9f2ff;
            color: #0d6efd;
            font-size: 23px;
        }

        .card-title {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .card-number {
            font-size: 28px;
            font-weight: bold;
            color: #212529;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .sidebar-logo span {
                display: none;
            }

            .sidebar-menu a span {
                display: none;
            }

            .sidebar-menu a {
                justify-content: center;
            }

            .main-wrapper {
                margin-left: 70px;
            }

            .admin-header {
                padding: 0 15px;
            }

            .header-title {
                font-size: 16px;
            }

            .admin-name {
                display: none;
            }

            .content {
                padding: 20px 15px;
            }
        }




        /* ========================================
   ADMIN HEADER
======================================== */

        .admin-header {
            height: 70px;
            background: #ffffff;
            border-bottom: 1px solid #e5e5e5;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 25px;

            position: sticky;
            top: 0;
            z-index: 1000;
        }


        /* Header Left */

        .header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }


        /* Sidebar Toggle */

        .sidebar-toggle {
            width: 42px;
            height: 42px;

            border: none;
            background: #f5f5f5;

            border-radius: 8px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 21px;

            cursor: pointer;

            transition: 0.3s;
        }

        .sidebar-toggle:hover {
            background: #e9e9e9;
        }


        /* Header Title */

        .header-title h5 {
            font-weight: 600;
            color: #222;
        }

        .header-title small {
            color: #888;
            font-size: 12px;
        }


        /* Header Right */

        .header-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }


        /* Search */

        .header-search {
            width: 240px;
            height: 40px;

            background: #f7f7f7;

            border: 1px solid #eeeeee;

            border-radius: 8px;

            display: flex;
            align-items: center;

            padding: 0 12px;
        }

        .header-search i {
            color: #888;
            margin-right: 8px;
        }

        .header-search input {
            width: 100%;

            border: none;
            outline: none;

            background: transparent;

            font-size: 14px;
        }


        /* Header Icon */

        .header-icon-btn {
            width: 42px;
            height: 42px;

            border: none;
            background: transparent;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;

            position: relative;

            cursor: pointer;
        }

        .header-icon-btn:hover {
            background: #f5f5f5;
        }


        /* Notification Dot */

        .notification-dot {
            width: 8px;
            height: 8px;

            background: #dc3545;

            border-radius: 50%;

            position: absolute;

            top: 8px;
            right: 8px;

            border: 2px solid white;
        }


        /* Notification Menu */

        .notification-menu {
            width: 330px;

            padding: 12px;

            border: none;

            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }


        /* Notification Header */

        .notification-header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 5px 8px;
        }

        .notification-header small {
            color: #777;
        }


        /* Notification Item */

        .notification-item {
            display: flex;
            align-items: flex-start;

            gap: 12px;

            padding: 7px 0;
        }

        .notification-item>i {
            font-size: 19px;
        }

        .notification-item strong {
            display: block;

            font-size: 14px;
        }

        .notification-item small {
            display: block;

            color: #777;

            font-size: 12px;

            margin-top: 2px;
        }


        /* Admin Profile */

        .admin-profile {
            border: none;

            background: transparent;

            display: flex;
            align-items: center;

            cursor: pointer;

            padding: 4px 8px;

            border-radius: 8px;
        }

        .admin-profile:hover {
            background: #f7f7f7;
        }


        /* Avatar */

        .admin-avatar {
            width: 40px;
            height: 40px;

            border-radius: 50%;

            background: #343a40;
            color: #ffffff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 14px;
            font-weight: 600;
        }

        .admin-avatar.large {
            width: 48px;
            height: 48px;
        }


        /* Admin Info */

        .admin-info {
            display: flex;
            flex-direction: column;

            text-align: left;

            margin-left: 10px;
        }

        .admin-info strong {
            font-size: 14px;
        }

        .admin-info small {
            color: #888;

            font-size: 11px;
        }


        /* Admin Dropdown */

        .admin-dropdown {
            width: 240px;

            border: none;

            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);

            padding: 8px;
        }


        /* Dropdown User */

        .dropdown-user-info {
            display: flex;
            align-items: center;

            gap: 10px;

            padding: 8px;
        }

        .dropdown-user-info strong {
            display: block;
        }

        .dropdown-user-info small {
            display: block;

            color: #888;

            font-size: 11px;
        }
    </style>
</head>

<body>

    @include('admin.sidebar')

    <div class="main-wrapper">
        @include('admin.header')
        <main class="content">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>