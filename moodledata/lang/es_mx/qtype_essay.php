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
 * Strings for component 'qtype_essay', language 'es_mx', version '3.11'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Tipos de archivo aceptados';
$string['acceptedfiletypes_help'] = 'Los tipos de archivo aceptados pueden restringirse al ingresar una lista de extensiones de archivo. Si el campo se deja vacío, entonces todos los tipos de archivo están permitidos.';
$string['allowattachments'] = 'Permitir archivos anexos';
$string['answerfiles'] = 'Archivos de respuesta';
$string['answertext'] = 'Texto de respuesta';
$string['attachedfiles'] = 'Anexos: {$a}';
$string['attachmentsoptional'] = 'Los anexos son opcionales';
$string['attachmentsrequired'] = 'Requerir anexos';
$string['attachmentsrequired_help'] = 'Esta opción especifica el número mínimo de anexos requeridos para que una respuesta se considere calificable.';
$string['err_maxminmismatch'] = 'El límite máximo de palabras debe ser mayor que el límite mínimo de palabras';
$string['err_maxwordlimit'] = 'El límite máximo de palabras está habilitado pero no está configurado';
$string['err_maxwordlimitnegative'] = 'El límite máximo de palabras no puede ser un número negativo';
$string['err_minwordlimit'] = 'El límite mínimo de palabras está habilitado pero no está configurado';
$string['err_minwordlimitnegative'] = 'El límite mínimo de palabras no puede ser un número negativo';
$string['formateditor'] = 'editor HTML';
$string['formateditorfilepicker'] = 'editor HTML con selector de archivos';
$string['formatmonospaced'] = 'Texto simple, tipografía monoespaciada';
$string['formatnoinline'] = 'Sin texto en línea';
$string['formatplain'] = 'Texto simple';
$string['graderinfo'] = 'Información para evaluadores';
$string['graderinfoheader'] = 'Información del evaluador';
$string['maxbytes'] = 'Tamaño máximo de archivo';
$string['maxwordlimit'] = 'Límite máximo de palabras';
$string['maxwordlimit_help'] = 'Si la respuesta requiere que los estudiantes introduzcan texto, este es el número máximo de palabras que cada estudiante tendrá permitido enviar.';
$string['maxwordlimitboundary'] = 'El límite de palabras para esta pregunta son {$a->limit} palabras y Usted está intentando enviar {$a->count} palabras. Por favor acorte su respuesta e inténtelo nuevamente.';
$string['minwordlimit'] = 'Límite mínimo de palabras';
$string['minwordlimit_help'] = 'Si la respuesta requiere que los estudiantes introduzcan texto, este es el número mínimo de palabras que cada estudiante tendrá permitido enviar.';
$string['minwordlimitboundary'] = 'Esta pregunta requiere una respuesta de al menos {$a->limit} palabras y Usted está intentando enviar {$a->count} palabras. Por favor expanda su respuesta e inténtelo nuevamente.';
$string['mustattach'] = 'Cuando se selecciona "Sin texto en línea", o las respuestas son opcionales, Usted debe permitir al menos un anexo.';
$string['mustrequire'] = 'Cuando se selecciona "Sin texto en línea", o las respuestas son opcionales, Usted debe requerir al menos un anexo.';
$string['mustrequirefewer'] = 'Usted no puede requerir más anexos de los que Usted permite.';
$string['nlines'] = '{$a} líneas';
$string['nonexistentfiletypes'] = 'Los siguientes tipos de archivo no fueron reconocidos: {$a}';
$string['pluginname'] = 'Ensayo';
$string['pluginname_help'] = 'En respuesta a una pregunta, el alumno puede subir uno o más archivos o puede ingresar texto en línea . Se puede proporcionar una plantilla de respuesta. Las respuestas deben ser calificadas manualmente.';
$string['pluginnameadding'] = 'Añadiendo una pregunta de ensayo';
$string['pluginnameediting'] = 'Editando una pregunta de ensayo';
$string['pluginnamesummary'] = 'Permite una respuesta de subir un archivo o texto en -línea. Esto debe de ser después calificado manualmente.';
$string['privacy:metadata'] = 'El plugin de tipo de pregunta Ensayo les permite a los autores de pregunta configurar opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:attachments'] = 'Numero de anexos permitidos.';
$string['privacy:preference:attachmentsrequired'] = 'Numero de anexos requeridos.';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado configurado para una pregunta dada.';
$string['privacy:preference:maxbytes'] = 'Tamaño máximo del archivo.';
$string['privacy:preference:responsefieldlines'] = 'Número de líneas indicando el tamaño de la caja para entrada (áreadetexto)';
$string['privacy:preference:responseformat'] = '¿Cual es el formato de repuesta (Editor HTML, Texto simple, etc)?';
$string['privacy:preference:responserequired'] = 'Si es que el estudiante necesita o no introducir texto o si la entrada de texto es opcional';
$string['responsefieldlines'] = 'Tamaño de caja de entrada';
$string['responseformat'] = 'Formato de respuesta';
$string['responseisrequired'] = 'Requerir que los estudiantes escriban texto';
$string['responsenotrequired'] = 'La escritura de texto es opcional';
$string['responseoptions'] = 'Opciones de respuesta';
$string['responserequired'] = 'Requerir texto';
$string['responsetemplate'] = 'Plantilla de respuesta';
$string['responsetemplate_help'] = 'Cualquier texto que se escriba aquí se mostrará en la caja de entrada de respuesta cuando principie un nuevo intento para la pregunta.';
$string['responsetemplateheader'] = 'Plantilla de Respuesta';
$string['wordcount'] = 'Número de palabras: {$a}';
$string['wordcounttoofew'] = 'Número de palabras: {$a->count}, menor que las {$a->limit} palabras requeridas.';
$string['wordcounttoomuch'] = 'Número de palabras: {$a->count}, mayor que las {$a->limit} palabras requeridas.';
