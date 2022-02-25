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
 * Strings for component 'cachestore_memcache', language 'es_mx', version '3.11'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Habilitar servidores agrupados en \'\'cluster\'\'';
$string['clustered_help'] = 'Esto es usado para permitir la funcionalidad de lee-uno, configura-multi.

El uso que se pretende es crear un almacén mejorado para configuraciones con balanceo-de-carga. El almacén buscará de un servidor (usualmente localhost), pero configurará a varios (todos los servidores en el \'\'pool\'\' de balanceo-de-carga), Para cachés con tasas muy altas de lectura contra configuración, esto ahorra una cantidad significativa de carga adicional de red.

Cuando se habilita esta configuración, el servidor arriba enlistado será usado para búsqueda';
$string['clusteredheader'] = 'Dividir servidores';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Prefijo de clave';
$string['prefix_help'] = 'Este prefijo se usa para todos los nombres de claves en el servidor memcache.
* Si sólamente tiene una instancia de Moodle usando este servidor, usted puede dejar este valor en su estado por defecto.
* Debido a restricciones en el largo de la clave, se permite un máximo de 5 caracteres.';
$string['prefixinvalid'] = 'Prefijo inválido. Solamente puede emplear a-z A-Z 0-9-_.';
$string['privacy:metadata:memcache'] = 'El plugin de caché del almacén de caché Memcache almacena datos por corto tiempo como parte de su funcionalidad de cachear. Estos datos son almacenados en un servidor Memcache en donde los datos son eliminados regularmente.';
$string['privacy:metadata:memcache:data'] = 'Los diversos datos almacenados en la caché';
$string['servers'] = 'Servidores';
$string['servers_help'] = 'Esto configura los servidores que deberían ser utilizados por este adaptador memcache. Los servidores deberían definirse de a uno por línea y consisten de una dirección de servidor y opcionalmente un puerto y peso.
Si no se proporciona puerto, entonces el puerto por defecto (11211) es usado.

Por ejemplo:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Si se habilita el *Habilitar servidores agrupados (clustered)" debajo, entonces deberá de haber solamente un servidor enlistado aquí. Esto usualmente sería un nombre que siempre resuelve a la máquina local, como 127.0.0.1 o localhost.';
$string['serversclusterinvalid'] = 'Exactamente un servidor es necesario cuando se habilita el \'\'clustering\'\'';
$string['sessionhandlerconflict'] = 'Advertencia: Una instancia memcache  ({$a}) ha sido configurada para usar el mismo servidor  memcache que las sesiones. El purgar todas las cachés causará que las sesiones también sean purgadas.';
$string['setservers'] = 'Configurar servidores';
$string['setservers_help'] = 'Esta es la lista de servidores que serán actualizados cuando se modifiquen los datos en el caché. Generalmente es el nombre calificado completamente de cada servidor en el lote (\'\'pool\'). **Debe** de incluir al servidor enlistado arriba en "Servidores", aun si tuviera un \'\'hostname\'\' diferente.
Los servidores deberían estar definidos de a uno por línea  y consistir en una dirección del servidor y opcionalmente un puerto.
Si no se proporciona un puerto, entonces se usa el puerto por defecto (11211).

Por ejemplo:
<pre>
server.url.com
direccionIP:puerto
</pre>';
$string['testservers'] = 'Servidores de prueba';
$string['testservers_desc'] = 'Una o más cadenas de texto para conexión usada para probar servidores memcache. Si se ha especificado un servidor de prueba, entonces puede probarse el desempeño de memcache empleando la página de desempeño del caché en el bloque de administración.
Como ejemplo: 127.0.0.1:11211';
