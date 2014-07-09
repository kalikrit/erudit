<div id="login_form">
    <h4>Авторизация</h4>
	<div id="msg"></div>
<?php
    echo form_open('http://erudit/index.php/login/validate_credentials');
    echo form_label('Логин', 'username');
    echo form_input('username');
    echo form_label('Пароль', 'password');
    echo form_password('password');
    echo form_submit('submit', 'войти');
?>
</div>
<script>
$(function(){
    $('#msg').text(''); 
});

$('input[name=submit]').click(function(){
    
    var username = $('input[name=username]').val();
    var password = $('input[name=password]').val();
    if(username.length < 5 || password.length < 5) {
        $('#msg').text('Заполните все поля формы');
        return false;
    } 
})
</script>