<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipping Logistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('https://cdn.wallpapersafari.com/53/92/5MwIGJ.jpg');
        background-size: cover;
        background-repeat: no-repeat
        }

        #sidebar {
            position: fixed;
            height: 100%;
            width: 250px;
            background-color: #007bff00;
            padding-top: 20px;
        }

        nav h1 {
    color: #000000;
    margin-bottom: 20px;
}

        .nav-link {
            color: rgb(0, 0, 0);
            align-content: center;
        }

        .nav-link.active {
            font-weight: bold;
        }

        .container {
            margin-top: 20px;
            margin-left: 250px; /* Adjust this margin based on your sidebar width */
        }
        .table {
    --bs-table-color-type: initial;
    --bs-table-bg-type: initial;
    --bs-table-color-state: initial;
    --bs-table-bg-state: initial;
    --bs-table-color: #000000;
    --bs-table-bg: #ffffff00;
    --bs-table-border-color: #000000;
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: #000000;
    --bs-table-striped-bg: rgba(var(--bs-emphasis-color-rgb), 0.05);
    --bs-table-active-color: #000000;
    --bs-table-active-bg: rgba(var(--bs-emphasis-color-rgb), 0.1);
    --bs-table-hover-color: var(--bs-emphasis-color);
    --bs-table-hover-bg: rgba(var(--bs-emphasis-color-rgb), 0.075);
    width: 100%;
    margin-bottom: 1rem;
    vertical-align: top;
    border-color: var(--bs-table-border-color);
    color: rgb(0, 0, 0);
}
.btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #dc3545;
    --bs-btn-border-color: #000000;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #000000;
    --bs-btn-hover-border-color: #bbd7ff;
    --bs-btn-focus-shadow-rgb: 49,132,253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #536e95;
    --bs-btn-active-border-color: #476289;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #000000;
    --bs-btn-disabled-border-color: #91b7ed;
}
.navbar {
    --bs-navbar-padding-x: 0;
    --bs-navbar-padding-y: 0.5rem;
    --bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
    --bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
    --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
    --bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
    --bs-navbar-brand-padding-y: 0.3125rem;
    --bs-navbar-brand-margin-end: 1rem;
    --bs-navbar-brand-font-size: 1.25rem;
    --bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
    --bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
    --bs-navbar-nav-link-padding-x: 0.5rem;
    --bs-navbar-toggler-padding-y: 0.25rem;
    --bs-navbar-toggler-padding-x: 0.75rem;
    --bs-navbar-toggler-font-size: 1.25rem;
    --bs-navbar-toggler-icon-bg: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
    --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
    --bs-navbar-toggler-border-radius: var(--bs-border-radius);
    --bs-navbar-toggler-focus-width: 0.25rem;
    --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
}

    </style>
</head>
<body>
    <div id="sidebar">
        <nav class="navbar navbar-light">

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('users') ? 'active' : '' }}" href="{{ url('/users') }}">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('bookings') ? 'active' : '' }}" href="{{ url('/bookings') }}">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('venues') ? 'active' : '' }}" href="{{ url('/venues') }}">Venue</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container mt-10">
        @yield('content')
    </div>
</body>
</html>
