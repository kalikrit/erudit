<div class="hero-unit">
	<h4>проект ЭРУДИТ</h4>
	<p>для самых любознательных</p>
</div>
<div class="row-fluid">
	<div class="span9">
        <h4>TOP Эрудиты:</h4>
        <?foreach($top_active as $tac):?>
            <p><? echo $tac->name;?> &nbsp; &nbsp;<? echo $tac->ball;?></p>
        <? endforeach ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
        <h4>Последние добавившие вопросы:</h4>
        <?foreach($last_added as $lad):?>
            <p><? echo $lad->name;?></p>
        <? endforeach ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<?if(!empty($interest)):?>
	        <h4>А Вы знаете что?...:</h4>
	        <?foreach($interest as $intr):?>
	            <p><? echo $intr->text;?></p>
	        <? endforeach ?>
		<?endif?>
	</div>
	
</div>
