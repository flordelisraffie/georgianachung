<?php 

//register css files
add_action( 'wp_enqueue_scripts', function(){

    wp_enqueue_style( 'elink-default-2022-style', get_stylesheet_directory_uri().'/css/elink-default-2022.css' );
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri().'/style.css' );

} );

//register the javascript
add_action( 'wp_enqueue_scripts', function(){

    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/divi-child-script.js', array( 'jquery' ));
    
});


//phpmailer
add_action( 'phpmailer_init', function($phpmailer){

	if ( ! is_object( $phpmailer ) ) {
            $phpmailer = (object) $phpmailer;
      }

    $phpmailer->Mailer     = 'smtp';
	$phpmailer->Host       = 'mxserver.readersmagnet.com';
	$phpmailer->SMTPAuth   =  true;
	$phpmailer->Port       = '465';
	$phpmailer->Username   = 'author@georgianapchung.com';
	$phpmailer->Password   = 'Chung@1234';
	$phpmailer->SMTPSecure = 'ssl';
	$phpmailer->From       = 'wordpress@georgianapchung.com';
	$phpmailer->FromName   = 'georgianapchung.com';
	$phpmailer->Subject   = 'From georgianapchung.com';

});
