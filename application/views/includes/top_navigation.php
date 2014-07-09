<div class="masthead">
	<h3 class="text-muted">Эрудит</h3>
	<ul class="nav nav-justified">
		<li <?php if($this->uri->segment(2) == 'main') echo "class='active'";?>><a href="<?php echo site_url('main');?>">главная</a></li>
		<li <?php if($this->uri->segment(2) == 'game') echo "class='active'";?>><a href="<?php echo site_url('game');?>">ИГРА</a></li>
		<li <?php if($this->uri->segment(2) == 'members_area') echo "class='active'";?>><a href="<?php echo site_url('members_area');?>">ЭРУДИТЫ</a></li>		
		<li <?php if($this->uri->segment(2) == 'contact') echo "class='active'";?>><a href="<?php echo site_url('contact');?>">обратная связь</a></li>
		<li <?php if($this->uri->segment(2) == 'about') echo "class='active'";?>><a href="<?php echo site_url('about');?>">о проекте</a></li>
	</ul>
	<p class="navbar-text pull-right">
		<? if($this->session->userdata('is_logged_in')) echo "вы авторизованы как: ".$this->session->userdata('user_name')." &nbsp;".anchor('http://erudit/index.php/login/logout', 'выйти');?>
	</p>
</div>