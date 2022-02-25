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
 * Strings for component 'qtype_recordrtc', language 'es_mx', version '3.11'.
 *
 * @package     qtype_recordrtc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audio'] = 'Audio único';
$string['audiobitrate'] = 'Tasa de muestreo (bitrate) del audio';
$string['audiobitrate_desc'] = 'Calidad de la grabación de audio (un número mayor significa mayor calidad). Actualmente - mientras nosotros grabemos audio en formato MP3 - esto solamente afecta la parte del audio de las grabaciones de video.';
$string['audiotimelimit'] = 'Duración máxima de grabación de audio';
$string['audiotimelimit_desc'] = 'Tiempo máximo que un autor de pregunta puede configurar para la longitud de la grabación de audio.';
$string['avplaceholder'] = 'Reemplazables de audio/video';
$string['avplaceholder_help'] = 'Poner uno o más widgets de grabación en cualquier parte en el texto de la pregunta. Usted puede copiar los ejemplos de aquí.

Cada reemplazable requiere, dentro de paréntesis cuadrados dobles, un nombre único (por ejemplo \'grabadora1\'), un tipo (\'audio\' o \'video\') y una duración opcionalmente, separados por caracteres de dos puntos. La duración debería expresarse como por ejemplo \'30s\' o \'05m45s\'. Cuando no se configura la duración, el widget usará el valor predeterminado de la duración máxima de la grabación.

Usted también puede aplicar formateo al widget, como por ejemplo cambiarle la alineación o ponerlo dentro de una tabla.';
$string['customav'] = 'Audio/video personalizado';
$string['downloadrecording'] = 'Descargar {$a}';
$string['err_audiotimelimit'] = 'La duración máxima de la grabación no puede ser mayor de {$a} segundos (configuración de duración máxima de grabación).';
$string['err_closesquarebrackets'] = 'Falta paréntesis cuadrado de cierre. {$a->format}';
$string['err_opensquarebrackets'] = 'Falta paréntesis cuadrado de apertura. {$a->format}';
$string['err_placeholderformat'] = 'El formato del reemplazable es, ya sea [[name:audio:duration]] o [[name:video:duration]], , donde name solamente puede contener letras minúsculas, números, guiones y guiones_bajos y no puede ser mayor de 32 caracteres. La duración es opcional y podría ser por ejemplo \'01m20s\', \'02m\' o \'45s\'.';
$string['err_placeholderincorrectformat'] = 'Un reemplazable en el texto de la pregunta no está en el formato correcto. {$a->format}';
$string['err_placeholdermediatype'] = 'El tipo de widget "{$a->text}" no es válido. {$a->format}';
$string['err_placeholdermissingduration'] = '{$a} falta duración. Escriba la duración requerida en el formato correcto o quite el último \':\' para considerar la duración predeterminada del sistema para esta pregunta.';
$string['err_placeholderneeded'] = 'Usted debe añadir al menos un reemplazable al texto de la pregunta.';
$string['err_placeholdernotallowed'] = 'Usted no puede usar reemplazables con Tipo de grabación {$a}.';
$string['err_placeholdertitle'] = '"{$a->text}" no es un nombre válido. {$a->format}';
$string['err_placeholdertitlecase'] = '"{$a->text}" no es un nombre válido. Los nombres solamente pueden contener letras minúsculas. {$a->format}';
$string['err_placeholdertitleduplicate'] = '"{$a->text}" ha sido usado más de una vez. Cada nombre debe ser diferente.';
$string['err_placeholdertitlelength'] = '"{$a->text}" es más largo de {$a->maxlength} caracteres. {$a->format}';
$string['err_timelimit'] = 'La duración máxima de grabación no puede ser mayor de {$a}.';
$string['err_timelimitpositive'] = 'La duración máxima de grabación debe ser mayor de 0.';
$string['err_videotimelimit'] = 'La duración máxima de la grabación no puede ser mayor de {$a} segundos (configuración de duración máxima de grabación).';
$string['err_zeroornegativetimelimit'] = '"{$a}" no es válido. La duración máxima de la grabación debe ser mayor de 0.';
$string['filex'] = 'Archivo {$a}';
$string['gumabort'] = 'Pasó algo extraño que impidió que se usara la webcam / el micrófono.';
$string['gumabort_title'] = 'Algo pasó';
$string['gumnotallowed'] = 'El usuario debe permitirle al navegador de internet el acceso a la cámara web / el micrófono';
$string['gumnotallowed_title'] = 'Permisos equivocados';
$string['gumnotfound'] = 'No hay un dispositivo de entrada conectado o habilitado';
$string['gumnotfound_title'] = 'Dispositivo faltante';
$string['gumnotreadable'] = 'Algo le está impidiendo al navegador el acceso a la webcam / el micrófono';
$string['gumnotreadable_title'] = 'Error del equipo (hardware)';
$string['gumnotsupported'] = 'Su navegador de internet no soporta la grabación sobre una conexión insegura y debe cerrar el plugin.';
$string['gumnotsupported_title'] = 'Sin soporte para conexión insegura';
$string['gumoverconstrained'] = 'La webcam / el micrófono actual no puede producir un flujo de datos con las restricciones requeridas';
$string['gumoverconstrained_title'] = 'Problema con restricciones';
$string['gumsecurity'] = 'Su navegador no soporta la grabación sobre una conexión insegura y debe cerrar el plugin.';
$string['gumsecurity_title'] = 'Sin soporte para conexión insegura';
$string['gumtype'] = 'Intentó obtener flujo de datos de la webcam / el micrófono, pero no fueron especificadas restricciones.';
$string['gumtype_title'] = 'Sin restricciones especificadas';
$string['insecurewarning'] = 'Su navegador no permitirá que este plugin funcione a menos que sea usado sobre HTTPS.';
$string['insecurewarningtitle'] = 'Conexión insegura';
$string['mediatype'] = 'Tipo de grabación';
$string['mediatype_help'] = 'Si es que al estudiante se le pide grabar solamente un audio, solamente un video, o varios audios o videos.

<b>Único audio:</b> Será mostrada una grabadora/reproductora de audio al final del texto de la pregunta.

<b>Único video video:</b> Será mostrada una grabadora/reproductora de video al final del texto de la pregunta.

<b>Audio/video personalizado:</b> pueden ser añadidos reemplazables para cualquier número de grabadoras/reproductoras de audio o video al texto de la pregunta. Por ejemplo [[name1:audio]] o [[name2:video]]. Los names (nombres) deben ser todos diferentes y se volverán los nombres de los archivos de las grabaciones.';
$string['nearingmaxsize'] = 'Usted ha agotado el límite de tamaño máximo para subidas de archivo';
$string['nearingmaxsize_title'] = 'Grabación detenida';
$string['norecording'] = 'Sin grabación';
$string['nowebrtc'] = 'Su navegador todavía ofrece soporte limitado o ningún soporte para las tecnologías WebRTC, y no puede ser usado con este tipo de pregunta. Por favor cambie o actualice su navegador de internet.';
$string['nowebrtctitle'] = 'WebRTC no soportado';
$string['optionsforaudio'] = 'Opciones de audio';
$string['optionsforaudioandvideo'] = 'Opciones de audio y video';
$string['optionsforvideo'] = 'Opciones de video';
$string['pleaserecordsomethingineachpart'] = 'Por favor complete su respuesta';
$string['pluginname'] = 'Grabar audio/video';
$string['pluginname_help'] = 'Los estudiantes responden al texto de la pregunta grabando algún audio o video (o una mezcla de ambos si seleccionó la opción de \'A/V personalizado\') directamente en su navegador. Esto puede ser calificado manualmente, o por auto-evaluación si Usted ha instalado el plugin opcional de comportamiento libre de la Open University.';
$string['pluginnameadding'] = 'Añadiendo una pregunta de grabar audio/video';
$string['pluginnameediting'] = 'Editando una pregunta de grabar audio/video';
$string['pluginnamesummary'] = 'Los estudiantes responden al texto de la pregunta grabando algún audio o video (o una mezcla de ambos si seleccionó la opción de \'A/V personalizado\') directamente en su navegador. Esto puede ser calificado manualmente, o por auto-evaluación si Usted ha instalado el plugin opcional de comportamiento libre de la Open University.';
$string['privacy:metadata'] = 'El plugin para el tipo de pregunta de grabar audio/video le permite a los autores de pregunta el configurar las opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:defaultmark'] = 'El puntaje predeterminado configurado para una pregunta dada.';
$string['privacy:preference:mediatype'] = 'Si es que el medio está configurado a \'Audio único\', \'Video único\' o \'Audio/video personalizado\'';
$string['privacy:preference:timelimitinseconds'] = 'La \'duración máxima de grabación\' configurada para una pregunta dada.';
$string['recordagain'] = 'Re-grabar';
$string['recordingfailed'] = 'Falló grabación';
$string['recordinginprogress'] = 'Detener grabación ({$a})';
$string['startcamera'] = 'Iniciar cámara';
$string['startrecording'] = 'Iniciar grabación';
$string['timelimit'] = 'Duración máxima de grabación';
$string['timelimit_help'] = 'Duración máxima de grabación que puede hacer el estudiante.';
$string['uploadaborted'] = 'Grabación abortada';
$string['uploadcomplete'] = 'Grabación subida';
$string['uploadfailed'] = 'Falló subida';
$string['uploadfailed404'] = 'Falló subida (¿archivo demasiado grande?)';
$string['uploadpreparing'] = 'Preparando subida ...';
$string['uploadprogress'] = 'Subiendo ({$a}) ...';
$string['video'] = 'Único video';
$string['videobitrate'] = 'Tasa de muestreo (bitrate) del video';
$string['videobitrate_desc'] = 'Calidad de la grabación de video (un número mayor significa mayor calidad)';
$string['videosize'] = 'Tamaño del video';
$string['videosize_desc'] = 'El tamaño del video.';
$string['videotimelimit'] = 'Duración máxima de grabación de video';
$string['videotimelimit_desc'] = 'El tiempo máximo que un autor de pregunta puede configurar para la longitud de la grabación de video.';
