<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als „wp-config.php“ mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * Diese Datei beinhaltet diese Einstellungen:
 *
 * * Datenbank-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Datenbank-Einstellungen - Diese Zugangsdaten bekommst du von deinem Webhoster. ** //
/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'annalena-fawer.local' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'root' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem Datenbank-Passwort.
 */
define( 'DB_PASSWORD', '' );

/**
 * Ersetze localhost mit der Datenbank-Serveradresse.
 */
define( 'DB_HOST', 'localhost' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 *
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n9yx_-p|-/`SOVW%Xt+6n]qxI4[z@i0!Ew[$$C.jO],a;YB`) B`PiGkI&{5R%=}' );
define( 'SECURE_AUTH_KEY',  ':!_`2cQ0!Yh0<7I^r~m $S$+[F>ut_Ra=X${^L8xCVT/(pzWbvQTqqvt?QpA2s0=' );
define( 'LOGGED_IN_KEY',    '`UAX?{ZrXTO+yWKPo^lN4>J0df`3TQ6d:ugQj FIy>K02`pSseeujt%U<yMgg7D#' );
define( 'NONCE_KEY',        '4u]_Dy1/)QUdu/j];n$FCMcJp!$Ke8~1Y;!BJOq@{[g|J~K&NR~H-A2[9rS&weJ/' );
define( 'AUTH_SALT',        'Eur[JP&1rY8.!ge!91#Q=MsUQHA;5oPN]]`NL:lT.4xU`)dP]+KE%d5;c:xPxdW3' );
define( 'SECURE_AUTH_SALT', '|FB9mQ-nDi>cm)r_@zK&;GGO%FRl$C3ZKA~./2m*YGze[.lYKtEoBHhJ&:>a3Y,H' );
define( 'LOGGED_IN_SALT',   '|8h|DWfeVd0n?cZh4o<ryqtndYm<vimn~xhhV,3$T^Gs!n_~!#qW2oE79v]~+;!E' );
define( 'NONCE_SALT',       'ee?)TflK~%0!)+ i4re=i`KO!3A4~^4lep)ON:buO~OtL)|m(gZ)cz>laz{%Ux6/' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Füge individuelle Werte zwischen dieser Zeile und der „Schluss mit dem Bearbeiten“ Zeile ein. */



/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once ABSPATH . 'wp-settings.php';
