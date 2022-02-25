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
 * Strings for component 'qformat_wordtable', language 'es_mx', version '3.11'.
 *
 * @package     qformat_wordtable
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'No puede abrirse el archivo temporal <b>{$a}</b>';
$string['cannotreadzippedfile'] = 'No puede lerrse el archivo comprimido ZIP <b>{$a}</b>';
$string['cannotwritetotempfile'] = 'No se puede escribir al archivo temporal <b>{$a}</b>';
$string['cloze_distractor_column_label'] = 'Distractores';
$string['cloze_feedback_column_label'] = 'Retroalimentación de distractor';
$string['cloze_instructions'] = 'Use <strong>negritas</strong> paraOpción Múltiple, <em>cursivas</em> para Respuesta Corta, y <u>subrayado</u> para preguntas Numéricas.';
$string['cloze_mcformat_label'] = 'Orientación (D = desplegable; V = vertical, H = horizontal botones seleccionables)';
$string['description_instructions'] = 'Esta no es realmente una pregunta. En realidad, es una manera de añadir instrucciones, rúbrica u otro contenido a la actividad. Es similar a la forma en que se emplean las etiquetas para añadirle contenido a una página de curso.';
$string['docnotsupported'] = 'Los archivos con formato de Word 2003 no están soportados: <b>{$a}</b>, use Moodle2Word 3.x en su lugar';
$string['essay_instructions'] = 'Permite una respuesta de unas cuantas oraciones o párrafos. Esto debe calificarse manualmente.';
$string['htmldocnotsupported'] = 'Formato de Word incorrecto; por favor use la opción de <i> Archivo > Guardar como...</i> para guardar <b>{$a}</b> en formato (.doc) nativo de Word 2010 (docx9) y volver a importar';
$string['htmlnotsupported'] = 'Archivos en formato HTML no están soportados: <b>{$a}</b>';
$string['interface_language_mismatch'] = 'No se importaron preguntas porque el idioma de las etiquetas en el archivo de Word no coincide con el idioma actual de su interfaz de Moodle.';
$string['multichoice_instructions'] = 'Permite la selección de respuesta única o múltiple de una lista pre-definida.';
$string['noquestions'] = 'No hay preguntas para exportar';
$string['pluginname'] = 'Formato de tabla de Microsoft Word 2010 (wordtable)';
$string['pluginname_help'] = 'Este es un programa para convertir el formato binario de Microsoft Word 2010 hacia formato de pregunta de Moodle XML para importar; y para convertir el formato de pregunta de Moodle XML hacia un formato mejorado XHTML para exportar las preguntas de Moodle en un formato apropiado para editarlas empleando  Microsoft Word.';
$string['preview_question_not_found'] = 'Previsualizar pregunta no encontrada, nombre / ID del curso: {$a}';
$string['privacy:metadata'] = 'El plugin del Formato de pregunta WordTable no almacena ningún dato personal.';
$string['stylesheetunavailable'] = 'La hoja de estilo de XSLT <b>{$a}</b> no está disponible';
$string['transformationfailed'] = 'La transformación con XSLT falló (<b>{$a}</b>)';
$string['truefalse_instructions'] = 'XConfigurar alificación de \'100\' para la respuesta correcta.';
$string['unsupported_instructions'] = 'El importar este tipo de pregunta no está soportado.';
$string['word_about_moodle2word'] = 'Acerca de Moodle2Word';
$string['word_about_moodle2word_screentip'] = 'Acerca de las plantillas de Word y el plugin de Moodle2Word';
$string['word_addcategory_supertip'] = 'Los nombres de categoría usan el estilo de Encabezado 1 (Heading 1)';
$string['word_currentquestion'] = '(Pregunta actual)';
$string['word_gapselect_screentip'] = 'Advertencia. Para este tipo de pregunta se necesita el plugin Select missing words (seleccionar palabras faltantes).';
$string['word_import'] = 'Importar';
$string['word_multiple_answer'] = 'Respuesta Múltiple';
$string['word_new_question_file'] = 'Archivo de Pregunta Nueva';
$string['word_new_question_file_screentip'] = 'Las preguntas deben de guardarse en el formato de Word 2010 (.docx)';
$string['word_new_question_file_supertip'] = 'Cada archivo de Word puede contener varias categorías';
$string['word_setunset_assessment_view'] = 'Activar/Desactivar Vista de Evaluación';
$string['word_showhide_assessment_screentip'] = 'Mostrar los metadatos de pregunta a editar, ocultar para previsualizar evaluación impresa';
$string['word_showhide_assessment_supertip'] = 'Ocultar o mostrar el texto oculto';
$string['word_showhide_assessment_view'] = 'Mostrar/Ocultar Vista de Evaluación';
$string['word_shuffle_screentip'] = 'Barajar las respuestas de preguntas de Opción Múltiple, Falso/Verdadero y Relacionar Columnas';
$string['word_shuffle_supertip'] = 'Varias barajadas son mejores que 1';
$string['word_view'] = 'Ver';
$string['wordtable'] = 'Formato de tabla de Microsoft Word 2010 (wordtable)';
$string['wordtable_help'] = 'Este es un programa para convertir el formato binario de Microsoft Word 2010 hacia el formato de Pregunta de Moodle XML para importar, y para convertir el formato de pregunta de Moodle XML hacia un formato mejorado XHTML para exportarse en un formato adecuado para editarse en Microsoft Word.';
$string['xmlnotsupported'] = 'Los archivos en formato XML no están soportados: <b>{$a}</b>';
$string['xsltunavailable'] = 'Usted necesita la biblioteca XSLT instalada en PHP para guardar este archivo de Word';
