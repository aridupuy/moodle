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
 * Strings for component 'local_messageprovider', language 'es_mx', version '3.11'.
 *
 * @package     local_messageprovider
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['content'] = 'Se ha creado una cuenta nueva por auto-registro para {$a->userfullname} ({$a->username}, {$a->email}) de {$a->city}, {$a->country}. Vea el perfil de {$a->userprofilelink} para más detalles.';
$string['messageprovider:newselfregistration'] = 'Notificación de nuevo auto-registro';
$string['pluginname'] = 'Proveedor de mensajes';
$string['subject'] = '{$a->sitename}: Nueva cuenta por auto-registro para {$a->userfullname}';
