<?php require_once VIEWS . '/includes/header.php'; ?>
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php foreach ($posts as $post) : ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                <p class="card-text"><?php echo $post['excerpt']; ?></p>
                                <a href="#">Read more...</a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="col-md-4">
                    <?php require_once VIEWS . '/includes/sidebar.php'; ?>
                </div>
            </div>
        </div>
    </main>
<?php require_once VIEWS . '/includes/footer.php'; ?>