<div id="contact_form">
    <h4>Обратная связь</h4>
<div id="validate" class="error"></div>    
<?php
    echo form_open('', array('onsubmit'=>"return false", 'id' => "contactform", 'name'=>"contactform"));
    echo form_label('Имя', 'name');
    echo form_input('name', '', 'id="name"');
    echo form_label('Тема сообщения', 'topic'); 
    echo form_dropdown('topic', array('-1'=>'выберите тему сообщения', 'proposal'=>'предложение', 'request'=>'просьба', 'report'=>'замечание', 'question'=>'вопрос', 'hola'=>'просто привет'), 'id="topic"');
    echo form_label('Email', 'email'); 
    echo form_input('email', '', 'id="email"');
    echo form_label('Сообщение', 'message'); 
    $data = array('name'=>'message', 'cols' => 200, 'rows'=> 2);
    echo form_textarea($data, 'сообщение', 'id="message"');
    echo form_submit('submit', 'Отправить', 'id="submit_btn"');
?>
</div>
<script>
$(function(){
    
    $('#validate').hide();
    
    $('#submit_btn').click(function(){
		
		alert('submit button has been clicked');
        
        $('#validate').html('').hide(); 
        
        var errs = '', data = {}, form = $('#contactform'),
        name = $('#name').val(),
        topic = $('#topic: selected').val();
        email = $('#email'),
        message = $('#message').val();
        
        if(name == '' || name.length < 3) errs = "Имя должно быть заполнено";
        if(!errs) {
            //если нет отшибок, отправляем форму
            data =  form.serialize();
            $.ajax({
                url:        '<?php echo site_url('contact');?>',
                type:       'post',
                dataType:   'json',
                data:       data,
                success:    function(result){
                    $('#validate').html(result.message).show(); 
                }
            });
        }
        else {
          $('#validate').html(errs).show();   
        }
    });
});
</script>
