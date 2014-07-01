<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo site_url();?>">Эрудит</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    <? if($this->session->userdata('is_logged_in')) echo "вы авторизованы как: ".$this->session->userdata('user_name')." &nbsp;".anchor('http://yastya_new/index.php/login/logout', 'выйти');?>
                </p>
                <ul class="nav">
                    <li <?php if($this->uri->segment(2) == 'contact') echo "class='active'";?>><a href="<?php echo site_url('contact');?>">обратная связь</a></li>
                    <li <?php if($this->uri->segment(2) == 'members_area') echo "class='active'";?>><a href="<?php echo site_url('members_area');?>">закрытая область</a></li>
                </ul>
            </div> 
        </div>
    </div>
</div>