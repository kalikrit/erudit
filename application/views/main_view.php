      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Эрудит</h1>
        <p class="lead">Вы любите узнавать что-то новое и интересное?</p>
        <p class="lead">Вы постоянно расширяете свой кругозор?</p>
        <p><a class="btn btn-lg btn-success" href="<?php echo site_url('game');?>" role="button">Начать</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h4>TOP Эрудиты</h4>
			<table class="table table-hover" style="width:200px">
			<?foreach($top_active as $tac):?>
				<tr>
					<td><? echo $tac->name;?></td>
					<td><? echo $tac->ball;?></td>
				</tr>
			<? endforeach ?>
			</table>
        </div>
        <div class="col-lg-4">
          <h4>Последние, добавившие вопросы</h4>
            <?foreach($last_added as $lad):?>
				<p><? echo $lad->name;?></p>
			<? endforeach ?>
       </div>
        <div class="col-lg-4">
		<?if(!empty($interest)):?>
          <h4>А Вы знаете, что?...</h4>
          	<?foreach($interest as $intr):?>
	            <p><? echo $intr->text;?></p>
	        <? endforeach ?>
          <p><a class="btn btn-primary" href="#" role="button">читать &raquo;</a></p>
		<?endif?>
        </div>
      </div>