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
 * Strings for component 'qtype_numerical', language 'es_mx', version '3.11'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Error aceptable';
$string['addmoreanswerblanks'] = 'Espacios vacíos para {no} respuestas más';
$string['addmoreunitblanks'] = 'Espacios vacíos para {no} unidades más';
$string['answercolon'] = 'Respuesta:';
$string['answererror'] = 'Error';
$string['answermustbenumberorstar'] = 'La respuesta debe ser un número, por ejemplo -1.234 o 3e8, o \'*\'.';
$string['answerno'] = 'Respuesta {$a}';
$string['decfractionofquestiongrade'] = 'como fracción (0-1) de la calificación de de la pregunta';
$string['decfractionofresponsegrade'] = 'como fracción (0-1) de la calificación de la respuesta';
$string['decimalformat'] = 'decimales';
$string['editableunittext'] = 'el elemento de texto introducido';
$string['errornomultiplier'] = 'Debe especificar un multiplicador para esta unidad.';
$string['errorrepeatedunit'] = 'No puede tener dos unidades con el mismo nombre.';
$string['geometric'] = 'Geométrica';
$string['invalidnumber'] = 'Usted debe introducir un número válido.';
$string['invalidnumbernounit'] = 'Usted debe introducir un número válido. No incluya el nombre de la unidad en su respuesta.';
$string['invalidnumericanswer'] = 'Una de las respuestas que puso no es un número válido.';
$string['invalidnumerictolerance'] = 'Uno de los valores de tolerancia introducidos no es un número válido.';
$string['leftexample'] = 'A la IZQUIERDA como en $1.00 o £1.00';
$string['manynumerical'] = 'Las unidades son opcionales. Si se escribe la unidad, se usa para convertir la respuesta a Unidad 1 antes de calificar.';
$string['multiplier'] = 'Multiplicador';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'Texto no editable de Unidad No 1';
$string['nonvalidcharactersinnumber'] = 'Caracteres NO válidos en el número';
$string['notenoughanswers'] = 'Debe escribir al menos una respuesta.';
$string['nounitdisplay'] = 'Sin calificar unidad';
$string['numericalmultiplier'] = 'Multiplicador';
$string['numericalmultiplier_help'] = 'El multiplicador es el factor por el que la respuesta-numérica correcta se multiplica.

