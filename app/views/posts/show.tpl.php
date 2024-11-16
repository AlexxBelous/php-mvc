<?php require_once VIEWS . '/includes/header.php'; ?>
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['title']; ?></h5>
                            <p class="card-text"><?php echo $post['content']; ?></p>
                        </div>
                        <form action="/posts" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                            <button type="submit" class="btn btn-link">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once VIEWS . '/includes/footer.php'; ?>