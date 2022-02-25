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
 * Strings for component 'portfolio_mahara', language 'es_mx', version '3.11'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Habilitar soporte de portafolio Leap2A (requiere Mahara 1.3 o superior)';
$string['err_invalidhost'] = 'host MNet no válido';
$string['err_invalidhost_help'] = 'Este plugin está mal configurado porque apunta a un host MNet inválido (o borrado). Este plugin requiere pares de Red Moodle (Moodle Networking) con SSO IDP publicados, SSO_SP suscrito, y portafolio suscrito <b>y</b> publicado.';
$string['err_networkingoff'] = 'MNet está apagada';
$string['err_networkingoff_help'] = 'La autenticación MNet está actualmente deshabilitada. Por favor habilítela antes de intentar configurar este plugin. Cualquier instancia de este plugin se ha ocultado hasta que MNet sea habilitado. Necesitarán ser configuradas después manualmente para ser visibles.';
$string['err_nomnetauth'] = 'El plugin de autenticación MNet está deshabilitada';
$string['err_nomnetauth_help'] = 'El plugin de autenticación de MNet está deshabilitado, pero es requerido para este servicio';
$string['err_nomnethosts'] = 'Depende de MNet';
$string['err_nomnethosts_help'] = 'Este plugin se basa en pares MNet con SSO IDP publicado, SSO SP suscrito, portafolio de servicios publicados <b> y </b> suscritos, así como el conector de autenticación MNet. Cualquier instancia de este conector se ha ocultado hasta que se cumplan estas condiciones. Posteriormente será necesario ajustarlos manualmente para hacerlos de nuevo visibles.';
$string['failedtojump'] = 'No se pudo iniciar comunicación con el servidor remoto';
$string['failedtoping'] = 'No se pudo iniciar comunicación con el servidor externo: {$a}';
$string['mnet_nofile'] = 'No pudo encontrar el archivo en el objeto transferido - error raro';
$string['mnet_nofilecontents'] = 'Se encontró el archivo en el objeto transferido, pero no pudo obtener su contenido - error raro: {$a}';
$string['mnet_noid'] = 'No pudo encontrar el registro concordante con la transferencia para esta ficha (token)';
$string['mnet_notoken'] = 'No pudo encontrarse la ficha (token) que concuerde con esta transferencia';
$string['mnet_wronghost'] = 'El host remoto no concordó el registro de transferencia para esta ficha (token)';
$string['mnethost'] = 'host MNet';
$string['pf_description'] = 'Le permite a los usuarios enviar contenido de Moodle hacia este host<br />Subscríbase a <b>y</b> publique este servicio para permitir que los usuarios autenticados en su sitio puedan enviar contenido a  {$a}<br /><ul><li><em>Dependencia</em>: también debe de <strong>publicar</strong> el servicio del SSO (Proveedor de Identificación) a {$a}.</li><li><em>Dependencia</em>: también debe de <strong>subscribirse </strong> al servicio SSO (Proveedor de Servicio) en {$a}</li><li><em>Dependencia</em>: también debe de habilitar el plugin de autenticación MNet.</li></ul><br />';
$string['pf_name'] = 'Servicios de Portafolio';
$string['pluginname'] = 'ePortafolio Mahara';
$string['privacy:metadata'] = 'Este plugin envía datos externamente hacia una aplicación enlazada Mahara. No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales pasados a través del subsistema de portafolio.';
$string['senddisallowed'] = 'Usted no puede transferir archivos a Mahara por el momento';
$string['url'] = 'URL';
