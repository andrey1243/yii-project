<?php

foreach ($data['posts'] as $post) { ?>
    <div class="container">
        <h2><?php echo $post['title']; ?></h2>
        <div><?php echo $post['description']; ?></div>
        <p><?php echo $post['post_text']; ?></p>
    </div>

<?php }; ?>