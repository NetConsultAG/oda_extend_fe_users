<?php
if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}
t3lib_extMgm::addPageTSConfig('

# ***************************************************************************************
# CONFIGURATION of RTE in table "fe_users", field "tx_odaextendfeusers_ergaenzende_infos"
# ***************************************************************************************

RTE.config.fe_users.tx_odaextendfeusers_ergaenzende_infos {
	hidePStyleItems = H1, H4, H5, H6
	proc.exitHTMLparser_db = 1
	proc.exitHTMLparser_db {
		keepNonMatchedTags = 1
		tags.font.allowedAttribs = color
		tags.font.rmTagIfNoAttrib = 1
		tags.font.nesting = global
  }
}
');
if (TYPO3_MODE=='FE') {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sr_feuser_register']['extendingTCA'][] = 'oda_extend_fe_users';
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['agency']['extendingTCA'][] = 'oda_extend_fe_users';
}
?>