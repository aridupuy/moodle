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
 * Strings for component 'dbtransfer', language 'es_mx', version '3.11'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Revisando la estructura de la tabla del orígen';
$string['copyingtable'] = 'Copiando tabla {$a}';
$string['copyingtables'] = 'Copiando contenidos de tabla';
$string['creatingtargettables'] = 'Creando las tablas en la BasedeDatos del destino';
$string['dbexport'] = 'Exportación de BasedeDatos';
$string['dbtransfer'] = 'Transferencia de BasedeDatos';
$string['differenttableexception'] = 'La estructura {$a} de tabla no coincide.';
$string['done'] = 'Hecho';
$string['exportschemaexception'] = 'La estructura actual de la BasedeDatos no coincide con todos los archivos install.xml files. <br /> {$a}';
$string['importschemaexception'] = 'La estructura actual de la BasedeDatos no coincide con todos los archivos install.xml files. <br /> {$a}';
$string['importversionmismatchexception'] = 'La versión actual  no coincide con la versión exportada {$a->schemaver}.';
$string['malformedxmlexception'] = 'Se encontro XML malformado, no se puede continuar.';
$string['tablex'] = 'Tabla {$a}:';
$string['unknowntableexception'] = 'Tabla desconocida {$a} encontrada en archivo exportado.';
