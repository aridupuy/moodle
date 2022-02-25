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
 * Strings for component 'block_point_view', language 'es_mx', version '3.11'.
 *
 * @package     block_point_view
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpix'] = 'Predeterminado del sitio:';
$string['blacktrack'] = 'Pista negra';
$string['blockdisabled'] = '<h3 class="text-danger">El bloque está deshabilitado</h3>';
$string['bluetrack'] = 'Pista azul';
$string['contentinputlabel'] = 'Contenidos del bloque';
$string['contentinputlabel_help'] = 'Este campo le permite modificar el texto visible en el bloque. Si se deja vacío, el bloque será invisible a los estudiantes.';
$string['customemoji'] = 'Emoji personalizado';
$string['customemoji_help'] = 'Los emoji personalizado para las reacciones pueden ser definidos aquí.<h5 class="text-danger">Importante:</h5>Nombre los archivos <b><code>[emoji_name].png</code></b> para las imágenes de emojis: <code>easy.png</code>, <code>better.png</code> y <code>hard.png</code>. También necesita grupos de emojis <b><code>group_[emojis_initials].png</code></b>, como por ejemplo: <code>group_EB.png</code> para el grupo de eacciones Easy (Fácil) y Better (Mejor). No se olvide del archivo <b><code>group_.png</code></b> para la imagen de sin voto. El tamaño recomendado de la imagen es de 400x200 para grupos.<br/><br/> 11 archivos esperados: <code>easy.png</code>, <code>better.png</code>, <code>hard.png</code>, <code>group_.png</code>, <code>group_E.png</code>, <code>group_B.png</code>, <code>group_H.png</code>, <code>group_EB.png</code>, <code>group_EH.png</code>, <code>group_BH.png</code> y <code>group_EBH.png</code>';
$string['custompix'] = 'Personalizado:';
$string['defaultpix'] = 'Predeterminado:';
$string['defaulttextbetter'] = '¡ Estoy mejorando !';
$string['defaulttextcontent'] = 'Este plugin le da la posibilidad de reaccionar y dotorgar niveles de dificultad a actividades.<br /><br />Es importante saber que Usted está probando la versión beta.<br />Este plugin es desarrollado por  Quentin Fombaron (<a href=\'mailto:quentin.fombaron1@etu.univ-grenoble-alpes.fr?subject="Reaction"%20Moodle%20plugin%20-%20Feedback\'>HAGA CLIC AQUÍ</a> para mandarme un email).<br />Gracias anticipadas por su retraoalimentación y reportes de problemas.<br /><br /><i>Abril 04<SUP></SUP> 2020 (versión 1.1.0)</i><br /><br />Usted puede editar o eliminar este texto en el menú de configuración del bloque<br /><br />';
$string['defaulttexteasy'] = '¡ Fácil !';
$string['defaulttexthard'] = 'Muy dificil...';
$string['delete_custom_pix'] = 'Eliminar emoji personalizado';
$string['deleteemojiconfirmation'] = '¡Está seguro de querer eliminar emoji personalizado para este bloque? Esto eliminará los emojis y archivos actualmente guardados en el área de borrador inferior. Esta acción no puede deshacerse.';
$string['disable_type'] = 'Deshabilitar todo <b>{$a}</b>';
$string['disableall'] = 'Deshabilitar todo en <b>{$a}</b>';
$string['emojidesc'] = 'Descripción del emoji';
$string['emojidesc_help'] = 'Texto personalizado a ser mostrado arriba de la reacción';
$string['emojitouse'] = 'Emoji a usar';
$string['emojitouse_help'] = 'Elegir emojis a ser usados como reacciones en este curso,<br>Usted puede añadir sus propios emojis personalizados al seleccionar "Personalizado".';
$string['enable_disable_section'] = 'Habilitar/deshabilitar todo en esta sección';
$string['enable_disable_section_help'] = 'Habilitar o deshabilitar reacciones para todos los módulos de actividad en esta sección.';
$string['enable_disable_type'] = 'Habilitar o deshabilitar todo lo de este tipo';
$string['enable_disable_type_help'] = 'Habilitar o deshabilitar reacciones para todos los módulos de actividad de este tipo en el curso.';
$string['enable_type'] = 'Habilitar todos <b>{$a}</b>';
$string['enableall'] = 'Habilitar todo en <b>{$a}</b>';
$string['enablecustompix'] = 'Usar emojis de Reacción personalizados';
$string['enabledifficulties'] = 'Habilitar <b>Pistas de dificultad</b>';
$string['enableforfuturemodules'] = 'Habilitar para módulos futuros';
$string['enableforfuturemodules_help'] = 'Automáticamente habilitar reacciones en nuevos módulos creados en este curso.';
$string['enablepoint_views'] = 'Habilitar <b>Reacciones</b>';
$string['errorfilemanager'] = '<b>ERROR</b>: El nombre de <b>{$a}.png</b> ino está conformado.';
$string['errorfilemanagerempty'] = 'Por favor proporcione al menos un archivo.';
$string['greentrack'] = 'Pista verde';
$string['header_activities'] = 'Configuración de pistas de Dificultad y Reacción';
$string['header_images'] = 'Configuración de emojis';
$string['module'] = 'Módulo';
$string['noactivity'] = 'Sin actividad';
$string['nonetrack'] = 'Ninguna pista';
$string['pluginname'] = 'Punto de vista';
$string['point_view:access_overview'] = 'Ver detalles de reacciones';
$string['point_view:addinstance'] = 'Añadir una instancia del bloque de Punto de Vista';
$string['point_view:myaddinstance'] = 'Añadir una instancia del bloque de Punto de Vista en el Tablero';
$string['privacy:metadata:activity_votes_database:cmid'] = 'ID de actividad del curso';
$string['privacy:metadata:activity_votes_database:courseid'] = 'ID del curso';
$string['privacy:metadata:activity_votes_database:userid'] = 'ID del usuario';
$string['privacy:metadata:activity_votes_database:vote'] = 'Votar : 1 (¡ Fácil!), 2 ( ¡Estoy mejorando !), 3 (Muy difícil...)';
$string['privacy:metadata:block_point_view'] = 'El bloque del Punto de Vista almacena las votaciones del usuario en cada actividad.';
$string['reactions'] = 'Reacciones';
$string['reactionsdetails'] = 'Detalles de reacciones';
$string['reactionsresetsuccessfully'] = 'Las reacciones han sido reiniciadas exitosamente.';
$string['reactionsunavailable'] = 'Usted no puede añadir ni quitar su reacción en este módulo,';
$string['redtrack'] = 'Pista roja';
$string['resetcoursereactions'] = 'Reiniciar <b>{$a}</b> reacciones al curso';
$string['resetreactions'] = 'Reiniciar reacciones';
$string['resetreactions_help'] = 'Reiniciar (eliminar) todas las reacciones de usuarios en el curso';
$string['resetreactionsconfirmation'] = '¡Está seguro de querer reiniciar (eliminar) todas las reacciones de usuarios del curso <b>{$a}</b>? Esta acción no puede deshacerse.';
$string['showotherreactions'] = 'Mostrar reacciones de otros usuarios';
$string['showotherreactions_help'] = 'Le permite a los estudiantes el ver el número de reacciones de cada tipo de otros usuarios en un módulo.';
$string['totalreactions'] = 'Total de reacciones: {$a}';
