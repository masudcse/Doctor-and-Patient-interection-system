<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url()?>materialize/css/materialize.css">
    <link rel="stylesheet" href="<?php echo base_url()?>style.css">
    <script src="<?php echo base_url()?>ckeditor\ckeditor.js" type="text/javascript" > </script>
</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>materialize/js/materialize.min.js"></script>
<script>
$( document ).ready(function(){
    
$(".dropdown-trigger").dropdown();
        
})
</script>

<script>
$(document).ready(function(){

    $('select').formSelect();

    
  });
</script>

<script>
    $(document).ready(function(){
    $('.slider').slider(
        {
            indicators:false,
            height: 595,
            duration: 400
        }
    );
    
  });
</script>




    </body>