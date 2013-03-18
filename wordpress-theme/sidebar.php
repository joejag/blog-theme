<div id="sidebar" class="span3">
    <div class="sidebar-nav">
        <h3>Who's Joe?</h3>
        <img class="mugshot" src="<?php echo get_template_directory_uri(); ?>/img/joe_head.jpg" />
        <p>I’m one of many Joe Wright’s and I currently dwell in Glasgow, Scotland. I run my own business providing software services throughout Scotland. I mainly use Clojure, Ruby, Java, and any automation tools I can get my hands on.
        <p>I can usually be found hacking on side projects, writing songs on guitar or enjoying a fine Islay single malt.</p>

        <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"> <a href="http://twitter.com/joe_jag">@joe_jag</a>
        <img src="<?php echo get_template_directory_uri(); ?>/img/github.png"> <a href="https://github.com/joejag">joejag</a>
        <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png"> <a href="http://www.linkedin.com/in/joewright">joewright</a>


<h3>Articles</h3>
<ul>
<?php wp_list_pages('include=180&title_li='); ?>
</ul>

<h3>Games</h3>
<ul>
<li><a href="http://code.joejag.com/games/chicken/">Happy Mrs Chicken</a></li>
<li><a href="http://code.joejag.com/games/brick/">Brick</a></li>
</ul>

<h3>Popular Posts</h3>
<?php wpp_get_mostpopular("range=weekly&limit=5&order_by=views&stats_comments=0&pages=0"); ?>

    </div><!--/.well -->
</div><!--/span-->
