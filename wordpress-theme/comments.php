<?php if ($comments) : ?>
<div id="comments_heading"><h2><?php    comments_number('Leave a comment — start a conversation', '{1} Comment', '{%} Comments' );?></h2></div>

<?php foreach ($comments as $comment) : ?>
<div class="comment well">
    <div class="comment_meta">
    <span class="comment_author"><?php comment_author_link() ?></a></span> |
    <span class="comment_date"><?php comment_date('j M, Y') ?><?php edit_comment_link('edit',' | ',''); ?> </span>
    </div>

    <div class="comment_content ">
<?php if ($comment->comment_approved == '0') : ?>
<p><em style="color: #D48900;">Your comment is awaiting moderation.</em></p>
<?php endif; ?>
                <?php comment_text() ?>
    </div>
</div>
<?php endforeach; ?>
<?php endif; ?> 

<?php if ('open' == $post->comment_status) : ?>
<div id="respond_box" class="well">
<legend>Post your comment</legend>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form-horizontal">
<fieldset>
<?php if ( $user_ID ) : ?>
			<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> (<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Sign out</a>)
<?php else : ?>

<div class="control-group">
    <label class="control-label" for="author">Name</label>
    <div class="controls">
        <input type="text" name="author" isd="author" size="22" tabindex="2" aria-required='true' />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
        <input type="text" name="email" id="email" size="22" tabindex="3" aria-required='true' />
    </div>
</div>

<div class="control-group">
    <label class="control-label" focusedor="url">Website (optional)</label>
    <div class="controls">
        <input type="text" name="url" id="url" size="22" tabindex="4" />
    </div>
</div>


<?php endif; ?>

<div class="control-group">
    <label class="control-label" for="comment">Message</label>
    <div class="controls">
        <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="5"></textarea>
    </div>
</div>

    <div class="form-actions">
          <button class="btn btn-large btn-primary" name="submit" type="submit" id="submit" value="Post comment" tabindex="5">Post</button>
	      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
          <?php do_action('comment_form', $post->ID); ?>
    </div>

</fieldset>
</form>

</div>
<?php endif; // If registration required and not logged in ?>
