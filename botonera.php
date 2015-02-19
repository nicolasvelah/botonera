<?php
/**
 * @package botonera
 * @version 0.0
 */
/*
Plugin Name: botonera
Plugin URI: http://wordpress.org/plugins/botonera/
Description: Promociones by Kanika
Author: Nicolás Vela
Version: 0.0
Author URI: http://kanika.com
*/
class botonera {
	public function __construct(){
    	add_shortcode( 'botonera' , array( $this, 'ini_botonera') ); 
    }
    public function ini_botonera($atts){
    	$botonera = '<div class="row botonera">';
    	
    	if($atts['reserva']){
	    	$boton = 'boton_container';
	    	$botonera .= $boton($atts['reserva'], $atts['reserva_url'], 'reser_icon');
    	}

    	if($atts['galeria']){
	    	$boton2 = 'boton_container';
	    	$botonera .= $boton2($atts['galeria'], $atts['galeria_url'], 'gal_icon');
    	}

    	$botonera .= '</div>';

    	return $botonera;
    }
}

function boton_container($cont, $url, $icon){
    	$ini_bot = '<div class="boton left">';

    	$cont_bot .= '<a href="#" onclick="popup('."'".$url."'".')"><img src="';
    	$cont_bot .= get_template_directory_uri();
    	$cont_bot .= '/images/'.$icon.'.png"/><br><span>';

    	$cont_bot .= $cont;
    	$cont_bot .= '</a>';

    	$fin_bot = '</span></div>';

    	return $ini_bot .$cont_bot.$fin_bot;
    }

$botonera = new botonera();