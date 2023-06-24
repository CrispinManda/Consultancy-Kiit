<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <!-- Required Meta Tags -->
        <meta charset="<?php echo bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Wilson">
        <!-- Favicon and Touch Icons -->
        <link rel="icon" type="image/png" sizes="512x512" href=" <?php echo esc_url(get_template_directory_uri() .'/assets/favicon/kiit.jpeg')?>">
        <title><?php echo bloginfo('title');?></title>
        <?php wp_head();?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6
        .0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->

        
    </head>
    <body <?php body_class();?> >
    <?php if(is_front_page()){
        echo '';
    }else{ ?>

    <?php };?>

    
