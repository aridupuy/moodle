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
 * Strings for component 'local_learning_analytics', language 'es_mx', version '3.11'.
 *
 * @package     local_learning_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_customfield_category'] = 'Renombrar la categoría';
$string['admin_customfield_category_hint'] = 'hacer clic en el ícono del lápiz junto a la categoría para renombrarla';
$string['admin_customfield_info'] = 'Usted mismo puede cambiar el nombre de la opción en las configuraciones del curso, al renombrarlo en las páginas siguientes:';
$string['admin_customfield_no_manual_delete'] = 'No elimine la categoría o la opción. Usted solamente puede renombrarlas. Si quiere eliminar la opción, entonces cambie el estado de arriba.';
$string['admin_customfield_option'] = 'Renombrar la opción';
$string['admin_customfield_option_hint'] = 'usted solamente puede cambiar el nombre y el texto descriptivo';
$string['customfield_category_description'] = 'Esta categoría fue creada automáticamente por el plugin de Analítica del Aprendizaje  (local_learning_analytics). Usted no debería de eliminarla manualmente.';
$string['customfield_category_name'] = 'Analítica del Aprendizaje';
$string['customfield_field_description'] = 'Habilitarlo añade el enlace a "Estadísticas de Uso" a la navegación de su curso.';
$string['customfield_field_name'] = 'Habilitar Estadísticas de Uso';
$string['dataprivacy_threshold_description'] = 'Este valor determina cuantos "puntos de datos" necesita contener un conjunto de datos antes de que los datos sean mostrados.';
$string['general_settings'] = 'Configuraciones Generales';
$string['help_faq'] = 'Preguntas Frecuentes (FAQ)';
$string['help_faq_data_storage_question'] = '¿Cuales datos son almacenados y mostrados por el servicio?';
$string['help_faq_datapoints_question'] = '¿Por qué son los números de aciertos tan diferentes para diferentes tipos de materiales?';
$string['help_faq_developer_question'] = '¿Quién desarrolló el servicio y donde puedo obtener más información?';
$string['help_faq_personal_data_question'] = '¿Porqué no se muestran estadísticas personalizadas, como clics por usuario?';
$string['help_faq_privacy_threshold_answer'] = 'Por razones de privacidad de datos; los datos agregados solamente son mostrados si cuando menos  {$a} puntos de datos están presentes.';
$string['help_faq_privacy_threshold_question'] = '¿Porqué algunos valores son mostrados como "< {$a}"?';
$string['help_faq_visibility_answer'] = 'Para asegurar máxima transparencia, los datos mostrados pueden ser vistos por los propietarios del curso y también por los participantes del curso.';
$string['help_faq_visibility_question'] = '¿Quién puede acceder a las Estadísticas de Uso?';
$string['help_faq_week_start_question'] = '¿Porqué la primera semana en la gráfica del Tablero no corresponde con el inicio actual de la clase?';
$string['help_take_tour'] = 'Tomar el tour interactivo';
$string['help_title'] = 'Ayuda';
$string['hits'] = 'Pistas';
$string['learners'] = 'Estudiantes';
$string['learning_analytics'] = 'Analítica del Aprendizaje';
$string['learning_analytics:view_statistics'] = 'Acceder a estadísticas de uso en cursos';
$string['navigationlink'] = 'Estadísticas de Uso';
$string['pluginname'] = 'Analítica del Aprendizaje';
$string['privacy:metadata'] = 'Este plugin no almacena datos personales.';
$string['sessions'] = 'Sesiones';
$string['setting_course_ids_description'] = 'Use esta opción. cuando usted selecciona la segunda opción a arriba para decidir para cuales cursos debería estar habilitada la interfaz del usuario.';
$string['setting_status_course_customfield'] = 'Añadir opción en las configuraciones del curso para que los profesores puedan habilitarlo ellos mismos';
$string['setting_status_description'] = 'Este valor configura si es que la interfaz del usuario debería estar activada y si es que un enlace debería de ser mostrado en la navegación. De forma predeterminada, el enlace y la página son visibles si escribir a bitácoras está habilitado para el curso. Usted puede usar esta opción. si quiere tener escritura a bitácoras en todos los cursos, pero solamente quisiera habilitar la interfaz del usuario en cursos específicos.';
$string['setting_status_option_disable'] = 'Ocultar enlace de navegación y deshabilitar la página para todos los cursos';
$string['setting_status_option_hidelink'] = 'Ocultar enlace de navegación pero conservar la página habilitada para todos los cursos (solamente si usted conociera el enlace, usted podría acceder a la página)';
$string['setting_status_option_show_always'] = 'Mostrar enlace de navegación para todos los cursos, aunque el escribir a bitácoras esté deshabilitado para el curso (solamente habilite esto si usted ya estaba escribiendo a bitácoras antes)';
$string['setting_status_option_show_courseids'] = 'Mostrar enlace de navegación si el curso es especificado debajo vía course_ids';
$string['setting_status_option_show_if_enabled'] = 'Mostrar enlace de navegación si escribir a bitácoras está habilitado para el curso.';
$string['setting_student_enrols_groupby_description'] = 'Esta opción define cuales cursos son juntados en la página de "Curso Anterior/Paralelo" y cual valor es usado para mostrar los nombres.';
$string['show_full_list'] = 'Lista expandida';
$string['subplugintype_lalog'] = 'Bitácora de A.A.';
$string['subplugintype_lalog_plural'] = 'Bitácoras de A.A.';
$string['subplugintype_lareport'] = 'Reporte de A.A.';
$string['subplugintype_lareport_plural'] = 'Reportes de A.A.';
$string['tour_activities'] = 'La última vista muestra las tres actividades más usadas de los últimos 7 días.

Al hacer clic en el enlace, usted puede ver detalles de las actividades del curso.';
$string['tour_box_hits'] = 'Este indicador muestra el número de acciones dentro de los últimos 7 días. Debajo puede ver los cambios sobre los 7 días anteriores.

Al hacer clic en el enlace usted puede abrir un mapa de calor, que visualizar el número de acciones sobre el semestre completo.';
$string['tour_box_learners'] = 'El primer indicador muestra el número total de participantes. Debajo del número grande, se muestra el cambio respecto de la semana anterior.';
$string['tour_box_learnerslink'] = 'Hacer clic en el enlace para ver más información acerca de los participantes.';
$string['tour_box_quiz_assign'] = 'Esto muestra el número de intentos de examen y envíos de Tarea de los últimos 7 días. Debajo, el cambio respecto de los 7 días anteriores es mostrado.

Al hacer clic en el enlace, usted puede ver detalles acerca de los exámenes y tareas del curso.';
$string['tour_dashboard_boxes'] = 'En el área del fondo son mostrados números clave importantes del curso.

Adicionalmente, cada caja contiene un enlace con el cual está disponible más información.';
$string['tour_dashboard_graph'] = 'La gráfica muestra el número de todas las acciones en la semana respectiva.

Si fuera un curso en operación, el principio de la semana actual está marcado por una línea punteada. Los números de la semana actual no son mostrados.';
$string['tour_more_information'] = 'El tour interactivo ya ha sido completado. Esperamos que le haya dado una buena visión general de las características.

Se pueden encontrar más respuestas a preguntas frecuentes en la página de Ayuda.';
$string['tour_title'] = 'Analítica del Aprendizaje';
