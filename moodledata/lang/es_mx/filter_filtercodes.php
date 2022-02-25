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
 * Strings for component 'filter_filtercodes', language 'es_mx', version '3.11'.
 *
 * @package     filter_filtercodes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contentmissing'] = '<h1>Falta contenido.</h1><p>Por favor notifique al webmaster.</p>';
$string['courseteacherlinktype'] = 'Tipo de enlace del profesor';
$string['courseteacherlinktype_desc'] = 'Elegir el tipo de anlace para el enlace del profesor en las marcas  {courseteachers}';
$string['courseteachershowpic'] = 'Mostrar imagen del profesor';
$string['courseteachershowpic_desc'] = 'Si se habilita, mostrará la imagen del perfil del profesor en las marcas {courseteachers}.';
$string['defaultemail'] = '';
$string['defaultfirstname'] = '';
$string['defaultsurname'] = '';
$string['defaultusername'] = '';
$string['disabled_customnav_description'] = '<strong>Tenga en cuenta esto para soportar menú personalizado</strong> - Para habilitar el soporte para FilterCodes en el menú personalizado de su sitio Moodle, Usted podría necesitar personalizar su tema o el núcleo de Moodle. <a href="https://github.com/michael-milette/moodle-filter_filtercodes#can-i-use-filtercodes-in-moodles-custom-menus">Información acerca de como añadir soporte para FilterCodes en menúes personalizados</a>.';
$string['enable_customnav'] = 'Soporte para navegación personalizada';
$string['enable_customnav_description'] = '<strong>Experimental</strong>: Habilitar soporte para marcas de FilterCode en el menú de navegación personalizado de Moodle.
Nota: Se conoce que esto es compatible con los temas basados en Clean y Boost solamente en Moodle 3.2 a 3.4. No filtra las marcas en la página de Configuraciones de Temas de Moodle.';
$string['enable_scrape'] = 'Soporte de marca scrape (arañar URL)';
$string['enable_scrape_description'] = 'Habilitar la marca scrape (arañar URl)';
$string['escapebraces'] = 'Tags de escape';
$string['escapebraces_desc'] = 'Cuando esta opción esté activada, usted podrá mostrar marcas FilterCode sin que sean interpretadas por este filtro al incluir las marcas dentro de  [ paréntesis cuadrados ]. Esto puede ser muy útil cuando se crea documentación para FilterCodes para los profesores y creadores de cursos en su sitio Moodle.<br><br>Ejemplo: [{fullname}] no mostrará el nombre completo del usuario, sino que mostrará la marca {fullname} sin los paréntesis,  en su lugar.';
$string['filtername'] = 'Códigos de Filtro';
$string['formcheckin'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf check-in">
    <fieldset>
        <input type="hidden" id="subject" name="subject" value="Present!">
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="¡Aquí estoy!">
    </div>
</form>';
$string['formquickquestion'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
    <fieldset>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Subject <strong class="required">(required)</strong></label>
            <input class="block" id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
                    title="Mínimo 5 caracteres." required="required">
        </div>
        <div class="form-group">
            <label for="message" id="messagelabel" class="d-block">Message <strong class="required">(required)</strong></label>
            <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                    title="Mínimo 5 caracteres." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Send">
    </div>
</form>';
$string['formsupport'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf support-request">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Your name <strong class="required">(required)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Mínimo 3 letras/espacios." required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">Email address <strong class="required">(required)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Subject <strong class="required">(required)</strong></label>
            <select id="subject" name="subject" required="required">
                <option label="Elija un asunto"></option>
                <option>No puedo cambiar mi contraseña</option>
                <option>No puedo ingresar</option>
                <option value="Suggestion">Tengo una sugerencia</option>
                <option value="Error message">Me manda un mensaje de error</option>
                <option value="System error">Algo no funciona como debiera</option>
                <option value="Course">Tengo dificultades para ingresar a un curso o algún contenido de un curso</option>
                <option value="Other reason">Otra (favor de especificar)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="specific_subject" id="specifylabel" class="d-block">Especifificar asunto o el nombre del curso&nbsp;<strong class="required">(required)</strong></label>
            <input type="text" id="specific_subject" name="specific_subject" size="57" maxlength="80" required="required">
        </div>
        <div class="form-group">
            <label for="url" id="urllabel" class="d-block">Especificar la dirección URL</label>
            <input type="url" id="url" name="url" size="57" maxlength="80" value="{referer}">
        </div>
        <div class="form-group">
            <label for="description" id="descriptionlabel" class="d-block">Descripción y detalles paso-a-paso sobre como reproducir el problema&nbsp;<strong class="required">(required)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Mínimo 5 caracteres." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Enviar solicitud de ayuda">
    </div>
</form>';
$string['globaltagcontentdesc'] = 'Este es el contenido que su marca global remplazará. Ejemplo:si su marca es llamada "{global_address}", esa marca será remplazada por el contenido ingresado dentro de este campo.';
$string['globaltagcontenttitle'] = 'Contenido';
$string['globaltagcount'] = 'Número de marcas originales';
$string['globaltagcountdesc'] = 'Seleccionar el número de marcas que usted desea definir. Para un desempeño óptimo, solamente seleccione el número que necesitará.';
$string['globaltagheadingdesc'] = 'Definir sus propias marcas globales, a veces también llamadas bloques globales.';
$string['globaltagheadingtitle'] = 'Marcas globales personalizadas';
$string['globaltagnamedesc'] = 'Esto será parte de su nombre de la marca, prefijado con "global_". Ejemplo: Si usted ingresa "address" aquí, su marca será llamada {global_address}". Debe ser una sola cadena de caracteres solamente, sin espacios, ni número ni caracteres especiales tampoco están permitidos.';
$string['globaltagnametitle'] = 'Tag: global_';
$string['hidecompletedcourses'] = 'Ocultar cursos completados';
$string['hidecompletedcourses_desc'] = 'Habilitar el filtrar evitando curso completados en listados de marcas {mycoursesmenu}';
$string['ifprofilefiedonlyvisible'] = '{ifprofile_field_} visible solamente .';
$string['ifprofilefiedonlyvisible_desc'] = 'Restringir la marca {ifprofile_field_...} para solamente acceder a campos visibles del perfil. Los campos ocultos se comportarán como si el campo estuviera vacío. Si se desactiva, esta marca podrá comprobar campos ocultos del usuario.';
$string['pagebuilder'] = 'Constructor de página';
$string['pagebuilderlink'] = 'https://www.layoutit.com/build';
$string['photoeditor'] = 'Editor de foto';
$string['photoeditorlink'] = 'https://pixlr.com/editor/';
$string['photoeditorname'] = 'Pixlr';
$string['pluginname'] = 'Códigos de Filtro';
$string['privacy:metadata'] = 'El plugin Códigos de Filtro no almacena ningún dato personal acerca de ningún usuario.';
$string['screenrec'] = 'Grabadora de pantalla';
$string['screenreclink'] = 'https://screenapp.io/#/recording';
$string['sizeb'] = 'B';
$string['sizeeb'] = 'EB';
$string['sizegb'] = 'GB';
$string['sizekb'] = 'KB';
$string['sizemb'] = 'MB';
$string['sizetb'] = 'TB';
$string['sizeyb'] = 'YB';
$string['sizezb'] = 'ZB';
