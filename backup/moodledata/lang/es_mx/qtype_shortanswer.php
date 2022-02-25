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
 * Strings for component 'qtype_shortanswer', language 'es_mx', version '3.11'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Espacios vacíos para {no} Respuestas Más';
$string['answer'] = 'Respuesta: {$a}';
$string['answermustbegiven'] = 'Debe responder si existe calificación o retroalimentación.';
$string['answerno'] = 'Respuesta {$a}';
$string['caseno'] = 'No, MAYÚSCULA/minúscula no importa';
$string['casesensitive'] = 'Diferenciar entre MAYÚSCULAS y minúsculas';
$string['caseyes'] = 'MAYÚSCULAS y minúsculas deben coincidir';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['correctanswers'] = 'Respuestas correctas';
$string['filloutoneanswer'] = 'Usted debe proporcionar al menos una respuesta posible. Las respuestas vacías  no se emplearán.\'*\' puede emplearse como comodín para coincidir con cualquier caracter. La primera respuesta que coincida se empleará para determinar la calificación y la retroalimentación.';
$string['notenoughanswers'] = 'Este tipo de pregunta requiere al menos {$a} respuestas';
$string['pleaseenterananswer'] = 'Por favor ponga una respuesta';
$string['pluginname'] = 'Respuesta corta';
$string['pluginname_help'] = 'En respuesta a una pregunta (que puede incluir una imagen) el alumno escribe una palabra o frase corta. Puede haber varias respuestas correctas posibles, cada una con una calificación diferente. Si está activada la opción "Sensible a MAYÚSCULAS/minúsculas" entonces Usted podría obtener puntuaciones diferentes para "Palabra" o "palabra".';
$string['pluginnameadding'] = 'Añadiendo una pregunta de respuesta corta';
$string['pluginnameediting'] = 'Editando una pregunta de respuesta corta';
$string['pluginnamesummary'] = 'Permite una respuesta de una o varias palabras que es calificada al compararla contra varias respuestas modelo, que pueden contener comodines.';
$string['privacy:metadata'] = 'El tipo de pregunta de Respuesta Corta les permite a los autores de pregunta configurar opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado configurado para una pregunta dada.';
$string['privacy:preference:penalty'] = 'La penalización para cada intento incorrecto cuando las preguntas son empleadas con el comportamiento \'Interactivo con intentos múltiples\' o el \'Modo adaptativo\'.';
$string['privacy:preference:usecase'] = 'Si es que las respuestas deberían ser sensibles a MAYÚSCULAS/minúsculas.';
