<div class="d-block d-md-grid gap-2 px-2">
    <a href="<?= base_url('dashboard') ?>" 
    class="btn text-start <?= (base_url('dashboard') === base_url(uri_string())) ? 'btn-primary' : 'btn-light' ?>">
    Dashboard</a>

    <a href="<?= base_url('profile') ?>" 
    class="btn text-start <?= (base_url('profile') === base_url(uri_string())) ? 'btn-primary' : 'btn-light' ?>">
    Profile</a>

    <a href="<?= base_url('users') ?>" 
    class="btn text-start <?= (base_url('users') === base_url(uri_string())) ? 'btn-primary' : 'btn-light' ?>">
    Members</a>
</div>   