<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite (['resources/css/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"  />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Dayly-Collect</title>
</head>
<body class="container" >
    <script>
        @isset($message)
            toastr.success("{{ $message }}");
        @endisset
        @isset($error)
            toastr.error("{{ $error }}");
        @endisset
    </script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dayly-Collect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                User
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/user.list">List</a></li>
                <li><a class="dropdown-item" href="/user.add">Add</a></li>
            </ul>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Client
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/client.list">List</a></li>
                <li><a class="dropdown-item" href="/client.add">Add</a></li>
            </ul>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Transaction
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">List</a></li>
                <li><a class="dropdown-item" href="#">Add</a></li>
            </ul>
            </li>
            

        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

    @yield("content")
    <div id="footer" class="text-center">
        <footer>
            <p>&copy;Tayes Inc</p>
        </footer>
    </div>
    
    <script src="../../public/utils.js" ></script>
</body>
</html>