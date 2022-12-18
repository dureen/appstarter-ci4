<div x-data="{sidebar: false}" class="flex-grow-1">
    <?= view('template/navigation-core') ?>
    <header>
        <div class="bg-dark bg-opacity-10 my-3 container rounded-1 p-3 shadow-sm">
            <h1>Welcome to our small Hut</h1>
            <p>"One vision one purpose". - Master Kane </p>
        </div>
    </header>
    <div>
        <div class="d-flex bg-light bg-opacity-5 my-2 container rounded-1 py-2">
            <div class="row w-100">
                <div id="sidebar" class="d-none d-md-block col-md-3" x-bind:class="{'d-none': !sidebar}">
                    <?= view('template/sidebar') ?>
                </div>
                <main class="col-md-9">
                    <h2>Profile</h2>
                    <div class="p-2 bg-opacity-10 rounded-md border mb-3">
                        <form action="<?= base_url('store/'.$user['id']); ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="fs-6 text-muted fw-semibold mb-2">Update your account's profile information and email address.</div>
                            <?php if(session()->getFlashdata('error1')):?>
                            <div class="alert alert-danger">
                                <?=session()->getFlashdata('error1')->listErrors() ?>
                            </div>
                            <?php endif;?>
                            <div class="form-group mb-3">
                                <label for="name" class="form-label fs-6 text-muted">Username</label>
                                <input type="text" name="name" placeholder="Username" class="form-control" value="<?= esc($user['name']) ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label fs-6 text-muted">Email address</label>
                                <input type="email" name="email" placeholder="Email" class="form-control" value="<?= esc($user['email']) ?>">
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="p-2 bg-opacity-10 rounded-md border mb-3">
                        <form action="<?= base_url('update/'.$user['id']); ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="fs-6 text-muted fw-semibold mb-2">Update your account's password.</div>
                            <?php if(session()->getFlashdata('error2')):?>
                            <div class="alert alert-danger">
                                <?=session()->getFlashdata('error2')->listErrors() ?>
                            </div>
                            <?php endif;?>
                            <?php if(session()->getFlashdata('err2')):?>
                            <div class="alert alert-danger">
                                <?=session()->getFlashdata('err2') ?>
                            </div>
                            <?php endif;?>
                            <div class="form-group mb-3">
                                <label for="current_password" class="form-label fs-6 text-muted">Current Password</label>
                                <input type="password" name="current_password" placeholder="Current Password" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="new_password" class="form-label fs-6 text-muted">New Password</label>
                                <input type="password" name="new_password" placeholder="New Password" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="confirm_password" class="form-label fs-6 text-muted">Confirm Password</label>
                                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" >
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="p-2 bg-opacity-10 rounded-md border mb-3">
                        <form action="<?= base_url('destroy'); ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="fs-6 text-muted fw-semibold mb-2">Delete Account</div>
                            <div class="form-group mb-3">
                                <label for="destroy" class="form-label fs-6 text-muted">Once your account is deleted, all of its data will be permanently deleted</label>
                            </div>
                            <?php if(session()->getFlashdata('err3')):?>
                            <div class="alert alert-danger">
                                <?=session()->getFlashdata('err3') ?>
                            </div>
                            <?php endif;?>
                         
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Delete Account
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation!</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <label for="password" class="form-label fs-6 text-muted">Are you sure? Once your account is deleted, all of its data will be permanently deleted.</label>
                                        <input type="password" name="password" placeholder="Enter Password" class="form-control" >
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Yes, I'm Sure!</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
    