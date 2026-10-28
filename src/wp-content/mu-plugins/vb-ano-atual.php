<?php
/**
 * Plugin Name: VB - Ano atual
 * Description: Shortcode [ano_atual] que mostra o ano corrente (ex.: no rodapé). Publicado via GitHub (ecommercevb).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_shortcode( 'ano_atual', function () {
	return esc_html( wp_date( 'Y' ) );
} );
