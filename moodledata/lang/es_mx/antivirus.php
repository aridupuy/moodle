<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'antivirus', language 'es_mx', version '3.11'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Plugins antivirus disponibles';
$string['antiviruscommonsettings'] = 'Configuraciones comunes del antivirus';
$string['antiviruses'] = 'Plugins antivirus';
$string['antivirussettings'] = 'Gestionar plugins antivirus';
$string['configantivirusplugins'] = 'Por favor elija los plugins antivirus que desea usar y arréglelos en el orden en que se aplicarán.';
$string['datainfecteddesc'] = 'Se detectaron datos infectados';
$string['datainfectedname'] = 'Datos infectados';
$string['datastream'] = 'Datos';
$string['emailadditionalinfo'] = 'Detalles adicionales regresados del motor de búsqueda';
$string['emailauthor'] = 'Subido por:';
$string['emailcontenthash'] = 'Hash del contenido:';
$string['emailcontenttype'] = 'Tipo de contenido:';
$string['emaildate'] = 'Fecha de subida:';
$string['emailfilename'] = 'Nombre del archivo:';
$string['emailfilesize'] = 'Tamaño del archivo:';
$string['emailgeoinfo'] = 'Geolocalización:';
$string['emailinfectedfiledetected'] = 'Archivo infectado detectado';
$string['emailipaddress'] = 'Dirección IP:';
$string['emailreferer'] = 'Persona que refiere:';
$string['emailreport'] = 'Reporte:';
$string['emailscanner'] = 'Scanner:';
$string['emailscannererrordetected'] = 'Ocurrió un error del scanner';
$string['emailsubject'] = '{$a} :: Notificación Clam AV';
$string['enablequarantine'] = 'Habilitar cuarentena';
$string['enablequarantine_help'] = 'Si se habilita, cualquier archivo que sea detectado como virus será colocado en la carpeta de cuarentena  ([dataroot]/{$a}) para su posterior inspección. La subida a Moodle  fallará.
Si Usted tiene en operación cualquier escaneo de virus a nivel del sistema de archivos, la carpeta de cuarentena debería de estar excluida de las revisiones del antivirus para evitar detectar los archivos en cuarentena.';
$string['fileinfecteddesc'] = 'Un archivo infectado fue detectado.';
$string['fileinfectedname'] = 'Archivo infectado';
$string['notifyemail'] = 'Email de notificación de alerta de antivirus';
$string['notifyemail_help'] = 'La dirección Email para notificaciones de cuando un virus es detectado. Si se deja vacío, entonces todos los administradores del sitio serán notificados por Email cuando un virus sea detectado.';
$string['privacy:metadata'] = 'El sistema de Antivirus no almacena ningún dato personal.';
$string['quarantinedfiles'] = 'Archivos en cuarentena por antivirus';
$string['quarantinedisabled'] = 'Cuarentena deshabilitada. El archivo no es almacenado.';
$string['quarantinetime'] = 'Tiempo máximo de cuarentena';
$string['quarantinetime_desc'] = 'Los archivos en cuarentena más antiguos que el período especificado serán removidos.';
$string['taskcleanup'] = 'Limpiar archivos en cuarentena.';
$string['unknown'] = 'Desconocido';
$string['virusfound'] = '¡{$a->item} ha sido escaneado por un revisor de virus y se encontró que está  infectadp!';
