<?php
/** Haitian (Kreyòl ayisyen)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'fr';

$namespaceNames = array(
	NS_MEDIA            => 'Medya',
	NS_SPECIAL          => 'Espesyal',
	NS_TALK             => 'Diskite',
	NS_USER             => 'Itilizatè',
	NS_USER_TALK        => 'Diskisyon_Itilizatè',
	NS_PROJECT_TALK     => 'Diskisyon_$1',
	NS_FILE             => 'Fichye',
	NS_FILE_TALK        => 'Diskisyon_Fichye',
	NS_MEDIAWIKI        => 'MedyaWiki',
	NS_MEDIAWIKI_TALK   => 'Diskisyon_MedyaWiki',
	NS_TEMPLATE         => 'Modèl',
	NS_TEMPLATE_TALK    => 'Diskisyon_Modèl',
	NS_HELP             => 'Èd',
	NS_HELP_TALK        => 'Diskisyon_Èd',
	NS_CATEGORY         => 'Kategori',
	NS_CATEGORY_TALK    => 'Diskisyon_Kategori',
);

$namespaceAliases = array(
	'Imaj'           => NS_USER,
	'Diskisyon_Imaj' => NS_USER_TALK,
);

// Remove French aliases
$namespaceGenderAliases = array();

$specialPageAliases = array(
	'Activeusers'               => array( 'ItilizatèAktif' ),
	'Allmessages'               => array( 'ToutMesaj' ),
	'Allpages'                  => array( 'ToutPaj' ),
	'Ancientpages'              => array( 'PajAnsyen' ),
	'Badtitle'                  => array( 'MovèTit' ),
	'Blankpage'                 => array( 'PajVid' ),
	'Block'                     => array( 'Bloke', 'BlokeIP', 'BlokeItilizatè' ),
	'Booksources'               => array( 'SousLiv' ),
	'BrokenRedirects'           => array( 'RedireksyonKase' ),
	'Categories'                => array( 'Kategori' ),
	'ChangePassword'            => array( 'ChanjeMopas', 'ResètMopas' ),
	'ComparePages'              => array( 'KonparePaj' ),
	'Confirmemail'              => array( 'VerifyeImèl' ),
	'Contributions'             => array( 'Kontribisyon', 'Kontrib' ),
	'CreateAccount'             => array( 'KreyeKont' ),
	'Deadendpages'              => array( 'PajEnpas' ),
	'DeletedContributions'      => array( 'SiprimeKontribisyon' ),
	'DoubleRedirects'           => array( 'RedireksyonDoub' ),
	'Emailuser'                 => array( 'ImèlItilizatè' ),
	'ExpandTemplates'           => array( 'EtannModèl' ),
	'Export'                    => array( 'Ekspòte' ),
	'Fewestrevisions'           => array( 'MwensRevizyon' ),
	'FileDuplicateSearch'       => array( 'ChacheFichyeDoub' ),
	'Filepath'                  => array( 'ChemenFichye' ),
	'Import'                    => array( 'Enpòte' ),
	'Invalidateemail'           => array( 'EnvalideImèl' ),
	'BlockList'                 => array( 'LisBloke', 'LisIPBloke' ),
	'LinkSearch'                => array( 'ChacheLyen' ),
	'Listadmins'                => array( 'LisAdmin' ),
	'Listbots'                  => array( 'LisWobo' ),
	'Listfiles'                 => array( 'LisFichye', 'Lis_Fichye', 'LisImaj' ),
	'Listgrouprights'           => array( 'LisDwaGwoup' ),
	'Listredirects'             => array( 'LisRedireksyon' ),
	'Listusers'                 => array( 'LisItilizatè' ),
	'Lockdb'                    => array( 'KadnaseDB' ),
	'Log'                       => array( 'Jounal' ),
	'Lonelypages'               => array( 'PajPoukontli', 'PajOfelen' ),
	'Longpages'                 => array( 'PajLong' ),
	'MergeHistory'              => array( 'FizyoneIstwa' ),
	'MIMEsearch'                => array( 'ChacheMIME' ),
	'Mostcategories'            => array( 'PlisKategori' ),
	'Mostimages'                => array( 'ImajPlisLye', 'PlisFichye', 'PlisImaj' ),
	'Mostlinked'                => array( 'PajPlisLye', 'PlisLye' ),
	'Mostlinkedcategories'      => array( 'KategoriPlisLye', 'KategoriPlisItilize' ),
	'Mostlinkedtemplates'       => array( 'ModèlPlisLye', 'ModèlPlisItilize' ),
	'Mostrevisions'             => array( 'PlisRevizyon' ),
	'Movepage'                  => array( 'DeplasePaj' ),
	'Mycontributions'           => array( 'KontribisyonM' ),
	'Mypage'                    => array( 'PajMwen' ),
	'Mytalk'                    => array( 'DiskisyonM' ),
	'Myuploads'                 => array( 'ChajmanM' ),
	'Newimages'                 => array( 'NouvoImaj' ),
	'Newpages'                  => array( 'PajNouvo' ),
	'PasswordReset'             => array( 'ResètMopas2' ),
	'PermanentLink'             => array( 'LyenPouToutTan' ),
	'Popularpages'              => array( 'PajPopilè' ),
	'Preferences'               => array( 'Preferans' ),
	'Prefixindex'               => array( 'EndèksPrefiks' ),
	'Protectedpages'            => array( 'PajPwoteje' ),
	'Protectedtitles'           => array( 'TitPwoteje' ),
	'Randompage'                => array( 'Oaza', 'PajOaza' ),
	'RandomInCategory'          => array( 'OazaNanKategori' ),
	'Randomredirect'            => array( 'RedireksyonOaza' ),
	'Recentchanges'             => array( 'ChanjmanResan' ),
	'Recentchangeslinked'       => array( 'LyenChanjmanResan', 'ChanjmanAk' ),
	'Revisiondelete'            => array( 'RevizyonSiprime' ),
	'Search'                    => array( 'Chache', 'Fouye' ),
	'Shortpages'                => array( 'PajKout' ),
	'Specialpages'              => array( 'PajEspesyal' ),
	'Statistics'                => array( 'Estatistik' ),
	'Tags'                      => array( 'Etikèt' ),
	'Unblock'                   => array( 'Debloke' ),
	'Uncategorizedcategories'   => array( 'KategoriPakategorize' ),
	'Uncategorizedimages'       => array( 'ImajPakategorize' ),
	'Uncategorizedpages'        => array( 'PajPakategorize' ),
	'Uncategorizedtemplates'    => array( 'ModèlPakategorize' ),
	'Undelete'                  => array( 'Restore' ),
	'Unlockdb'                  => array( 'DekadnaseDB' ),
	'Unusedcategories'          => array( 'KategoriPaItilize' ),
	'Unusedimages'              => array( 'FichyePaItilize', 'ImajPaItilize' ),
	'Unusedtemplates'           => array( 'ModèlVyèj' ),
	'Unwatchedpages'            => array( 'PajPaSiveye' ),
	'Upload'                    => array( 'Chaje' ),
	'UploadStash'               => array( 'ChajePil' ),
	'Userlogin'                 => array( 'Koneksyon' ),
	'Userlogout'                => array( 'Dekoneksyon' ),
	'Userrights'                => array( 'DwaItilizatè', 'FèSysop', 'FèBot' ),
	'Version'                   => array( 'Vèsyon' ),
	'Wantedcategories'          => array( 'KategoriNouBezwen' ),
	'Wantedfiles'               => array( 'FichyeNouBezwen' ),
	'Wantedpages'               => array( 'PajNouBezwen', 'LyenKase' ),
	'Wantedtemplates'           => array( 'ModèlNouBezwen' ),
	'Watchlist'                 => array( 'LisSwivi' ),
	'Whatlinkshere'             => array( 'SakLye' ),
	'Withoutinterwiki'          => array( 'SanEntèwiki' ),
);

$linkTrail = '/^([a-zàèòÀÈÒ]+)(.*)$/sDu';

