=== Valid oEmbed YouTube ===
Contributors: tom@yaway, TobiasBg
Tags: oembed, youtube, xhtml
Requires at least: 2.9
Tested up to: 3.0.1
Stable tag: 1.0

This plugin makes the oEmbed code for YouTube Valid XHTML 1.0 Transitional.

== Description ==

This plugin makes the oEmbed code output for YouTube videos Valid XHTML 1.0 Transitional.

= Deutschsprachige Beschreibung: =

Mit WordPress hat man die M&ouml;glichkeit, YouTube-Videos und andere externe Medien &uuml;ber <a href="http://codex.wordpress.org/Embeds">oEmbed</a> nur mit Eingabe der entsprechenden URL in einen Artikel oder eine Seite einzubinden. Leider enth&auml;lt der generierte XHTML-Code das embed-Tag, welches nicht zum W3C-Standard geh&ouml;rt und daher beim Validieren des Quellcodes eine Warnung auswirft. Weitere Warnungen werden durch nicht XHTML-konform geschlossene Parameter hervorgerufen.

Abhilfe schafft das folgende kleine Plugin "<a href="http://wordpress.org/extend/plugins/valid-oembed-youtube/">Valid oEmbed YouTube</a>", welches in Zusammenarbeit mit <a href="http://tobias.baethge.com/">Tobias B&auml;thge</a>, dem wir auch "WP-Table Reloaded" zu verdanken haben, entstanden ist. Vielen Dank auch an dieser Stelle f&uuml;r seinen Support.

Das Plugin entfernt den verhassten embed-Code, schlie&szlig;t die Parameter in XHTML-Manier und f&uuml;gt den Pfad zum YouTube-Video als Data-Attribut in das Object-Tag hinzu. Nach der Aktivierung des Plugins werden neu eingebundene Videos sofort in validem XHTML-Code dargestellt. Alte Artikel m&uuml;ssen noch einmal abgespeichert werden, damit die &Auml;nderungen Fr&uuml;chte tragen.

== Installation ==

= Installation =

1. Unzip the archive and put the `validoembedyoutube` folder into your plugins folder (/wp-content/plugins/).
2. Activate the plugin from the Plugins menu.

= Usage =

1. Update existing posts or pages with oEmbed YouTube Videos to make it valid.
2. The video code in new posts will be automatically valid.


== Changelog ==
= 1.0 =
* Initial release