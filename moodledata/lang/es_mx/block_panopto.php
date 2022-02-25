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
 * Strings for component 'block_panopto', language 'es_mx', version '3.11'.
 *
 * @package     block_panopto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_to_panopto'] = 'Añadir este curso a Panopto';
$string['application_key'] = 'Clave de aplicación';
$string['attempted_moodle_course_id'] = 'ID de curso Moodle intentado';
$string['attempted_panopto_server'] = 'Servidor Panopto intentado';
$string['back_to_config'] = 'Regresar a configuración';
$string['back_to_course'] = 'Regresar al curso';
$string['begin_reinitializing_imports'] = 'Comenzar a reinicializar importaciones';
$string['block_edit_error'] = 'No se puede configurar instancia de bloque. Configuración global incompleta. Por favor póngase en contacto con su administrador del sistema.';
$string['block_edit_header'] = 'Seleccionar el curso Panopto a mostrar en este bloque.';
$string['block_edit_header_help'] = 'Elegir un curso Panopto existente o aprovisionar unnuevo curso Panopto para este bloque';
$string['block_global_add_courses'] = 'Añadir cursos Moodle a Panopto';
$string['block_global_application_key'] = 'Clave de Aplicación';
$string['block_global_application_key_desc'] = 'Ingrese la clave de Aplicación de la página de su proveedor de Identidad Panopto.';
$string['block_global_hostname'] = 'Nombre del Host del Servidor Panopto';
$string['block_global_hostname_desc'] = 'Ingresar el Nombre Completamente Cualificado de su servidor Panopto.';
$string['block_global_instance_desc'] = 'Ingrese el nombre de la instancia de la página de su proveedor de Identidad Panopto.';
$string['block_global_instance_name'] = 'Nombre de Instancia Moodle';
$string['block_panopto_async_tasks'] = 'Habilitar Trabajos de Sincronizacióon asincrónica (no recomendado)';
$string['block_panopto_async_tasks_desc'] = 'Habilite esta opción para permitir que los trabajos de ingreso al sitio,  inscripción, des-inscripción (dar de baja), adhesión a categoría y eliminar usuario sucedan asincrónicamente. Si esta opción está deshabilitada, estas operaciones suceden sincrónicamente en el manejador de eventos. Esta opción no está recomendada porque es difícil detectar la falla de manera oportuna.';
$string['block_panopto_auto_provision'] = 'Automáticamente aprovisionar cursos recién creados';
$string['block_panopto_auto_provision_desc'] = 'Habilitar esta opción para aprovisionar automáticamente una carpeta de curso Panopto cuando un curso es creado.';
$string['block_panopto_auto_sync_imports'] = 'Otorgar permisos automáticamente al importar un curso';
$string['block_panopto_auto_sync_imports_desc'] = 'Habilitar esta opción para permitirle a Panopto el otorgar automáticamente permisos de observador cuando se importe un curso.';
$string['block_panopto_creator_mapping'] = 'Mapeo de rol de creador';
$string['block_panopto_creator_mapping_desc'] = 'Seleccionar cuales roles de curso son configurados como creadores en nuevos cursos Panopto.';
$string['block_panopto_non_editing_teacher_provision'] = 'Permitirle a profesor sin derechos de edición el aprovisionar';
$string['block_panopto_non_editing_teacher_provision_desc'] = 'Habilitar esta opción para permitirles a profesores sin derechos de edición que aprovisionen carpetas de cursos Panopto.';
$string['block_panopto_print_verbose_logs'] = 'Imprimir bitácoras verbosas';
$string['block_panopto_publisher_mapping'] = 'Mapeo de rol de Publicador';
$string['block_panopto_publisher_mapping_desc'] = 'Seleccionar cuales roles de curso son configurados como publicadores en nuevos cursos Panopto.';
$string['block_panopto_publisher_system_role_mapping'] = 'Roles de sistema con permisos de aprovisionamiento';
$string['block_panopto_publisher_system_role_mapping_desc'] = 'Seleccionar cuales roles del sistema pueden aprovisionar nuevos cursos Panopto.';
$string['block_panopto_server_number_desc'] = 'Haga clic en \'Guardar cambios\' para actualizar el número de servidores.';
$string['block_panopto_server_number_name'] = 'Número de Servidores Panopto';
$string['completed_recordings'] = 'Grabaciones Completadas';
$string['course'] = 'Curso';
$string['course_name'] = 'Nombre del Curso';
$string['course_settings'] = 'Configuraciones del Curso';
$string['creator'] = 'Creador';
$string['creator_help'] = 'Un Creador puede crear y editar contenido en Panopto';
$string['creators'] = 'Creadores';
$string['download_recorder'] = 'Descargar Grabadora';
$string['error_retrieving'] = 'Error al obtener carpeta de curso Panopto. Por favor revise PHP error_log para más detalles.';
$string['existing_course'] = 'Seleccionar una carpeta Panopto existente:';
$string['fetching_content'] = 'Buscando Contenido Panopto...';
$string['import_success'] = 'Curso importado exitosamente.';
$string['links'] = 'Enlaces';
$string['live_sessions'] = 'Sesiones en Vivo';
$string['no_access'] = 'Usted no tiene acceso para ver esta carpeta Panopto.';
$string['no_completed_recordings'] = 'Sin Grabaciones Completadas';
$string['no_course_selected'] = 'Sin curso Panopto seleccionado';
$string['no_creators'] = 'Sin creadores.';
$string['no_live_sessions'] = 'Sin Sesiones en Vivo';
$string['no_publishers'] = 'Sin publicadores.';
$string['no_server'] = 'No hay servidores configurados para aprovisionar. Por favor póngase en contacto con  el administrador del sistema.';
$string['no_viewers'] = 'Sin observadores.';
$string['or'] = 'O';
$string['panopto:addinstance'] = 'Añadir un nuevo bloque Panopto';
$string['panopto:myaddinstance'] = 'Añadir un nuevo bloque Panopto a mi página';
$string['panopto:provision_aspublisher'] = 'Provisionar como un publicador';
$string['panopto:provision_asteacher'] = 'Provisionar como un profesor';
$string['panopto:provision_course'] = 'Provisionar un curso';
$string['panopto:provision_multiple'] = 'Provisionar múltiples cursos a la vez';
$string['pluginname'] = 'Panopto';
$string['podcast_audio'] = 'Podcast de Audio';
$string['podcast_feeds'] = 'Canales de Podcast';
$string['podcast_video'] = 'Podcast de video';
$string['provision'] = 'Provisión';
$string['provision_course_link_text'] = 'Provisionar Curso';
$string['provision_courses'] = 'Provisionar Cursos';
$string['provision_error'] = 'Error al provisionar curso, por favor revise las bitácoras para más detalles.';
$string['provision_successful'] = 'Curso exitosamente provisionado  con Id: {$a}';
$string['provisioncourseselect'] = 'Seleccionar Cursos a Provisionar.';
$string['provisioncourseselect_help'] = 'Las selecciones múltiples son posibles al hacer Ctrl-clic (Windows) Cmd-clic (Mac).';
$string['publisher'] = 'Publicador';
$string['publisher_help'] = 'Un Publicador puede aprobar contenido enviado por Creadores';
$string['publishers'] = 'Publicador';
$string['result'] = 'Resultado';
$string['role_map_header'] = 'Cambiar Mapeos de Rol Panopto';
$string['role_map_header_help'] = 'Elegir como los roles de Moodle mapean a roles de Panopto. Los roles no mapeados de Moodle serán asignados al rol de Observador en Panopto.';
$string['select_server'] = 'Seleccionar un servidor Panopto';
$string['select_server_help'] = 'Elegir el servidor Panopto en donde serán provisionadas las carpetas de curso.';
$string['server_info_not_valid'] = 'El nombre del servidor o la clave de la aplicación no son válidos; debajo están los valores intentados.';
$string['server_name'] = 'Nombre del servidor';
$string['show_all'] = 'Mostrar Todo';
$string['show_less'] = 'Mostrar Menos';
$string['synced_user_info'] = 'Información de usuario sincronizada';
$string['take_notes'] = 'Tomar Anotaciones';
$string['unconfigured'] = 'Configuración Global incompleta. Por favor póngase en contacto con su administrador del sistema.';
$string['unknown_provisioning_error'] = 'Ha ocurrido un error desconocido.';
$string['unprovisioncourseselect_help'] = 'Las selecciones múltiples son posibles al hacer Ctrl-clic (Windows) Cmd-clic (Mac).';
$string['unprovisioned'] = 'Este curso aun no ha sido provisionado-';
$string['viewers'] = 'Observadores';
$string['watch_live'] = 'Ver en Vivo';
