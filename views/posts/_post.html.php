<div class="post" id="post-<?=$post['id'];?>">
  <h2><?=h($post['title'])?></h2>
  <p class="date">Modified at: <?=strftime('%c', strtotime($post['modified_at']))?></p>
  <div class="content">
    <?=h($post['body'])?>
  </div>
  <p>
    <a href="<?= url_for('posts', $post['id'], 'edit'); ?>">edit</a> 
  </p>
</div>