<?php require_once VIEWS . '/includes/header.php'; ?>
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>New Post</h1>
                    <form action="/posts" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="file for title"
                                   value="<?php echo old('title') ?>">
                            <?php if (isset($errors['title'])) : ?>
                                <div class="invalid-feedback d-block"><?php echo $errors['title']; ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Excerpt</label>
                            <textarea name="excerpt" class="form-control" id="excerpt" rows="2"
                                      placeholder="file for excerpt"><?php echo old('excerpt') ?></textarea>
                            <?php if (isset($errors['excerpt'])) : ?>
                                <div class="invalid-feedback d-block"><?php echo $errors['excerpt'] ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Post Content</label>
                            <textarea name="content" class="form-control" id="content" rows="5"
                                      placeholder="file for content"><?php echo old('content') ?></textarea>
                            <?php if (isset($errors['content'])) : ?>
                                <div class="invalid-feedback d-block"><?php echo $errors['content'] ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php require_once VIEWS . '/includes/footer.php'; ?>