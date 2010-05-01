<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2009
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Calendar
 * @license    LGPL
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_calendar']['title']       = array('Titel', 'Bitte geben Sie den Kalender-Titel ein.');
$GLOBALS['TL_LANG']['tl_calendar']['jumpTo']      = array('Weiterleitungsseite', 'Bitte wählen Sie die Eventleser-Seite aus, zu der Besucher weitergeleitet werden, wenn Sie einen Event anklicken.');
$GLOBALS['TL_LANG']['tl_calendar']['protected']   = array('Kalender schützen', 'Events nur bestimmten Frontend-Gruppen anzeigen.');
$GLOBALS['TL_LANG']['tl_calendar']['groups']      = array('Erlaubte Mitgliedergruppen', 'Diese Mitgliedergruppen können die Events des Kalenders sehen.');
$GLOBALS['TL_LANG']['tl_calendar']['makeFeed']    = array('Feed erstellen', 'Einen RSS- oder Atom-Feed aus dem Kalender generieren.');
$GLOBALS['TL_LANG']['tl_calendar']['format']      = array('Feed-Format', 'Bitte wählen Sie ein Format.');
$GLOBALS['TL_LANG']['tl_calendar']['language']    = array('Feed-Sprache', 'Bitte geben Sie die Sprache der Seite gemäß des ISO-639 Standards ein (z.B. <em>de</em>, <em>de-ch</em>).');
$GLOBALS['TL_LANG']['tl_calendar']['source']      = array('Export-Einstellungen', 'Hier können Sie festlegen, was exportiert werden soll.');
$GLOBALS['TL_LANG']['tl_calendar']['maxItems']    = array('Maximale Anzahl an Beiträgen', 'Hier können Sie die Anzahl der Events limitieren. Geben Sie 0 ein, um alle zu exportieren.');
$GLOBALS['TL_LANG']['tl_calendar']['feedBase']    = array('Basis-URL', 'Bitte geben Sie die Basis-URL mit Protokoll (z.B. <em>http://</em>) ein.');
$GLOBALS['TL_LANG']['tl_calendar']['alias']       = array('Feed-Alias', 'Hier können Sie einen eindeutigen Dateinamen (ohne Endung) eingeben. Die XML-Datei wird automatisch im Wurzelverzeichnis Ihrer TYPOlight-Installation erstellt, z.B. als <em>name.xml</em>.');
$GLOBALS['TL_LANG']['tl_calendar']['description'] = array('Feed-Beschreibung', 'Bitte geben Sie eine kurze Beschreibung des Kalender-Feeds ein.');
$GLOBALS['TL_LANG']['tl_calendar']['tstamp']      = array('Änderungsdatum', 'Datum und Uhrzeit der letzten Änderung');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_calendar']['title_legend']     = 'Titel und Weiterleitung';
$GLOBALS['TL_LANG']['tl_calendar']['protected_legend'] = 'Zugriffsschutz';
$GLOBALS['TL_LANG']['tl_calendar']['feed_legend']      = 'RSS/Atom-Feed';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_calendar']['source_teaser'] = 'Teasertexte';
$GLOBALS['TL_LANG']['tl_calendar']['source_text']   = 'Komplette Beiträge';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_calendar']['new']    = array('Neuer Kalender', 'Einen neuen Kalender erstellen');
$GLOBALS['TL_LANG']['tl_calendar']['show']   = array('Kalenderdetails', 'Details des Kalenders ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_calendar']['edit']   = array('Kalender bearbeiten', 'Kalender ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_calendar']['copy']   = array('Kalender duplizieren', 'Kalender ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_calendar']['delete'] = array('Kalender löschen', 'Kalender ID %s löschen');

?>