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
 * Strings for component 'tool_brickfield', language 'es_mx', version '3.11'.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessibility'] = 'Accesibilidad';
$string['accessibilitydisabled'] = 'El Kit de Accesibilidad Brickfield no está habilitada en este sitio. Póngase en contacto con su administrador del sitio para habilitarla.';
$string['accessibilityreport'] = 'Kit de accesibilidad';
$string['accessibilitytool'] = 'Herramienta de accesibilidad Brickfield';
$string['accessibilitytools'] = 'Herramientas de accesibilidad Brickfield';
$string['activate'] = 'Activar';
$string['activated'] = 'El plugin está activado y listo para usar.';
$string['activationform'] = 'Registro de Brickfield';
$string['activationheader'] = 'Activación de Brickfield';
$string['activationinfo'] = '<p>Para poder usar este plugin, Usted debe proporcionar claves válidas para este sitio en este formato.</p><p>Por favor <a href="{$a}" data-action="send_info" target="_blank"> regístrese en el portal Brickfield (abre en ventana nueva)</a> para recibir esas claves si es que aun no las tiene. </p><p>Una vez activado, sus claves serán validadas vía trabajos agendados del cron.</p>';
$string['activityresults:pluginname'] = 'Reporte desglosado de herramienta de accesibilidad de actividad';
$string['activityresults:toolname'] = 'Resumen desglosado de actividad';
$string['activityresults:toolshortname'] = 'Desglose de actividad';
$string['advanced:pluginname'] = 'Reporte avanzado de herramienta de accesibilidad';
$string['advanced:toolname'] = 'Resumen avanzado';
$string['advanced:toolshortname'] = 'Avanzado';
$string['allcourses'] = 'Todos los cursos revisados ({$a})';
$string['allcoursescat'] = 'Todos los cursos revisados para categoría {$a->catname} ({$a->count})';
$string['analysis:byrequest'] = 'Por solicitud';
$string['analysis:disabled'] = 'Deshabilitado';
$string['analysistype'] = 'Habilitar solicitudes de análisis';
$string['analysistype_desc'] = 'Permitir que sean solicitados análisis de accesibilidad de contenidos';
$string['analysistypedisabled'] = 'El análisis de contenidos está deshabilitado';
$string['bannercontentone'] = 'La versión Enterprise del Kit de Accesibilidad tiene un juego completo de características para ayudarle a su organización a mejorar la accesibilidad de sus cursos. <a href="{$a}">Contact Brickfield Education Labs</a> para reservar una demostración gratuita de las características avanzadas.';
$string['bannercontenttwo'] = 'Construya una plataforma de enseñanza y aprendizaje efectiva e inclusiva al encontrar contenido que no cumple con las recomendaciones, corrigiendo los problemas y preparando para el futuro su contenido de cursos Moodle con características mejoradas, editor y archivos accesibles.';
$string['bannerheadingone'] = 'Actualizar a la versión Enterprise del Kit de Accesibilidad';
$string['batch'] = 'Límite del lote';
$string['brickfield'] = 'Kit Brickfield';
$string['brickfield:viewcoursetools'] = 'Ver reportes por cursos.';
$string['brickfield:viewsystemtools'] = 'Ver reportes para todos los cursos.';
$string['bulkprocesscaches'] = 'Cacheo de proceso por lotes';
$string['bulkprocesscourses'] = 'Revisión de accesibilidad de proceso por lotes';
$string['buttonone'] = 'Obtener una demostración gratuita';
$string['cachepending'] = 'Los datos del resumen están siendo compilados';
$string['checkdesc:alinksdontopennewwindow'] = 'Enlaces que abren a una nueva ventana deberían de advertirle por anticipado a los usuarios.';
$string['checkdesc:amustcontaintext'] = 'Un enlace necesita contener texto para ser percibible.';
$string['checkdesc:areadontopennewwindow'] = 'Las áreas, usadas en mapas de imágenes, que abren a una ventana nueva, deberían de advertirle por anticipado a los usuarios.';
$string['checkdesc:areahasaltvalue'] = 'A las áreas, usadas en mapas de imágenes, no debería faltarles el texto "alt" (alternativo), similar a las imágenes.';
$string['checkdesc:asuspiciouslinktext'] = 'El texto del enlace debería ser descriptivo y proporcionar contexto acerca de su destino';
$string['checkdesc:basefontisnotused'] = 'Elementos del fontbase (tradicionalmente usados para formateado) no son accesibles y no deberían ser usados';
$string['checkdesc:blinkisnotused'] = 'Elementos parpadeantes, que prenden y apagan, no son accesibles y no deberían ser usados.';
$string['checkdesc:boldisnotused'] = 'Elementos resaltados en negritas "bold" (b) no deberían ser usados; en su lugar debería usarse "strong".';
$string['checkdesc:contenttoolong'] = 'La longitud general del contenido de página no debería exceder 500 palabras.';
$string['checkdesc:csstexthascontrast'] = 'El contraste de color entre el texto y el fondo es demasiado bajo.';
$string['checkdesc:embedhasassociatednoembed'] = 'A los elementos a incrustar (para incrustar multimedios) no debería faltarles sus elementos "noembed" correspondientes.';
$string['checkdesc:headerh3'] = 'Los encabezados que siguen después de encabezados H3 (la opción de encabezado grande del editor) no deberían partir la jerarquía de encabezados de la página.';
$string['checkdesc:headershavetext'] = 'Un encabezado necesita contener texto para ser percibible.';
$string['checkdesc:iisnotused'] = 'Los elementos cursivos "italic" (i) no deberían ser usados; en su lugar debería usarse "em".';
$string['checkdesc:imgaltisdifferent'] = 'El Texto alt (alternativo) de la imagen no debería ser el nombre del archivo de la imagen.';
$string['checkdesc:imgaltistoolong'] = 'El Texto alt (alternativo) de la imagen no debería ser mayor que el máximo permitido de (125) caracteres.';
$string['checkdesc:imgaltnotemptyinanchor'] = 'El Texto alt (alternativo) de la imagen no debería estar vacío, especialmente cuando la imagen es un enlace que va hacia otro lado.';
$string['checkdesc:imgaltnotplaceholder'] = 'El Texto alt (alternativo) de la imagen no debería ser un texto reemplazable simple, como por ejemplo "imagen".';
$string['checkdesc:imghasalt'] = 'El Texto alt (alternativo) de la imagen no debería estar ausente para elementos de la imagen, a menos que sean puramente decorativos sin significado';
$string['checkdesc:imgwithmaphasusemap'] = 'Los mapas de imágenes, con áreas clicables, necesitan elementos coincidentes "usemap" y "map".';
$string['checkdesc:legendtextnotempty'] = 'Los elementos de leyendo "legend", usados para poner letreritos a elementos de conjunto-de-campo, deberían contener texto.';
$string['checkdesc:marqueeisnotused'] = 'Los elementos "marquee" (auto-deslizado) no son accesibles y no deberían ser usados.';
$string['checkdesc:noheadings'] = 'La falta de encabezados hace al contenido menos estructurado y más difícil de leer.';
$string['checkdesc:objectmusthaveembed'] = 'A los elementos objeto "object" (para incrustar recursos externos) no deberían faltarles sus elementos "embed" correspondientes.';
$string['checkdesc:objectmusthavetitle'] = 'A los elementos objeto "object" (para incrustar recursos externos) no deberían faltarles sus descripciones "title" correspondientes.';
$string['checkdesc:objectmusthavevalidtitle'] = 'Los elementos objeto "object" (para incrustar recursos externos) deberían tener títulos "titles" correspondientes con texto.';
$string['checkdesc:strikeisnotused'] = 'Elementos Tachados "strike" (strike-through) no deberían ser usados; en su lugar use  "del" (deleted) (eliminado).';
$string['checkdesc:tabledatashouldhaveth'] = 'Idealmente las tablas no deberían tener encabezados faltantes.';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Los resúmenes "summaries" y los letreritos "captions" de las tablas no deberían ser idénticos.';
$string['checkdesc:tabletdshouldnotmerge'] = 'Idealmente las tablas no deberían tener ningunas celdas juntadas.';
$string['checkdesc:tablethshouldhavescope'] = 'Los alcances "scopes" de fila o columna de tabla (usados para mapear filas y columnas a cada celda) debería estar declarados.';
$string['checkidvalidation'] = 'Trabajo para comprobar cualquier checkid inválidos';
$string['checkscompleted'] = 'Comprobaciones completadas: {$a}';
$string['checktype'] = 'Comprobar grupo';
$string['checktype:form'] = 'Formato';
$string['checktype:image'] = 'Imagen';
$string['checktype:layout'] = 'Diseño';
$string['checktype:link'] = 'Enlace';
$string['checktype:media'] = 'Medio';
$string['checktype:table'] = 'Tabla';
$string['checktype:text'] = 'Texto';
$string['checktyperesults:pluginname'] = 'Reporte de herramienta de accesibilidad de tipos de contenido';
$string['checktyperesults:toolname'] = 'Resumen de tipos de contenido';
$string['checktyperesults:toolshortname'] = 'Tipos de contenido';
$string['cmpercent'] = 'Porcentaje global de actividades';
$string['cmpercenterrors'] = 'Porcentaje global de errores';
$string['cmpercenttitle'] = 'Desglose % global de actividades contra errores';
$string['confirmationmessage'] = 'Este curso ha sido agendado para análisis. El análisis será completado cuando más pronto
para {$a}. Revíselo después.';
$string['contactadmin'] = 'Por favor póngase en contacto con su administrador para completar el registro.';
$string['contactus'] = 'Póngase en contacto con nosotros';
$string['contentfive'] = 'Corregir automáticamente las marcas HTML caducas.';
$string['contentfour'] = 'Identificar cuales actividades tienen más problemas de accesibilidad para priorizar el esfuerzo.';
$string['contentone'] = 'Evaluar automáticamente el contenido y las evaluaciones de su curso para problemas de accesibilidad.';
$string['contentsix'] = 'Darle a sus profesores sugerencias oportunas para crear mejor contenido.';
$string['contentthree'] = 'Darle a sus estudiantes contenido en formatos accesibles, incluyendo Audio, ePub y Braille electrónico.';
$string['contenttwo'] = 'Actualizar masivamente texto confuso o faltante para enlaces web, descripciones de imágenes y subtítulos de videos.';
$string['contenttypeerrors'] = 'Resultados totales de pruebas de contenido de actividad por curso y por tipo de contenido.';
$string['contentyperesults'] = 'Aprobados/Reprobados totales por curso para áreas de contenido.';
$string['contextid'] = 'Contextid';
$string['core_course'] = 'Curso';
$string['core_question'] = 'Bancos de preguntas';
$string['count'] = 'Número';
$string['country'] = 'País';
$string['country_help'] = 'País del sitio';
$string['coursecount'] = 'Número de cursos';
$string['deletehistoricaldata'] = 'Eliminar resultados de revisiones históricas';
$string['dependency'] = 'Dependiente de';
$string['emptycategory'] = 'No se encontraron cursos en la categoría {$a}';
$string['emptytagcourses'] = 'No se encontraron resultados para cursos con marcas configuradas';
$string['enableaccessibilitytools'] = 'Habilitar herramientas de accesibilidad';
$string['enableaccessibilitytools_desc'] = 'El kit de accesibilidad ayuda a identificar problemas de accesibilidad en cursos.';
$string['error:nocoursespecified'] = 'Este reporte resumido requiere una id de curso válida. Por favor acceda a el kit de accesibilidad desde adentro de un curso, vía el menú de Acciones, que entonces proporcionará la id requerida del curso.';
$string['errorlink'] = 'Editar instancia de error para {$a}';
$string['errors'] = 'Errores: {$a}';
$string['errors:pluginname'] = 'Herramienta de accesibilidad lista de errores';
$string['errors:toolname'] = 'Resumen de lista de errores';
$string['errors:toolshortname'] = 'Lista de errores';
$string['eventanalysis_requested'] = 'Análisis de contenido solicitado';
$string['eventanalysis_requesteddesc'] = 'Análisis de contenido fue solicitado para curso {$a}.';
$string['eventreport_downloaded'] = 'Resumen de accesibilidad descargado';
$string['eventreport_downloadeddesc'] = 'El resumen de accesibilidad fue descargado para curso con id {$a}.';
$string['eventreport_viewed'] = 'Reporte de accesibilidad visto';
$string['eventreport_vieweddesc'] = 'Reporte de accesibilidad fue visto para curso con id {$a->course},
id de categoría {$a->category}, pestaña {$a->tab}.';
$string['failed'] = 'Falló';
$string['failedcount'] = 'Falló: {$a}';
$string['footerheading'] = 'Sección del pie de página';
$string['fullcachedone'] = 'Deshabilitar para re-ejecutar cacheo';
$string['hashcorrect'] = 'El código ingresado es correcto.';
$string['hashincorrect'] = 'El código ingresado es incorrecto.';
$string['headingfive'] = 'Composturas de HTML';
$string['headingfour'] = 'Enfocar esfuerzo';
$string['headingone'] = 'Evaluar contenido';
$string['headingsix'] = 'Soporte de desempeño';
$string['headingthree'] = 'Formatos de archivo accesibles';
$string['headingtwo'] = 'Remedio';
$string['hideshow'] = 'Ocultar/mostrar';
$string['inactive'] = 'El plugin está inactivo y no puede ser usado. Por favor escriba claves válidas de registro y presione "Activar".';
$string['innercontextid'] = 'Contextid interior';
$string['installed'] = 'Plugin instalado';
$string['installedcli'] = 'Plugin instalado vía línea de comandos';
$string['installeddescription'] = 'El plugin ha sido instalado, redireccionar a formato de activación.';
$string['invalidaccessibilitytool'] = 'Subplugin de accesibilidad solicitado inválido.';
$string['invalidcategoryid'] = 'Categoría inválida; por favor revise sus datos ingresados';
$string['invalidcourseid'] = 'Curso inválido; por favor revise sus datos ingresados';
$string['invalidlinkphrases'] = 'clic|hacer clic aquí|aquí|más|más aquí|info|info aquí|información|información aquí|leer más|leer más aquí|mayor información|mayor información aquí|más detalles|más detalles aquí';
$string['language'] = 'Idioma';
$string['language_help'] = 'Idioma del sitio';
$string['messageprovider:warningcheckid'] = 'Advertencia de checkids inválidos';
$string['mobileservice'] = 'Servicios Mobile habilitados ({$a})';
$string['module'] = 'Módulo';
$string['modulename'] = 'Nombre';
$string['moreinfo'] = 'Más información';
$string['noerrorsfound'] = 'No se encontraron errores comunes de accesibilidad para sus parámetros de búsqueda. ¡Felicitaciones!';
$string['norecords'] = 'No se encontraron registros relevantes para sus parámetros de búsqueda.';
$string['notregistered'] = 'Su kit de accesibilidad necesita ser registrada.';
$string['notvalidated'] = 'Su kit de accesibilidad es funcional mientras está siendo validada.';
$string['numcourses'] = 'Número de cursos ({$a})';
$string['numfactivities'] = 'Número de actividades ({$a})';
$string['numfiles'] = 'Número de archivos ({$a})';
$string['numinstances'] = 'Número de instancias';
$string['numusers'] = 'Número de usuarios ({$a})';
$string['pagedesc:checktype'] = '<p>Para poder resumir y analizar los resultados de las varias comprobaciones conducidas, nosotros agrupamos estas comprobaciones en diferentes tipos de contenido. Así, todos los resultados de comprobaciones de accesibilidad relacionadas con imágenes están en el grupo de tipo de contenido "Image" (Imagen), todos los resultados de comprobaciones relacionadas con diseño están en el grupo de tipo de contenido "Layout" (Diseño) y así sucesivamente.</p><p>Las actividades están incluidas, ya sea como actividades, recursos o áreas de contenido relacionadas con los cursos mismos.</p><p>La página de la gráfica de tipo de contenido muestra el desglose de errores por el grupo de tipo de contenido: Imagen, Diseño, Enlace, Medio, Tabla y Texto.</p>';
$string['pagedesc:pertarget'] = '<p>Para poder resumir y analizar los resultados de las comprobaciones por actividad, nosotros agrupamos estos resultados de comprobaciones en las diferentes actividades detectadas.</p><p>Las actividades están incluidas, ya sea como actividades, recursos, u otras áreas de contenido relacionadas con los cursos mismos. Cada actividad sin errores detectados es contada como aprobada; cada actividad con uno o más errores detectados es contada  como reprobada. La proporción de actividades aprobadas contra reprobadas es entonces mostrada.</p><p>La página de la gráfica del desglose de actividades muestra la proporción de instancias aprobadas contra reprobadas en total, por actividad, como por ejemplo tarea, curso, etiqueta, etc.</p>';
$string['pagedesctitle:checktype'] = 'Tipos de contenido explicados';
$string['pagedesctitle:pertarget'] = 'Desglose de actividad explicado';
$string['passed'] = 'Aprobado';
$string['passedcount'] = 'Aprobado(s): {$a}';
$string['passrate'] = 'Proporción de aprobación : {$a}%';
$string['pdf:filename'] = 'Brickfield_Summaryreport_CourseID-{$a}';
$string['percheckerrors'] = 'Número de pruebas y errores específicos por comprobación por curso.';
$string['perpage'] = 'Elementos a mostrar por página';
$string['pluginname'] = 'Kit de Accesibilidad';
$string['printable:downloadpdf'] = 'Descargar PDF';
$string['printable:pluginname'] = 'Reporte de reporte resumido de herramienta de accesibilidad';
$string['printable:printreport'] = 'Reporte imprimible';
$string['printable:toolname'] = 'Reporte resumido';
$string['printable:toolshortname'] = 'Reporte resumido';
$string['privacy:metadata'] = 'El plugin del Reporte de comprobaciones de accesibilidad no almacena ningún dato personal.';
$string['processanalysisrequests'] = 'Procesar solicitudes de análisis de contenido';
$string['registernow'] = 'Por favor regístrese ahora.';
$string['registration'] = 'Formato de registro';
$string['registrationinfo'] = '<p>Este proceso de registro le permite usar la versión inicial del kit de accesibilidad Brickfield para su sitio Moodle registrado.</p><p>Este uso está sujeto a estos <a href="{$a}" target="_blank">términos y condiciones de Brickfield Education Labs (abre en ventana nueva)</a> y a los cuales Usted acuerda al usar este producto.</p>';
$string['release'] = 'Versión de Moodle ({$a})';
$string['remaining'] = '({$a} errores restantes)';
$string['response:0'] = 'La URL no apunta a ninguna parte';
$string['response:404'] = 'La página del URL no fue encontrada';
$string['schedule:blocknotscheduled'] = 'Este curso aun no ha sido agendado para análisis, para encontrar problemas comunes de accesibilidad.</p>';
$string['schedule:notscheduled'] = '<p>Este curso aun no ha sido agendado para análisis, para encontrar problemas comunes de accesibilidad.</p><p>Al hacer clic en el botón para "Enviar para análisis", Usted confirma que quiere que todo su contenido HTML relevante del curso, como por ejemplo descripciones de sección del curso, descripciones de actividades, preguntas, páginas y más, sea agendado para análisis.</p><p>Este análisis conducirá múltiples comprobaciones comunes de accesibilidad en su contenido HTML del curso, y esos resultados serán entonces mostrados en estas páginas del reporte del kit de accesibilidad. Este análisis será procesado en segundo plano, por los trabajos agendados de Moodle, por lo que su velocidad de finalización dependerá del horario del trabajo y las agendas de ejecución de trabajos.';
$string['schedule:requestanalysis'] = 'Enviar para análisis';
$string['schedule:scheduled'] = 'Este curso ha sido agendado para análisis.';
$string['schedule:sitenotscheduled'] = 'El contenido global (independiente del curso) aun no ha sido agendado para análisis, para encontrar problemas comunes de accesibilidad.</p><p>Al hacer clic en el botón para "Enviar para análisis", Usted confirma que quiere que todo su contenido global (independiente del curso) relevante sea agendado para análisis.</p><p>Este análisis conducirá múltiples comprobaciones comunes de accesibilidad en este contenido, y esos resultados serán entonces mostrados en estas páginas del reporte del kit de accesibilidad. Este análisis será procesado en segundo plano, por los trabajos agendados de Moodle, por lo que su velocidad de finalización dependerá del horario del trabajo y las agendas de ejecución de trabajos.';
$string['schedule:sitescheduled'] = 'El contenido global (independiente del curso) ha sido agendado para análisis.';
$string['secretkey'] = 'Clave API';
$string['secretkey_help'] = 'Este código es recibido por Email después del registro.';
$string['sendfollowinginfo'] = '<p>La siguiente información será enviada periódicamente para contribuir a las estadísticas globales solamente. No será hecha pública en ningún listado central.</p> {$a}';
$string['settings'] = 'Configuraciones del kit de accesibilidad';
$string['sitehash'] = 'Clave secreta';
$string['sitehash_help'] = 'El código es recibido por Email después del registro.';
$string['taberrors'] = 'Comprobar errores';
$string['targetavetitle'] = 'Errores promedio por actividad';
$string['targetpercentage'] = 'Porcentaje de instancias aprobadas/NO por actividad';
$string['targetratio'] = 'Proporción de aprobación de actividad';
$string['tblcheck'] = 'Comprobar';
$string['tblcheckexample'] = 'Ejemplo';
$string['tblcheckfailed'] = 'Comprobaciones fallaron';
$string['tblchecksummary'] = 'Resumen';
$string['tbledit'] = 'Editar';
$string['tblerrorcount'] = 'Errores';
$string['tblhtmlcode'] = 'Código HTML existente';
$string['tblinstance'] = 'Instancia';
$string['tblline'] = 'Línea';
$string['tbloverallpercentage'] = 'Errores globales en %';
$string['tblpercentage'] = 'Porcentaje';
$string['tblpreview'] = 'Previsualización';
$string['tbltarget'] = 'Actividad';
$string['tblupdateto'] = 'Actualizar a';
$string['titleactivityresultsall'] = 'Resultados por actividad: todos los cursos revisados ({$a->count} cursos)';
$string['titleactivityresultspartial'] = 'Resultados por actividad: : curso {$a->name}';
$string['titleall'] = 'Detalles del error: todos los cursos revisados ({$a->count} cursos)';
$string['titlechecktyperesultsall'] = 'Resultados por tipo de contenido: todos los cursos revisados ({$a->count} cursos)';
$string['titlechecktyperesultspartial'] = 'Resultados por tipo de contenido: curso {$a->name}';
$string['titleerrorsall'] = 'Detalles del error: todos los cursos revisados ({$a->count} cursos)';
$string['titleerrorscount'] = 'Detalles del error: (mostrando los primeros {$a} errores)';
$string['titleerrorspartial'] = 'Detalles del error: curso {$a->name}';
$string['titlepartial'] = 'Detalles del error: curso {$a->name}';
$string['titleprintableall'] = 'Curso {$a->name}';
$string['titleprintablepartial'] = 'Curso {$a->name}';
$string['tools'] = 'Reportes';
$string['toperrors'] = 'Errores principales';
$string['toptargets'] = 'Actividades reprobadas';
$string['totalactivities'] = 'Total de actividades';
$string['totalactivitiescount'] = 'Total de actividades: {$a}';
$string['totalareas'] = 'Total de áreas';
$string['totalerrors'] = 'Total de errores';
$string['totalgrouperrors'] = 'Total (suma) de errores por tipo de contenido';
$string['updatesummarydata'] = 'Actualizar summarydata del sitio';
$string['usersmobileregistered'] = 'Número de usuarios con dispositivos móviles registrados ({$a})';
$string['validationerror'] = 'La validación de la clave de registro ha fallado. Revise que la URL de su sitio registrado y las claves sean correctas.';
$string['warningcheckidbody'] = 'Hay un problema con una comprobación Brickfield que está activa pero no está enlistada en la base de datos. Por favor investigue.';
$string['warningcheckidsubject'] = 'Advertencia checkID Kit Brickfield';
