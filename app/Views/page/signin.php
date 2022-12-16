<div class="flex-grow-1"></div>
<main>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="bg-light bg-opacity-5 mt-2 mb-3 container rounded-1 p-3">
            <div class="mb-5">
                <h2 class="text-center">Login in</h2>
                <?php if(session()->getFlashdata('error')):?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
                <?php endif;?>
            </div>
            <form action="<?php echo base_url(); ?>/signin" method="post">
                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                </div>
                <div class="form-group mb-4">
                    <input type="password" name="password" placeholder="Password" class="form-control" >
                </div>
                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-success">Sign In</button>
                </div>
            </form>
        </div>
        <div class="text-center">
            <a href="<?php echo base_url('signup')?>">Create a new account</a>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
</main>
<div class="flex-grow-1"></div>
    