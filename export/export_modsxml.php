<?php
	// Project:    Web Reference Database (refbase) <http://www.refbase.net>
	// Copyright:  Matthias Steffens <mailto:refbase@extracts.de> and the file's
	//             original author(s).
	//
	//             This code is distributed in the hope that it will be useful,
	//             but WITHOUT ANY WARRANTY. Please see the GNU General Public
	//             License for more details.
	//
	// File:       ./export/export_modsxml.php
	// Repository: $HeadURL: http://svn.code.sf.net/p/refbase/code/trunk/export/export_modsxml.php $
	// Author(s):  Richard Karnesky <mailto:karnesky@gmail.com>
	//
	// Created:    02-Oct-04, 12:00
	// Modified:   $Date: 2007-02-16 17:10:14 -0800 (Fri, 16 Feb 2007) $
	//             $Author: msteffens $
	//             $Revision: 894 $

	// This exports MODS XML. This file must reside in the 'export' directory of the refbase root directory.
	// It uses functions from include file 'modsxml.inc.php' that requires the ActiveLink PHP XML Package,
	// which is available under the GPL from: <http://www.active-link.com/software/>
	
	// --------------------------------------------------------------------

	// --- BEGIN EXPORT FORMAT ---

	// Export found records as MODS XML:
	function exportRecords($result, $rowOffset, $showRows, $exportStylesheet, $displayType)
	{
		// Generate and serve a MODS XML file of ALL records:
		$recordCollection = modsCollection($result); // function 'modsCollection()' is defined in 'modsxml.inc.php'

		return $recordCollection;
	}

	// --- END EXPORT FORMAT ---

	// --------------------------------------------------------------------
?>
