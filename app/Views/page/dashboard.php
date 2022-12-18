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
                    <h2>Dashboard</h2>
                    <p>Hi, <?= $name ?></p>
                    <p>This is dashboard page. Feel free to take a look.</p>
                </main>
            </div>
        </div>
    </div>
</div>
    