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
 * Strings for component 'tool_bloglevelupgrade', language 'es_mx', version '3.11'.
 *
 * @package     tool_bloglevelupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bloglevelupgradedescription'] = 'La visibilidad del blog fue simplificada en  2.0, pero su sitio todavía utiliza uno de los tipos de visibilidad antiguos. Para preservar la visibilidad de las entradas del blog basadas en el curso o basadas en el grupo, el siguiente script de actualización creará un tipo de foro "blog" especial en cada curso donde los usuarios inscritos hayan publicado mensajes de blog, y copiará estas entradas del blog en este foro especial. Los blogs serán entonces completamente desconectados a nivel del sitio. No se borarán entradas de blog en el proceso.

</p> <p>Usted puede ejecutar este script visitando <a href="{$a->fixurl}">la página de actualización de nivel del blog</a>.</p>';
$string['bloglevelupgradeinfo'] = 'La visibilidad del blog fue simplificada en  2.0, pero su sitio todavía utiliza uno de los tipos de visibilidad antiguos. Para preservar la visibilidad de las entradas del blog basadas en el curso o basadas en el grupo, el siguiente script de actualización creará un tipo de foro "blog" especial en cada curso donde los usuarios inscritos hayan publicado mensajes de blog, y copiará estas entradas del blog en este foro especial. Los blogs serán entonces completamente desconectados a nivel del sitio. No se borarán entradas de blog en el proceso.';
$string['bloglevelupgradeprogress'] = 'Progreso de la conversión: {$a->userscount} usuarios revisados, {$a->blogcount} entradas convertidas.';
$string['pluginname'] = 'Actualización de visibilidad de blog';
