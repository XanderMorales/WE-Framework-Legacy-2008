<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2008 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2008 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/lgpl.txt	LGPL
 * @version    1.6.0, 2008-02-14
 */

/** Error reporting */
error_reporting(E_ALL);

// List of tests
$aTests = array(
	  '01simple.php'
	, '02types.php'
	, '03formulas.php'
	, '04printing.php'
	, '05featuredemo.php'
	, '06largescale.php'
	, '07reader.php'
	, '08conditionalformatting.php'
	, '09pagebreaks.php'
	, '10autofilter.php'
	, '11documentsecurity.php'
	, '12serializedfileformat.php'
	, '13calculation.php'
	, '14excel5.php'
	, '15datavalidation.php'
	, '16csv.php'
	, '17html.php'
	, '18extendedcalculation.php'
	, '19namedrange.php'
);

// First, clear all results
foreach ($aTests as $sTest) {
	@unlink( str_replace('.php', '.xls', 	$sTest) );
	@unlink( str_replace('.php', '.xlsx', 	$sTest) );
	@unlink( str_replace('.php', '.phpxl',	$sTest) );
	@unlink( str_replace('.php', '.csv',	$sTest) );
	@unlink( str_replace('.php', '.htm',	$sTest) );
}

// Run all tests
foreach ($aTests as $sTest) {
	echo '============== TEST ==============' . "\r\n";
	echo 'Test name: ' . $sTest . "\r\n";
	echo "\r\n";
	echo shell_exec('php ' . $sTest);
	echo "\r\n";
	echo "\r\n";
}
