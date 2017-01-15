<?php
	// Project:    Web Reference Database (refbase) <http://www.refbase.net>
	// Copyright:  Matthias Steffens <mailto:refbase@extracts.de> and the file's
	//             original author(s).
	//
	//             This code is distributed in the hope that it will be useful,
	//             but WITHOUT ANY WARRANTY. Please see the GNU General Public
	//             License for more details.
	//
	// File:       ./import/import_csa2refbase.php
	// Repository: $HeadURL: http://svn.code.sf.net/p/refbase/code/trunk/import/import_csa2refbase.php $
	// Author(s):  Matthias Steffens <mailto:refbase@extracts.de>
	//
	// Created:    23-Feb-06, 02:35
	// Modified:   $Date: 2007-02-16 17:10:14 -0800 (Fri, 16 Feb 2007) $
	//             $Author: msteffens $
	//             $Revision: 894 $

	// This is an import format file (which must reside within the 'import/' sub-directory of your refbase root directory). It contains a version of the
	// 'importRecords()' function that imports records from 'CSA'-formatted data, i.e. data that were exported from the Cambridge Scientific Abstracts
	// Internet Database Service (http://www.csa.com) in 'full record' format.

	// --------------------------------------------------------------------

	// --- BEGIN IMPORT FORMAT ---

	// Import records from CSA-formatted source data:

	function importRecords($sourceText, $importRecordsRadio, $importRecordNumbersArray)
	{
		// parse CSA format:
		return csaToRefbase($sourceText, $importRecordsRadio, $importRecordNumbersArray); // function 'csaToRefbase()' is defined in 'import.inc.php'
	}

	// --- END IMPORT FORMAT ---

	// --------------------------------------------------------------------
?>
