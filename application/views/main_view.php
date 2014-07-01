<div class="hero-unit">
	<h4>Страница Источника</h4>
	<p>персональный сайт Константина Кононенко</p>
</div>
<div class="row-fluid">
	<div class="span9">
        категории новостей:
        <? echo anchor(site_url(), 'все');?> &nbsp; &nbsp;
        <?foreach($news_categories as $new_ctg):?>
            <? echo anchor(site_url('index').'/'.$new_ctg->id, $new_ctg->category_name);?> &nbsp; &nbsp;
        <? endforeach ?>
	</div>
</div>
<div class="row-fluid" id="news">
        <? if(count($news)):?>
            <? foreach($news as $new): ?>
                <div class="new">
                    <p class="date"><? echo $new->date; ?></p>
                    <p><? echo $new->new; ?></p>
                </div>
            <? endforeach ?>
        <? else: ?>
            <p>новостей нет</p>
        <? endif ?>
</div>
