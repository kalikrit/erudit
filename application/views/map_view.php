<style>
.folder {
    background-image: url(<?php echo base_url(); ?>img/folder.png);
    background-repeat: no-repeat;
}
.file {
    background-image: url(<?php echo base_url(); ?>img/file.png);
    background-repeat: no-repeat; 
    cursor: auto;  
}
ul {
    list-style: none;
    padding-left: 20px;
    cursor: pointer;
}
li{
    padding-left: 20px;
    margin: 2px;
}
</style>
<div class="hero-unit">
    <h4>Карта приложения</h4>
</div>
<div id="files"></div>
<script>
$(function(){
   var files = <?php echo json_encode($files);?>,
   file_tree = build_file_tree(files);
   
   file_tree.appendTo('#files');
});

function build_file_tree(files) {
    var tree = $('<ul>');
    for(x in files) {
        if(typeof files[x] == "object") {
            //directory
            var span = $('<span>').html(x).appendTo($('<li>').appendTo(tree).addClass('folder'));
            var subtree = build_file_tree(files[x]).hide();
            span.after(subtree);
            span.click(function(){
                $(this).parent().find('ul:first').toggle();
            });
        } else {
            //file
           $('<li>').html(files[x]).appendTo(tree).addClass('file');
        }
    }
    return tree;
}
</script>