<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('src/css/bootstrap.min.css'); ?>">
    <script defer src="<?php echo base_url('src/js/alpine.min.js'); ?>"></script>
    <style>
        ul.nav {
            list-style-type: none;
            margin-bottom:0;
        }
    
    </style>
</style>
</head>
<body class="d-flex flex-column h-100 bg-dark bg-opacity-10">
    <nav x-data="{ open: false }">
        <div class="shadow bg-light container-fluid py-1 px-3 px-md-5 d-block d-md-flex align-items-center">
            <div class="flex-grow-1 d-flex align-items-center py-2">
                <div class="me-2">
                    <img src="<?php echo base_url('favicon.ico'); ?>" alt="icon">
                </div>
                <div class="flex-grow-1 px-3">Navbar</div>
                <div class="d-flex d-md-none">
                    <button @click="open=!open" class="btn btn-light">Menu</button>
                </div>
                </div>
            <div class="py-2 d-none d-md-block" x-bind:class="{'d-none': !open}">
                <div class="nav d-grid gap-2 d-md-block">
                    <a href="#" class="btn btn btn-primary">Home</a>
                    <a href="#" class="btn btn-light active">News</a>
                    <a href="#" class="btn btn-light">Categories</a>
                    <a href="#" class="btn btn-light">Contact</a>
                    <a href="#" class="btn btn-light">About</a>  
                    <a href="<?php echo base_url('signin') ?>" class="btn btn-warning ml-0">Login</a>
                </div>
            </div>
        </div>
        <div>

        </div>
    </nav>
    <header>
        <div class="bg-dark bg-opacity-10 my-3 container rounded-1 p-3 shadow-sm">
            <h1>Welcome</h1>
            <p>One vision one purpose.</p>
        </div>
    </header>
    <main class="flex-fill">
        <div class="bg-light bg-opacity-5 my-2 container rounded-1 py-2">
            Halo
        </div>
    </main>
    <footer class="container-fluid bg-light py-2 border-top border-2">
        <p class="fs-6 text-center mb-0">&copy; <?= date('Y') ?> Dureen TM. Made with love</p>
    </footer>
</body>
</html>