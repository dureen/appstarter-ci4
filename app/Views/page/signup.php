<div class="flex-grow-1"></div>
<main>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="bg-light bg-opacity-5 mt-2 mb-3 container rounded-1 p-3">
            <div class="mb-5">
                <h2 class="text-center">Register</h2>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
            </div>
            <form action="<?= base_url(); ?>/signup" method="post">
                <?= csrf_field() ?>
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control" >
                </div>
                <div class="form-group mb-4">
                    <label for="confirmpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
                </div>
                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="text-center">
            <a href="<?= base_url('signin')?>">Sign In</a>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
</main>
<div class="flex-grow-1"></div>
    