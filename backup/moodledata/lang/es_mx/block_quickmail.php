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
 * Strings for component 'block_quickmail', language 'es_mx', version '3.11'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['additional_emails'] = 'Emails adicionales';
$string['additional_emails_help'] = 'Otras direcciones de Email que a Usted le gustaría que se enviara el mensaje, en una lista separada por comas o punto_y_comas. Por ejemplo:

email1@ejemplo.com, email2@ejemplo.com';
$string['allowstudents'] = 'Permitirles a los estudiantes usar Quickmail';
$string['alternate'] = 'Emails alternos';
$string['alternate_body'] = '<p>
{$a->fullname} añadido {$a->address} como una dirección de envío alterna para {$a->course}.
</p>

<p>
El propósito de este Email era para verificar que esta dirección existe, y que el propietario de esta dirección tiene los permisos apropiados en Moodle.
</p>.

<p>
Si Usted desea completar el proceso de verificación; por favor, continúe re-dirigiendo su navegador de Internet a la URL siguiente: {$a->url}.
</p>

<p>
Si la descripción de este Email no tiene sentido para Usted, entonces puede que Usted haya recibido este Email por error. Simplemente descarte este mensaje.
</p>

Gracias..';
$string['alternate_new'] = 'Añadir Dirección Alterna';
$string['alternate_subject'] = 'Verificación de Dirección de Email Alterna';
$string['backup_block_configuration'] = 'Respaldar ajustes de configuraciones de Nivel de Bloque de Quickmail  (Como por ejemplo [Allow Students to use Quickmail])';
$string['backup_history'] = 'Incluir Historia Quickmail';
$string['body'] = 'Cuerpo';
$string['courseferpa'] = 'Respetar Modo del Curso';
$string['downloads'] = 'Requerir ingresar para anexos';
$string['downloads_desc'] = 'Esta configuración determina si los anexos están disponibles solamente para usuarios ingresados a Moodle';
$string['drafts'] = 'Ver Borradores';
$string['eventalternateemailadded'] = 'Email alternativo añadido';
$string['ferpa'] = 'Modo FERPA (Family Educational Rights and Privacy Act)';
$string['ferpa_desc'] = 'Le permite al sistema comportarse, ya sea de acuerdo a la configuración del curso para modo_de_grupo, ignorando la configuración para modo_de_grupo, o ignorando por completo los grupos.';
$string['no_alternates'] = 'No se encontraron Emails alternos para {$a->fullname}. Continue para hacer uno.';
$string['no_drafts'] = 'Usted no tiene borradores de Emails.';
$string['noferpa'] = 'Sin Respeto a Grupo';
$string['overwrite_history'] = 'Sobrescribir Historia de Quickmail';
$string['pluginname'] = 'Quickmail (correo rápido)';
$string['prepend_class'] = 'Insertar el nombre del curso.';
$string['prepend_class_desc'] = 'Inserte el nombre corto del curso dentro del asunto del Email.';
$string['quickmail:addinstance'] = 'Añadir un nuevo bloque Quickmail a una página de curso';
$string['quickmail:allowalternate'] = 'Permitirles a los usuarios añadir un Email alterno para los cursos.';
$string['quickmail:canconfig'] = 'Permitirle a los usuarios configurar instancia de Quickmail.';
$string['quickmail:cansend'] = 'Permitirle a los usuarios enviar Email por Quickmail';
$string['quickmail:myaddinstance'] = 'Añadir un nuevo bloque de Quickmail a /mi página';
$string['receipt'] = 'Recibir una copia';
$string['receipt_help'] = 'Recibir una copia del Email enviado';
$string['restore_history'] = 'Restaurar Historia Quickmail';
$string['save_draft'] = 'Guardar Borrador';
$string['signature'] = 'Firmas';
$string['status'] = 'estatus';
$string['strictferpa'] = 'Siempre Separar Grupos';
$string['subject'] = 'Asunto';
$string['title'] = 'Título';
