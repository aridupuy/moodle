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
 * Strings for component 'qtype_match', language 'es_mx', version '3.11'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Respuesta {$a}';
$string['availablechoices'] = 'Opciones disponibles';
$string['blanksforxmorequestions'] = 'Espacios vacíos para {no} preguntas más';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['deletedchoice'] = '[opción eliminada]';
$string['deletedsubquestion'] = 'Esta parte de la pregunta fue eliminada después de que se inició el intento.';
$string['filloutthreeqsandtwoas'] = 'Debe proporcionar al menos dos preguntas y tres respuestas. Puede incluir respuestas erróneas (distractores) extra dando una respuesta para una pregunta en blanco. Las entradas que tengan ambas (pregunta y respuesta) en blanco serán ignoradas.';
$string['nomatchinganswer'] = 'Debe especificar una respuesta que corresponda con la pregunta \'{$a}';
$string['nomatchinganswerforq'] = 'Usted debe especificar una respuesta para esta pregunta.';
$string['notenoughqsandas'] = 'Usted debe proporcionar al menos {$a->q} preguntas y {$a->a} respuestas.';
$string['notenoughquestions'] = 'Usted debe proporcionar al menos {$a->q} parejas de preguntas y respuestas';
$string['pleaseananswerallparts'] = 'Por favor, responda a todas las partes de la pregunta';
$string['pluginname'] = 'Relacionar columnas';
$string['pluginname_help'] = 'Las preguntas de relacionar (columnas  / una con otra) requieren para su resolución que se establezcan de forma correcta las relaciones entre una lista de nombres o enunciados (preguntas) y otra lista de nombres o enunciados (respuestas).';
$string['pluginnameadding'] = 'Agregando una pregunta de relacionar (columnas)';
$string['pluginnameediting'] = 'Editando una pregunta de relacionar columnas';
$string['pluginnamesummary'] = 'La respuesta a cada una de un número de sub-preguntas debe ser seleccionada de una lista de posibilidades.';
$string['privacy:metadata'] = 'El plugin de tipo de pregunta de Relacionar columnas les permite a los autores de pregunta configurar opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado configurado para una pregunta dada.';
$string['privacy:preference:penalty'] = 'La penalización para cada intento incorrecto cuando las preguntas son empleadas con el comportamiento \'Interactivo con intentos múltiples\' o el \'Modo adaptativo\'.';
$string['privacy:preference:shuffleanswers'] = 'Si es que las respuestas deberían o no ser barajadas automáticamente.';
$string['shuffle'] = 'Barajar';
$string['shuffle_help'] = '<p>Si selecciona la opción "Sí", el orden de las sub-preguntas se elaborará al azar cada vez que el estudiante intenta contestar el examen que contiene esta pregunta, suponiendo que la opcion "Ordenar al azar" en los ajustes del examen sea "Sí".</p>';
