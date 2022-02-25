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
 * Strings for component 'tool_migratehvp2h5p', language 'es_mx', version '3.11'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Usuarios intentados';
$string['cannot_migrate'] = 'No se puede migrar la actividad';
$string['contenttype'] = 'Tipo de contenido';
$string['copy2cb'] = '¿Deberían añadirse estos contenidos al banco de contenido?';
$string['copy2cb_no'] = 'No; solamente deberían ser creados en la actividad.';
$string['copy2cb_yeswithlink'] = 'Si; y debería ser usado un enlace hacia estos archivos en la actividad.';
$string['copy2cb_yeswithoutlink'] = 'Si; pero una copia será usada en la actividad (los cambios en el banco de contenido no se reflejarán en la actividad)';
$string['error_contenttypeh5p_disabled'] = 'El tipo de bancodecontenido H5P está deshabilitada. Debe ser habilitado para migrar actividades desde mod_hvp y añadirlas al banco de contenido también. Usted puede habilitar este tipodecontenido desde  \'Administración del sitio | Plugins | Banco de contenido | Gestionar tipos de contenido\' ejecute nuevamente la herramienta de migración y seleccione \'No, solamente deberían ser creados en la actividad.\' (o \'copy2cb=0\' si está ejecutando Interfaz para Línea de Comando) para a evitar el crear archivos en el banco de contenido.';
$string['error_modh5pactivity_disabled'] = 'La actividad H5P está deshabilitada. Debe ser habilitada para migrar actividades desde mod_hvp';
$string['event_hvp_migrated'] = 'mod_hvp migrado a mod_h5pactivity';
$string['graded'] = 'Usuarios calificados';
$string['hvpactivities'] = 'Actividades mod_hvp pendientes';
$string['id'] = 'Id';
$string['keeporiginal'] = 'Seleccionar qué hacer con la actividad original una vez que se ha migrado';
$string['keeporiginal_delete'] = 'Eliminar la actividad original';
$string['keeporiginal_hide'] = 'Ocultar la actividad original';
$string['keeporiginal_nothing'] = 'Dejar la actividad original como está';
$string['migrate'] = 'Migrar';
$string['migrate_fail'] = 'Error al migrar actividad hvp con id {$a}';
$string['migrate_gradesoverridden'] = 'Actividad original mod_hvp "{$a->name}", con id {$a->id}, migrada exitosamente. Pero,
    tiene algunas anulaciones de calificación, como retroalimentación, que no han sido migradas porque la actividad original
    está configurada con una calificación máxima inválida (debe ser mayor de 0 para que sea migrada al libro de calificaciones).';
$string['migrate_gradesoverridden_notdelete'] = 'Actividad original mod_hvp "{$a->name}", con id {$a->id}, migrada exitosamente. Pero,
    tiene algunas anulaciones de calificación, como retroalimentación, que no han sido migradas porque la actividad original
    está configurada con una calificación máxima inválida (debe ser mayor de 0 para que sea migrada al libro de calificaciones).
    La actividad original ha sido ocultada en lugar de eliminada.';
$string['migrate_success'] = 'Actividad hvp con id {$a} migrada exitosamente';
$string['nohvpactivities'] = 'No hay actividades mod_hvp para migrar a la  actividad mod_h5.mod_h5pactivity.';
$string['pluginname'] = 'Migrar contenido desde mod_hvp hacia mod_h5pactivity';
$string['privacy:metadata'] = 'Migrar contenido desde mod_hvp hacia mod_h5pactivity no almacena ningún dato personal';
$string['savedstate'] = 'Estado guardado';
$string['selecthvpactivity'] = 'Seleccionar {$a} mod_hvp activity';
$string['settings'] = 'Configuraciones de la migración';
