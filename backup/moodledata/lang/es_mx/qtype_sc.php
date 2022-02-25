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
 * Strings for component 'qtype_sc', language 'es_mx', version '3.11'.
 *
 * @package     qtype_sc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answernumbering'] = '¿Número de opciones?';
$string['checked'] = 'elegida';
$string['clearchoice'] = 'Eliminar mi opción';
$string['configintro'] = 'Configuraciones de administración para el tipo de pregunta de opción única.';
$string['correct'] = 'Correcto';
$string['correctvaluereset'] = 'El valor para la respuesta correcta ha sido reiniciado a la opción 1. La opción 1 ha sido marcada provisionalmente como correcta.';
$string['deletedchoice'] = 'Esta opción fue eliminada después de que el intento había iniciado.';
$string['deleterawswarning'] = 'Disminuir el número de opciones eliminará la(s) última(s) {$a} opción(es). ¿Está seguro de querer proceder?';
$string['enterstemhere'] = 'Ingresar aquí la base o raíz de la pregunta.';
$string['feedbackforoption'] = 'Retroalimentación';
$string['generalfeedback'] = 'Retroalimentacióngeneral';
$string['generalfeedback_help'] = 'La misma retroalimentación general es mostrada sin importar la respuesta elegida. Use retroalimentación general para, por ejemplo, explicar las respuestas correctas o darle a los estudiantes un enlace hacia información adicional.';
$string['incorrect'] = 'No correcta';
$string['iscrossedout'] = 'está tachada';
$string['markascorrect'] = 'Seleccionar para elegir como opción correcta.';
$string['markasdistractor'] = 'Seleccionar para tachar como opción incorrecta.';
$string['markedascorrect'] = 'Esta opción ha sido elegida como correcta.';
$string['markedasdistractor'] = 'Esta opción ha sido marcada como incorrecta.';
$string['maxpoints'] = 'Puntos máximos';
$string['mustchoosecorrectoption'] = 'Usted debe marcar una opción como correcta.';
$string['mustdeleteextrarows'] = 'El máximo de opciones permitidas en Opción Única son 5 opciones. {$a} opción(es) será(n) eliminada(s). Si usted cancela la edición sin guardar, las opciones superfluas permanecerán.';
$string['mustsupplyname'] = 'Debe ingresar un título de trabajo.';
$string['mustsupplyvalidvalue'] = 'El valor seleccionado debe ser un número entero entre 2 y 5.';
$string['mustsupplyvalue'] = 'Usted debe ingresar un texto de opción.';
$string['numberofrows'] = 'Número de opciones';
$string['numberofrows_help'] = 'Especificar el número de opciones. Al cambiar a menos opciones, las opciones superfluas serán eliminadas una vez que el elemento sea guardado';
$string['oneradiobutton'] = '¡Usted tiene que elegir una de las opciones!';
$string['option'] = 'Opción';
$string['optionno'] = 'Opción {$a}';
$string['optionsandfeedback'] = 'Opciones y retroalimentación';
$string['pluginname'] = 'Opción Única (ETH)';
$string['pluginname_help'] = 'En preguntas de Opción Única ("Tipo A") la única opción que es la correcta o mejor opción tiene que ser identificada. El estudiante también puede marcar las opciones que considera que son incorrectas para recibir una fracción de los puntos dependiendo del método de calificar.';
$string['pluginnameadding'] = 'Añadiendo una pregunta de Opción Única ("Tipo A")';
$string['pluginnameadding_help'] = 'En respuesta a una pregunta el candidato debe identificar una respuesta como la única respuesta correcta o la mejor respuesta.';
$string['pluginnameediting'] = 'Editando una pregunta de Opción Única ("Tipo A")';
$string['pluginnameediting_help'] = 'En respuesta a una pregunta el candidato debe identificar una respuesta como la única respuesta correcta o la mejor respuesta.';
$string['pluginnamesummary'] = 'En preguntas de Opción Única ("Tipo A") la única opción que es la correcta o mejor opción tiene que ser identificada. El estudiante también puede marcar las opciones que considera que son incorrectas para recibir una fracción de los puntos dependiendo del método de calificar.';
$string['preview'] = 'Previsualización';
$string['privacy:metadata'] = 'El plugin del tipo de pregunta Opción Única no almacena ningún dato personal';
$string['scoringaprime'] = 'Aprime';
$string['scoringaprime_help'] = 'Se otorga puntuación completa por seleccionar la opción mejor o correcta, la mitad de los puntos totales si todos los distractores excepto uno están tachados, y cero puntos en otros casos. y cero puntos en caso contrario.';
$string['scoringmethod'] = 'Método de puntaje';
$string['scoringmethod_help'] = 'Hay tres métodos alternativos de puntaje:
<br/><strong>SC1/0</strong> (recomendado): El estudiante recibe puntaje completo si la única respuesta correcta o la mejor respuesta es identificada, y cero puntos en otros casos.

<br/><strong>Aprime</strong>: El estudiante recibe puntaje completo por seleccionar la repuesta correcta o la mejor respuesta, la mitad de los puntos totales si todos los distractores menos uno están tachados, y cero puntos en otros casos..
<br/><strong>Subpuntos</strong>: Al estudiante se le otorgan puntos completos por seleccionar la respuesta correcta o la mejor respuesta, subpuntos por cada distractor tachado correctamente hasta la mitad de los puntos totales  por tachar todos menos uno, y cero puntos en otros casos.';
$string['scoringsconezero'] = 'SC1/0';
$string['scoringsconezero_help'] = 'Se otorga puntuación completa por seleccionar la opción mejor o correcta, y cero puntos en caso contrario.';
$string['scoringsubpoints'] = 'Subpuntos';
$string['scoringsubpoints_help'] = 'Se otorga puntuación completa por seleccionar la opción mejor o correcta, subpuntos por cada distractor correctamente tachado hasta la mitad de los puntos totales por tachar todos menos un distractor, y cero puntos en casos diferentes.';
$string['selectone'] = 'Seleccione una opción:';
$string['showscoringmethod'] = 'Mostrar método de puntaje';
$string['showscoringmethod_help'] = 'Si esta configuración es habilitada, los estudiantes verán el método de puntaje en los exámenes';
$string['shuffleanswers'] = 'Opciones de barajeado';
$string['shuffleanswers_help'] = 'Si se habilita, el orden de las opciones es barajeado aleatoriamente para cada intento, siempre y cuando también esté habilitado Barajear dentro de preguntas" en las configuraciones de la actividad.';
$string['stem'] = 'Base o raíz de la pregunta';
$string['tasktitle'] = 'Título del trabajo';
$string['unchecked'] = 'no elegida';
$string['warningreduceoptions'] = 'Cuando se disminuye el número de opciones se eliminarán opciones superfluas. ¿Está seguro de querer proceder?';