La primera unidad (\'Unidad 1\') tiene un valor multiplicador predeterminado de 1. Así, por ejemplo, si la respuesta-numérica correcta es de 5500 W y se establece W (vatio) como unidad en \'Unidad 1\' que tiene 1 como multiplicador predeterminado, la respuesta correcta es 5500 W.

Si se agrega la unidad kW (kilovatio) con un multiplicador de 0,001, entonces 5,5kW será también una respuesta correcta. Esto significa que tanto 5500W como 5.5kW se consideran correctas.

Tenga en cuenta que el margen de error aceptado también se multiplica, por lo que un error permitido de 100 W se convertiría en un error de 0.1kW.';
$string['oneunitshown'] = 'Unidad 1 es mostrada automáticamente junto a la caja de respuesta.';
$string['onlynumerical'] = 'No se emplean Unidades para nada. Solamente se califica el valor numérico.';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Por favor, introduzca su respuesta sin usar el separador para miles de unidades ({$a})';
$string['pluginname'] = 'Numérica';
$string['pluginname_help'] = 'Desde la perspectiva del alumno, una pregunta numérica es muy semejante a una pregunta de respuesta corta. La diferencia es que a las respuestas numéricas se les permite tener un margen de error. Esto permite evaluar la respuesta dentro de un rango fijo. Por ejemplo: si la respuesta es 10 y con un margen de error de 2  entonces cualquier número entre 8 y 12 se aceptará como correcto.';
$string['pluginnameadding'] = 'Agregando una pregunta numérica';
$string['pluginnameediting'] = 'Editando una pregunta numérica';
$string['pluginnamesummary'] = 'Permite una respuesta numérica (con posibilidad de especificar las unidades) que es calificada comparándola con distintas respuestas modelo (es posible incluir márgenes de tolerancia).';
$string['privacy:metadata'] = 'El tipo de pregunta Numérica les permite a los autores de pregunta configurar opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado configurado para una pregunta dada.';
$string['privacy:preference:multichoicedisplay'] = 'Si es que las unidades son mostradas como el elemento de ingreso de texto, selección de opción múltiple, o un menú desplegable.';
$string['privacy:preference:penalty'] = 'La penalización para cada intento incorrecto cuando las preguntas son empleadas con el comportamiento \'Interactivo con intentos múltiples\' o el \'Modo adaptativo\'.';
$string['privacy:preference:unitgradingtypes'] = 'Si es que la penalización unitaria aplica como una fracción (0-1) de la calificación de la respuesta o de la calificación de la pregunta.';
$string['privacy:preference:unitpenalty'] = '¿Cual fracción (0-1) de la calificación de la respuesta o la calificación de la pregunta debería de aplicar?';
$string['privacy:preference:unitrole'] = 'Si es que la unidad es esencial, opcional o inesesperada.';
$string['privacy:preference:unitsleft'] = 'Si es que la unidad se muestra a la izquierda (como $, £) o se muestra a la derecha (como kg, km, cm).';
$string['relative'] = 'Relativa';
$string['rightexample'] = 'A la DERECHA, como en  1.00cm o 1.00km';
$string['selectunit'] = 'Seleccione una unidad';
$string['selectunits'] = 'Seleccione uidades';
$string['studentunitanswer'] = 'Las unidades se introducen empleando';
$string['tolerancetype'] = 'Tipo de tolerancia';
$string['unit'] = 'Unidad';
$string['unitappliedpenalty'] = 'Estas marcas incluyen una penalización de {$a} por emplear alguna unidad incorrecta';
$string['unitchoice'] = 'una selección de opción múltiple';
$string['unitedit'] = 'Editar unidad';
$string['unitgraded'] = 'Debe darse la unidad, que será calificada';
$string['unithandling'] = 'Tratamiento de las unidades';
$string['unitincorrect'] = 'Usted no puso la unidad correcta.';
$string['unitmandatory'] = 'Obligatorio';
$string['unitmandatory_help'] = '* La respuesta se calificará usando la unidad escrita.

* La penalización se aplicará si el campo de la unidad está vacío';
$string['unitnotselected'] = 'Debe seleccionar una unidad.';
$string['unitonerequired'] = 'Debe introducir al menos una unidad';
$string['unitoptional'] = 'Unidad opcional';
$string['unitoptional_help'] = '* Si el campo de unidad no está vacío, la respuesta será calificada considerando también la unidad.

* Si la unidad está mal escrita o es desconocida la respuesta será considerada como no válida.';
$string['unitpenalty'] = 'Penalización de unidad';
$string['unitpenalty_help'] = 'La penalización se aplica si

* Se escribe un nombre de unidad sin definir en el campo de respuesta-unidad o
* Se escribe un nombre de unidad en el campo de respuesta-numérica';
$string['unitposition'] = 'Posición de unidad';
$string['units'] = 'Unidades';
$string['unitselect'] = 'un menú desplegable';
$string['unitx'] = 'Unidad {no}';
$string['validnumberformats'] = 'Formatos de número válidos';
$string['validnumberformats_help'] = '* números regulares 13500.67, 13 500.67, 13500,67 o 13 500,67

* si usa el Español de México y la configuración de su paquete de idioma (langconfig.php) emplea la coma (,) como separador de miles *siempre* ponga el punto decimal (.) como en 13,500.67 : 13,500.

* para formato exponente, digamos 1.350067 * 10<sup>4</sup>, use 1.350067 E4 : 1.350067 E04';
$string['validnumbers'] = '13500.67, 13 500.67, 13,500.67, 13500,67, 13 500,67, 1.350067 E4 o 1.350067 E04';
$string['xmustbenumeric'] = '{$a} debe ser un número.';
$string['xmustnotbenumeric'] = '{$a} no puede ser un número.';
$string['youmustenteramultiplierhere'] = 'Debe escribir un multiplicador aquí.';
