<a href='/<?=$panel['url']; ?>'>
    <article id='<?=$filter_id; ?>' class='user_panel fe_list'>
        <?=node_thumb_src($panel,"t",300,181); ?>
        <div class='details'>
            <h2><?=$panel['name']; ?> [<?=$panel['score']; ?>]</h2>
        </div>
    </article>
</a>