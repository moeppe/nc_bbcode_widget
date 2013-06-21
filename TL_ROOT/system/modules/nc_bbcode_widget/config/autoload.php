<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   NC BBCode Widgets
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2013
 * @website	  https://www.noltecomputer.com
 * @license   <marcel.nolte@noltecomputer.de> wrote this file. As long as you retain this notice you
 *            can do whatever you want with this stuff. If we meet some day, and you think this stuff 
 *            is worth it, you can buy me a beer in return. Meanwhile you can provide a link to my
 *            homepage, if you want, or send me a postcard. Be creative! Marcel Mathias Nolte
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'NC',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'bbParser'                => 'system/modules/nc_bbcode_widget/assets/bbParser.php',

	// Forms
	'NC\FormNcBBCodeEditor'   => 'system/modules/nc_bbcode_widget/forms/FormNcBBCodeEditor.php',

	// Widgets
	'NC\NcBBCodeEditorWidget' => 'system/modules/nc_bbcode_widget/widgets/NcBBCodeEditorWidget.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'widget_textarea_bbcode'       => 'system/modules/nc_bbcode_widget/templates',
	'form_textarea_bbcode'         => 'system/modules/nc_bbcode_widget/templates',
));
