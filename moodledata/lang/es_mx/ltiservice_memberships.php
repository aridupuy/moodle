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
 * Strings for component 'ltiservice_memberships', language 'es_mx', version '3.11'.
 *
 * @package     ltiservice_memberships
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allow'] = 'Use este servicio para recuperar información de miembros segun configuraciones de privacidad';
$string['ltiservice_memberships'] = 'Aprovisionamiento de Rol y Nombres IMS LTI';
$string['ltiservice_memberships_help'] = 'Permitirle a la herramienta recuperar información de los miembros del curso usando el Servicio de Aprovisionamiento de Roles y Nombres IMS LTI. Aplicarán las configuraciones de privacidad. Para solicitudes a nivel de curso esas estarán basadas en las configuraciones de la herramienta. Si Usted desea enviar siempre estos detalles, no delegue la opción a los profesores . Las solicitudes a nivel de enlace siempre usarán las configuraciones de seguridad que aplican al enlace.';
$string['notallow'] = 'No usar este servicio';
$string['pluginname'] = 'Servicio de Aprovisionamiento de Nombres y Roles LTI';
$string['privacy:metadata:email'] = 'El Email del usuario que emplea el consumidor LTI.';
$string['privacy:metadata:externalpurpose'] = 'La información es enviada a un proveedor LTI externo.';
$string['privacy:metadata:firstname'] = 'El nombre del usuario que usa el consumidor LTI.';
$string['privacy:metadata:fullname'] = 'El nombre completo del usuario que usa el consumidor LTI.';
$string['privacy:metadata:lastname'] = 'El apellido(s) del usuario que usa el consumidor LTI.';
$string['privacy:metadata:userid'] = 'La ID del usuario que usa el consumidor LTI.';
$string['privacy:metadata:useridnumber'] = 'El número ID del usuario que usa el consumidor LTI';
