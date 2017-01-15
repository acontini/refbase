<?php
	// Project:    Web Reference Database (refbase) <http://www.refbase.net>
	// Copyright:  Matthias Steffens <mailto:refbase@extracts.de> and the file's
	//             original author(s).
	//
	//             This code is distributed in the hope that it will be useful,
	//             but WITHOUT ANY WARRANTY. Please see the GNU General Public
	//             License for more details.
	//
	// File:       ./import/bibutils/import_end2refbase.php
	// Repository: $HeadURL: http://svn.code.sf.net/p/refbase/code/trunk/import/bibutils/import_end2refbase.php $
	// Author(s):  Matthias Steffens <mailto:refbase@extracts.de>
	//
	// Created:    24-Feb-06, 02:07
	// Modified:   $Date: 2012-02-28 15:17:21 -0800 (Tue, 28 Feb 2012) $
	//             $Author: msteffens $
	//             $Revision: 1342 $

	// This is an import format file (which must reside within the 'import/' sub-directory of your refbase root directory). It contains a version of the
	// 'importRecords()' function that imports records from 'Endnote tagged'-formatted data, i.e. data that were formatted according to the tagged export
	// format used by the commercial bibliographic package 'Endnote' (http://www.endnote.com).
	
	// --------------------------------------------------------------------

	// --- BEGIN IMPORT FORMAT ---

	// Import records from Endnote-formatted source data:

	// Requires the following packages (available under the GPL):
	//    - bibutils <http://www.scripps.edu/~cdputnam/software/bibutils/bibutils.html>

	function importRecords($sourceText, $importRecordsRadio, $importRecordNumbersArray)
	{
		// convert Endnote tagged format to MODS XML format:
		$sourceText = importBibutils($sourceText,"end2xml"); // function 'importBibutils()' is defined in 'execute.inc.php'

		// convert MODS XML format to RIS format:
		$sourceText = importBibutils($sourceText,"xml2ris"); // function 'importBibutils()' is defined in 'execute.inc.php'

		// parse RIS format:
		return risToRefbase($sourceText, $importRecordsRadio, $importRecordNumbersArray); // function 'risToRefbase()' is defined in 'import.inc.php'
	}

	// --- END IMPORT FORMAT ---

	// --------------------------------------------------------------------
?>
