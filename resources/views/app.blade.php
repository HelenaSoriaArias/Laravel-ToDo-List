<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>To do list</title>
</head>

<body>

    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand">To Do List</a>
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="text-white" href="{{route('categories')">Categories</a>
                </li>
            </ul>   
           
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    @yield('content')

</body>
<script type="text/javascript">
   let alert_list = document.querySelectorAll('.alert')
            alert_list.forEach(function(alert) {
                new bootstrap.Alert(alert);
                let alert_timeout = alert.getAttribute('data-timeout');
                setTimeout(() => {
                    bootstrap.Alert.getInstance(alert).close();
                }, +alert_timeout);
            });
</script>
</html>