<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   NC BBCode Widgets
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2015
 * @website	  https://www.noltecomputer.com
 * @license   <marcel.nolte@noltecomputer.de> wrote this file. As long as you retain this notice you
 *            can do whatever you want with this stuff. If we meet some day, and you think this stuff 
 *            is worth it, you can buy me a beer in return. Meanwhile you can provide a link to my
 *            homepage, if you want, or send me a postcard. Be creative! Marcel Mathias Nolte
 */


/**
 * Form fields
 */
$GLOBALS['TL_FFL']['bbcode'] = 'FormNcBBCodeEditor';

/**
 * Backend form widgets
 */
$GLOBALS['BE_FFL']['bbcode'] = 'NcBBCodeEditorWidget';

/**
 * Javascript
 */
$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/nc_bbcode_widget/assets/jquery.bbcode.js'; 
$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/nc_bbcode_widget/assets/default.js'; 

/**
 * Stylesheets
 */
$GLOBALS['TL_CSS'][] = 'system/modules/nc_bbcode_widget/assets/default.css'; 