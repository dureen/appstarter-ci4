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
                    <?php ?>
                    <a href="<?php echo base_url('signin') ?>" class="btn btn-warning ml-0">Login</a>
                    <?php ?>
                    <?php ?>
                </div>
            </div>
        </div>
    <div>
</nav>