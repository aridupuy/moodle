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
 * Strings for component 'auth_googleoauth2', language 'es_mx', version '3.11'.
 *
 * @package     auth_googleoauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dropboxclientid'] = 'Su Secreto/Clave de la App son generados en la <a href="https://www.dropbox.com/developers/apps" target="_blank">Dropbox app console</a>.
Escriba las siguientes configuraciones al crear una aplicación (tenga en cuenta que Dropbox solamente soporta URL de tipo https, por lo que su sitio Moodle debe de soportar https):
<br/>App website: {$a->siteurl}
<br/>Redirect URIs: {$a->callbackurl}';
$string['auth_dropboxclientid_key'] = 'Clave App Ddropbox';
$string['auth_dropboxclientsecret'] = '';
$string['auth_dropboxclientsecret_key'] = 'Secreto de App Dropbox';
$string['auth_facebookclientid'] = 'Su Secreto/ID de la App puede generarse en su <a href="https://developers.facebook.com/apps/" target="_blank">Facebook developer page</a>:
<br/>\'\'Add a new app > Website > Enter your site name as app name > Create new facebook app ID > Enter the Site URL - no need to enter Mobile URL >\'\'
En la página de confirmación, busque el enlace hacia "Skip to Developer Dashboard"  > en el tablero (dashboard) de la App Usted deberá de encontrar la ID/secreto > Settings > Advanced > escriba las URIs de redireccción OAuth válidas
<br/>Site URL: {$a->siteurl}
<br/>App domains: {$a->sitedomain}
<br/>Valid OAuth redirect URIs: {$a->callbackurl}
<br/><strong>ADVERTENCIA: Facebook recientemente cambió la API. It is not working for newly created API key. For example we know it is broken from Facebook API 2.8
and it is working up to Facebook API 2.2. We didn\'t test Facebook API 2.3, 2.4, 2.5, 2.6 and 2.7. To summarize if you don\'t have already an old Facebook API key,
then it is guarantee that Facebook won\'t work in this login. Please look at plugin alternatives or wait for the next plugin big update (not planned yet).</strong>';
$string['auth_facebookclientid_key'] = 'ID de Facebook App';
$string['auth_facebookclientsecret'] = '';
$string['auth_facebookclientsecret_key'] = 'Secreto de Facebook App';
$string['auth_githubclientid'] = 'Su ID/Secreto del cliente puede generarse en su página <a href="https://github.com/settings/applications/new" target="_blank">Github register application page</a>:
<br/>Homepage URL: {$a->siteurl}
<br/>Authorization callback URL: {$a->callbackurl}';
$string['auth_githubclientid_key'] = 'ID del cliente Github';
$string['auth_githubclientsecret'] = '';
$string['auth_githubclientsecret_key'] = 'Secreto del cliente Github';
$string['auth_googleclientid'] = 'Su ID/Secreto del cliente puede generarse en la   <a href="https://code.google.com/apis/console" target="_blank">Google console API</a>:
<br/>
Dashboard > Google Identity and Access Management (IAM) API > Enable > Credentials > Create new Oauth Client ID > Configurar Product name en pantalla Consent > Save > Elegir \'Web application\' Credentials Type
<br/>
Authorized Javascript origins: {$a->jsorigins}
<br/>
Authorized Redirect URI: {$a->redirecturls}
<br/>';
$string['auth_googleclientid_key'] = 'ID de cliente de Google';
$string['auth_googleclientsecret'] = '';
$string['auth_googleclientsecret_key'] = 'Secreto de Cliente de Google';
$string['auth_googleipinfodbkey'] = 'IPinfoDB es un servicio que le permite encontrar de qué país  y ciudad es su visitante.
Esta configuración es opcional. Usted puede suscribirse a  <a href="http://www.ipinfodb.com/register.php">IPinfoDB</a> para obtener una clave gratuita.<br/>
Website: {$a->website}';
$string['auth_googleipinfodbkey_key'] = 'Clave IPinfoDB';
$string['auth_googleoauth2description'] = 'Permitirle a un usuario conectarse al sitio con un proveedor de autenticación externo: Google/Facebook/Windows Live.
Se crea una cuenta nueva la primera vez que el usuario se conecta con un proveedor de autenticación.
Para impedir la creación de cuenta  (configuración administrativa de authpreventaccountcreation) al autenticarse <b>debe de </b> desactivarse.';
$string['auth_googlesettings'] = 'Configuraciones de Proveedores';
$string['auth_linkedinclientid'] = 'Sus claves de API/Secreto pueden generarse en su <a href="https://www.linkedin.com/secure/developer" target="_blank">Linkedin register application page</a>:
<br/>Website URL: {$a->siteurl}
<br/>OAuth 2.0 Accept Redirect URL: {$a->callbackurl}';
$string['auth_linkedinclientid_key'] = 'Clave API de LinkEdln';
$string['auth_linkedinclientsecret'] = '';
$string['auth_linkedinclientsecret_key'] = 'Clave Secreta de LinkEdln';
$string['auth_microsoftclientid'] = 'Su Secreto/ID del cliente puede ser generado en <a href="https://apps.dev.microsoft.com/" target="_blank">Microsoft Application Registration Portal</a>:
<br />Redirect URI: {$a->callbackurl}';
$string['auth_microsoftclientid_key'] = 'ID de Aplicación Microsoft v2';
$string['auth_microsoftclientsecret'] = '';
$string['auth_microsoftclientsecret_key'] = 'Secreto de Aplicación de Microsoft v2';
$string['auth_sign-in_with'] = 'Ingresar con {$a->providername}';
$string['couldnotauthenticate'] = 'Falló la autenticación - Por favor intente ingresar nuevamente.';
$string['couldnotauthenticateuserlogin'] = 'Error del método de autenticación.¡Ya existe un usuario de cuenta con la misma dirección de Email<br/>
Por favor, elija otro método de autenticación o póngase en contacto con el administrador del sitio.<br/>
<br/>
<a href="{$a->loginpage}">Intentar nuevamente</a>.<br/>
<a href="{$a->forgotpass}">¿Olvidó su contraseña</a>?';
$string['couldnotgetgoogleaccesstoken'] = 'El proveedor de autenticación nos envió un error de comunicación. Por favor trate de entrar de nuevo.';
$string['emailaddressmustbeverified'] = 'Su dirección email no es verificada por el método de autentificación que Usted seleccionó. Posiblemente se le olvidó a Usted activar el enlace para "verificar dirección Email" que le enviaron Google o Facebook durante la suscripción a su servicio.';
$string['faileduserdetails'] = 'El sitio tuvo éxito al conectarse al proveedor seleccionado, pero falló al recuperar sus datos de usuario.';
$string['microsoft_failure'] = 'No se recibió un código de autorización de los servidores Microsoft.';
$string['moreproviderlink'] = 'Entrar con otro servicio';
$string['noaccountyet'] = 'Usted aun no tiene permiso para usar el sitio. Por favor, contacte al administrador y pídale que active su cuenta.';
$string['othermoodle'] = 'Otra autenticación Moodle';
$string['pluginname'] = 'Oauth2';
$string['signinwithanaccount'] = 'Ingresar con {$a}';
$string['stattitle'] = 'Estadísticas de ingreso para este plugin';
$string['supportmaintenance'] = 'Para apoyar el mantenimiento de este plugin, ingrese a <a target="_blank" href="https://moodle.org/plugins/view/auth_googleoauth2">Moodle.org plugin page</a> y elija \'Add to my favourites\'. ¡Gracias!';
$string['unknownfirstname'] = 'Nombre(s) desconocido(s)';
$string['unknownlastname'] = 'Apellido(s) desconocido(s)';
