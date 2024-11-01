<?php
/*
Plugin Name: Valid oEmbed YouTube
Plugin URI: http://www.wptoolbox.de/plugins/2010/04/valid-oembed-youtube/
Description: Makes the oEmbed code for YouTube Valid XHTML 1.0 Transitional
Version: 1.0 
Revision Date: 21.04.2010
Author: Yaway Media, TobiasBg
Author URI: http://www.yaway.de
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
*/

/**
 * Validate YouTube oEmbed XHTML
 */
class YouTube_valid_oEmbed {

    /**
     * Konstruktor
     */
    function YouTube_valid_oEmbed() {
        add_action( 'init', array( &$this, '_add_filters' ) );
    }

    /**
     * Registriert alle benötigten Filter
     */
    function _add_filters() {
        add_filter( 'oembed_dataparse', array( &$this, '_strip_param' ), 10, 3 );
        add_filter( 'oembed_dataparse', array( &$this, '_add_data_url' ), 10, 3 );
		add_filter( 'oembed_dataparse', array( &$this, '_add_data_newurl' ), 10, 3 );
        add_filter( 'oembed_dataparse', array( &$this, '_strip_embed' ), 10, 3 );
    }

    /**
     * Entfernt param-Endtag </param>
     */
    function _strip_param( $return, $data, $url ) {
        $search = '></param>';
        $replace = ' />';
        return str_replace( $search, $replace, $return );
    }

    /**
     * Fügt den Pfad als data-Wert hinzu
     */
    function _add_data_url( $return, $data, $url ) {
        $search = 'object width';
        $replace = 'object data="' . $url . '&#038;fs=1" type="application/x-shockwave-flash" width';
        return str_replace( $search, $replace, $return );
    }
	
	/**
     * Fügt den neuen Pfad als data-Wert hinzu
     */
    function _add_data_newurl( $return, $data, $url ) {
        $search = 'http://www.youtube.com/watch?v=';
        $replace = 'http://www.youtube.com/v/';
        return str_replace( $search, $replace, $return );
    }

    /**
     * Entfernt kompletten embed-Bereich
     */
    function _strip_embed( $return, $data, $url ) {
        $search = '|<embed.*>.*</embed>|is';
        $replace = '';
        return preg_replace( $search, $replace, $return );
    }

} // class

// Klassen-Instanz erzeugen
$YouTube_valid_oEmbed = new YouTube_valid_oEmbed();

?>