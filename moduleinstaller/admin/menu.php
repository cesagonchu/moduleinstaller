<?php

defined("XOOPS_ROOT_PATH") or die("XOOPS root path not defined");

$dirname = basename(dirname(dirname(__FILE__)));
$module_handler = xoops_gethandler('module');
$module = $module_handler->getByDirname($dirname);
$pathIcon32 = $module->getInfo('icons32');

//xoops_loadLanguage('admin', $dirname);

$adminmenu = array();

$i = 1;
$adminmenu[$i]["title"] = _MI_INSTALLER_MENU_00;
$adminmenu[$i]["link"] = 'admin/index.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/home.png';
$i++;
$adminmenu[$i]["title"] = _MI_INSTALLER_MENU_01;
// $adminmenu[$i]["link"] = 'admin/page_moduleinstaller.php';
$adminmenu[$i]["link"] = 'admin/install.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/add.png';
$i++;
$adminmenu[$i]["title"] = _MI_INSTALLER_MENU_02;
$adminmenu[$i]["link"] = 'admin/uninstall.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/delete.png';
$i++;
$adminmenu[$i]["title"] = _MI_INSTALLER_ADMIN_ABOUT;
$adminmenu[$i]["link"] = 'admin/about.php';
$adminmenu[$i]["icon"] = $pathIcon32.'/about.png';
