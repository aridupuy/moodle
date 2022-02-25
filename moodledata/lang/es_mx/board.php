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
 * Strings for component 'board', language 'es_mx', version '3.11'.
 *
 * @package     board
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Cancel'] = 'Cancelar';
$string['Ok'] = 'OK';
$string['addrating'] = 'Valoraciones publicaciones';
$string['addrating_all'] = 'por TODOS';
$string['addrating_none'] = 'Deshabilitado';
$string['addrating_students'] = 'por Estudiantes';
$string['addrating_teachers'] = 'por Profesores';
$string['aria_addmedia'] = 'Añadir {type} para publicación {post} de columna {column}';
$string['aria_addmedianew'] = 'Añadir {type} para nueva publicación de columna {column}';
$string['aria_canceledit'] = 'Cancela editar publicación para publicación {post} de columna {column}';
$string['aria_cancelnew'] = 'Cancelar nueva publicación para columna {column}';
$string['aria_choosefileedit'] = 'Seleccionar archivo para publicación {post} de columna {column}';
$string['aria_choosefilenew'] = 'Seleccionar archivo para nueva publicación de columna {column}';
$string['aria_deleteattachment'] = 'Eliminar anexo para publicación {post} de columna {column}';
$string['aria_deletecolumn'] = 'Eliminar columna {column}';
$string['aria_deletepost'] = 'Eliminar publicación {post} de columna {column}';
$string['aria_newcolumn'] = 'Añadir nueva columna';
$string['aria_newpost'] = 'Añadir nueva publicación a columna {column}';
$string['aria_postedit'] = 'Guardar eición de publicación para publicación {post} de columna {column}';
$string['aria_postnew'] = 'Guardar  nueva publicación para columna {column}';
$string['aria_ratepost'] = 'Valorar publicación {post} de columna {column}';
$string['background_color'] = 'Color del fondo';
$string['background_color_help'] = 'Debe ser un color hexadecimal válido, como por ejemplo #00cc99';
$string['background_image'] = 'Imagen del fondo';
$string['board:addinstance'] = 'Añadir un nuevo recurso de Tablero (Board)';
$string['board:manageboard'] = 'Gestionar columnas y gestionar todas las publicaciones.';
$string['board:view'] = 'Ver contenido del Tablero y gestionar las publicaciones propias';
$string['boardsettings'] = 'Configuraciones del Tablero';
$string['cancel_button_text'] = 'Cancelar';
$string['choose_file'] = 'Elegir Archivo de Imagen';
$string['column_colours'] = 'Colores de Columna';
$string['column_colours_desc'] = 'Colores usados en la parte superior de cada columna. Estos son colores hexadecimales y deberían ser colocados de a uno por línea como 3 o 6 caracteres. Si cualquiera de estos valores no es igual a un color entonces serán usados los predeterminados.';
$string['default_column_heading'] = 'Encabezado';
$string['delete'] = 'Eliminar';
$string['event_add_column'] = 'Columna añadida';
$string['event_add_column_desc'] = 'El usuario con id \'{$a->userid}\' creó la columna de tablero con id \'{$a->objectid}\' y nombre \'{$a->name}\'.';
$string['event_add_note'] = 'Publicación añadida';
$string['event_add_note_desc'] = 'El usuario con id \'{$a->userid}\' creó publicación del tablero con id \'{$a->objectid}\', encabezado \'{$a->heading}\', contenido \'{$a->content}\', medio \'{$a->media}\' el la columna con id \'{$a->columnid}\', grupo con id \'{$a->groupid}\'.';
$string['event_delete_column'] = 'Columna eliminada';
$string['event_delete_column_desc'] = 'l usuario con id \'{$a->userid}\' eliminó la columna de tablero con id \'{$a->objectid}\'.';
$string['event_delete_note'] = 'Publicación eliminada';
$string['event_delete_note_desc'] = 'El usuario con id \'{$a->userid}\' eliminó publicación deltablero con id \'{$a->objectid}\' de la columna con id \'{$a->columnid}\'.';
$string['event_move_note'] = 'Publicación movida';
$string['event_move_note_desc'] = 'El usuario con id \'{$a->userid}\' movió la publicación del tablero con id \'{$a->objectid}\' a la columna con id \'{$a->columnid}\'.';
$string['event_rate_note'] = 'Publicación valorada';
$string['event_rate_note_desc'] = 'El usuario con id \'{$a->userid}\' valoró la publicación de tablero con id \'{$a->objectid}\' a valoración \'{$a->rating}\'.';
$string['event_update_column'] = 'Columna actualizada';
$string['event_update_column_desc'] = 'El usuario con id \'{$a->userid}\' actualizó la columna del tablero con id \'{$a->objectid}\' a \'{$a->name}\'.';
$string['event_update_note'] = 'Publicación actualizada';
$string['event_update_note_desc'] = 'El usuario con id \'{$a->userid}\' actualizó la columna del tablero con id \'{$a->objectid}\'a encabezado \'{$a->heading}\', contenido \'{$a->content}\', medio \'{$a->media}\' en columna con id \'{$a->columnid}\'.';
$string['export_board'] = 'Exportar CSV';
$string['export_content'] = 'Texto de publiacación';
$string['export_email'] = 'Email';
$string['export_firstname'] = 'Nombre';
$string['export_heading'] = 'Encabezado de publicación';
$string['export_info'] = 'Título de Publicación';
$string['export_lastname'] = 'Apellido(s)';
$string['export_submissions'] = 'Exportar envíos';
$string['export_timecreated'] = 'Fecha de creación';
$string['export_url'] = 'URL de publicación';
$string['form_body'] = 'Contenido';
$string['form_image_file'] = 'Archivo de imagen';
$string['form_mediatype'] = 'Medio';
$string['form_title'] = 'Título de publicación';
$string['groupingid_required'] = 'Debe seleccionarse un agrupamiento de curso para este modo de grupo.';
$string['hideheaders'] = 'Ocultarle a alumnos los encabezados de columna';
$string['history'] = 'Historia del tablero';
$string['history_refresh'] = 'Cronómetro de refresco del Tablero';
$string['history_refresh_desc'] = 'Timeout en segundos entre refrescos automáticos del tablero. Si se configura a 0 o vacío, entonces el tablero solamente se refrescará durante acciones del tablero (añadir/actualizar/etc)';
$string['historyinfo'] = 'La tabla de la Historia del tablero es usada solamente para almacenar registros temporales, los cuales son usados por procesos JavaScript para refrescar vistas del tablero, y después son eliminados inmediatamente.';
$string['invalid_file_extension'] = 'Extensión de archivo no aceptable para subida.';
$string['invalid_file_size_max'] = 'Archivo demasiado grande para ser aceptado.';
$string['invalid_file_size_min'] = 'Archivo demasiado pequeño para ser aceptado.';
$string['invalid_youtube_url'] = 'URL de YouTube inválida';
$string['media_selection'] = 'Selección de medio';
$string['media_selection_buttons'] = 'Botones';
$string['media_selection_desc'] = 'Configurar como será mostrada la selección de medio para publicaciones.';
$string['media_selection_dropdown'] = 'Desplegable';
$string['modal_title_edit'] = 'Editar publicación para columna {column}';
$string['modal_title_new'] = 'Nueva publicación para columna {column}';
$string['modulename'] = 'Tablero';
$string['modulename_help'] = 'Esta es una nueva actividad para Moodle que le permite al profesor crear un nuevo tablero de notitas "Postit".';
$string['modulenameplural'] = 'Tableros';
$string['new_column_icon'] = 'Nuevo ícono de columna';
$string['new_column_icon_desc'] = 'Ícono mostrado en el nuevo botón para columnas.';
$string['new_note_icon'] = 'Ícono de nueva publicación';
$string['new_note_icon_desc'] = 'Ícono mostrado en el nuevo botón para publicaciones.';
$string['note_changed_text'] = 'La publicación que estaba editando ha cambiado.';
$string['note_changed_title'] = 'Confirmar';
$string['note_deleted_text'] = 'LA publicación que estaba editando fue eliminada.';
$string['option_empty'] = 'Ninguno';
$string['option_image'] = 'Imagen';
$string['option_image_info'] = 'Título de imagen';
$string['option_image_url'] = 'URL de imagen';
$string['option_link_info'] = 'Título del enlace';
$string['option_link_url'] = 'URL del enlace';
$string['option_youtube'] = 'Video (YouTube)';
$string['option_youtube_info'] = 'Título del video';
$string['option_youtube_url'] = 'URL de YouTube';
$string['pluginadministration'] = 'Administración del módulo del Tablero';
$string['pluginname'] = 'Tablero';
$string['post_button_text'] = 'Publicación';
$string['post_max_length'] = 'Longitud máxima de publicación';
$string['post_max_length_desc'] = 'La Longitud máxima permitida del contenido. Cualquier exceso será recortado.';
$string['postbydate'] = 'Publicación por fecha';
$string['postbyenabled'] = 'Limitar publicaciones de estudiantes por fecha';
$string['posts'] = 'Publicaciones';
$string['privacy:metadata:board_history'] = 'LA historia temporal del tablero guarda información usada por procesos JavaScript para refrescar vistas del tablero, y después e eliminada inmediatamente.';
$string['privacy:metadata:board_history:action'] = 'La acción realizada';
$string['privacy:metadata:board_history:boardid'] = 'La ID del tablero';
$string['privacy:metadata:board_history:content'] = 'Los datos JSON de la acción realizada';
$string['privacy:metadata:board_history:timecreated'] = 'La hora a la cual la acción fue realizada';
$string['privacy:metadata:board_history:userid'] = 'La ID del usuario que realizó la acción';
$string['privacy:metadata:board_note_ratings'] = 'Información acerca de las valoraciones individuales para cada publicación del tablero.';
$string['privacy:metadata:board_note_ratings:noteid'] = 'La ID de la publicación relacionada';
$string['privacy:metadata:board_note_ratings:timecreated'] = 'La hora de cuando la valoración de la publicación fue creada';
$string['privacy:metadata:board_note_ratings:userid'] = 'La ID del usuario que creó la valoración de la publicación';
$string['privacy:metadata:board_notes'] = 'Información acerca de las publicaciones individuales para cada tablero.';
$string['privacy:metadata:board_notes:columnid'] = 'La localización de la columna de la publicación';
$string['privacy:metadata:board_notes:content'] = 'El contenido de la publicación';
$string['privacy:metadata:board_notes:heading'] = 'El encabezado de la publicación';
$string['privacy:metadata:board_notes:info'] = 'La información del medio de la publicación';
$string['privacy:metadata:board_notes:timecreated'] = 'LA hora de cuando la publicación fue creada';
$string['privacy:metadata:board_notes:url'] = 'La URL del medio de la publicación';
$string['privacy:metadata:board_notes:userid'] = 'La ID del usuario que creó la publicación';
$string['rate_note_text'] = '¿Está seguro de querer valorar esta publicación?';
$string['ratings'] = 'Valoraciones';
$string['remove_column_text'] = '¿Está seguro de querer eliminar esta columna "{$a}" y todas las publicaciones que contiene?';
$string['remove_column_title'] = 'Confirmar';
$string['remove_note_text'] = '¿Está seguro de querer eliminar esta publicación y todos los datos que contiene, ya que esto también afectará a todos los otros usuarios.';
$string['remove_note_title'] = 'Confirmar';
$string['sortby'] = 'Ordenar por';
$string['sortbydate'] = 'Fecha de creación';
$string['sortbynone'] = 'Ninguno';
$string['sortbyrating'] = 'Valoración';
$string['userscanedit'] = 'Permitirle a todos los usuarios editar la localización de sus propias publicaciones.';
$string['warning'] = 'Notificación';
