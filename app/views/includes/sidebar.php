<h3>Recent Posts</h3>
<ul class="list-group">
    <?php foreach ($resent_posts as $resent_post) : ?>
        <li class="list-group-item"><a href="posts/<?php echo $resent_post['slug']; ?>"><?php echo htmlspecialchars($resent_post['title']); ?></a></li>
    <?php endforeach; ?>
</ul>