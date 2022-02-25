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
 * Strings for component 'qtype_gapselect', language 'es_mx', version '3.11'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Espacios vacíos para {no} más opciones';
$string['answer'] = 'Respuesta';
$string['choices'] = 'Opciones';
$string['choicex'] = 'Opción [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'menú desplegable';
$string['combinedcontrolnamegapselectplural'] = 'menúes desplegables';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['errorblankchoice'] = 'Por favor revise las opciones: La opción {$a} está vacía.';
$string['errormissingchoice'] = 'Por favor revise el texto de la pregunta: ¡ {$a} no se encontró entre las opciones! Solamente están permitidos para usarse como sustituíbles los números con las opciones de respuestas especificadas.';
$string['errornoslots'] = 'El texto de la pregunta debe contener sustituíbles como [[1]] para mostrar donde van las palabras faltantes.';
$string['errorquestiontextblank'] = 'Usted debe escribir el texto de lapregunta';
$string['group'] = 'Grupo';
$string['pleaseputananswerineachbox'] = 'Por favor ponga una respuesta en cada caja';
$string['pluginname'] = 'Seleccionar palabras faltantes';
$string['pluginname_help'] = 'Las preguntas de seleccionar palabras faltantes requieren que el usuario seleccione las respuestas correctas de menús desplegables. Se usan [[1]], [[2]], [[3]], ... como reemplazables dentro del texto de la pregunta, con las respuestas correctas especificadas como opciones de respuestas 1, 2, 3, ... respectivamente. Pueden añadirse opciones de respuestas extra para hacer la pregunta más difícil. Las opciones de respuestas pueden agruparse para restringir las respuestas disponibles en cada menú desplegable.';
$string['pluginnameadding'] = 'Añadiendo una pregunta de seleccionar palabra faltante';
$string['pluginnameediting'] = 'Editando una pregunta de seleccionar palabras faltantes';
$string['pluginnamesummary'] = 'Las palabras faltantes en el texto de la pregunta son llenadas usando menús desplegables.';
$string['privacy:metadata'] = 'El plugin de tipo de pregunta Seleccionar palabras faltantes le permite a los autores de pregunta el configurar opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado configurado para una pregunta dada.';
$string['privacy:preference:penalty'] = 'La penalización para cada intento incorrecto cuando las preguntas son empleadas con el comportamiento \'Interactivo con intentos múltiples\' o el \'Modo adaptativo\'.';
$string['privacy:preference:shuffleanswers'] = 'Si es que las respuestas deberían o no ser barajadas automáticamente.';
$string['shuffle'] = 'Barajar';
$string['tagsnotallowed'] = '{$a->tag} no está permitido. (Sólamente {$a->allowed} están permitidos.)';
$string['tagsnotallowedatall'] = '{$a->tag} no está permitido. (No está permitido  HTML aquí.)';
