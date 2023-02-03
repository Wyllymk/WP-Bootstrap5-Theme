<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WP Bootstrap 5 Theme</title>
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>

    <nav>
        <?php
            $args = array(
                'theme_location' => 'primary'
            );

            wp_nav_menu($args);
        ?>
    </nav>
    
