<?php
 
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'oxcom-omc',
    'title'       => 'OXID Modul Connector',
    'description' => array(
        'de' => 'Installierte OXID-Module verwalten und neue Module finden',
        'en' => 'Manage installed OXID modules and find new ones',
    ),
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => 'OXID Community',
    'url'         => 'https://github.com/OXIDprojects/OXID-Modul-Connector',
    'extend'      => array(
    ),
    'files'       => array(
        'omc_main'     => 'oxcom/oxcom-omc/controllers/admin/omc_main.php',
        'omc_helper'   => 'oxcom/oxcom-omc/core/omc_helper.php',
    ),
    'templates'   => array(
        'omc_main.tpl'     => 'oxcom/oxcom-omc/views/admin/tpl/omc_main.tpl',
    ),
    'blocks'      => array(
        array(
            'template' => 'headitem.tpl',
            'block' => 'admin_headitem_incjs',
            'file' => '/blocks/admin_headitem_incjs.tpl'
        ),
        array(
            'template' => 'headitem.tpl',
            'block' => 'admin_headitem_js',
            'file' => '/blocks/admin_headitem_js.tpl'
        ),
        array(
            'template' => 'headitem.tpl',
            'block' => 'admin_headitem_inccss',
            'file' => '/blocks/admin_headitem_inccss.tpl'
        ),
    ),
    'events'      => array(
    ),
    'settings'    => array(
        array('group' => 'settings', 'name' => 'omccookbookurl', 'type' => 'aarr',  'value' => array('omc' => 'https://github.com/OXIDprojects/OXID-Modul-Connector/archive/recipes.zip')),
        array('group' => 'settings', 'name' => 'omcautoupdate', 'type' => 'bool',  'value' => false),
        array('group' => 'settings', 'name' => 'omcenableinst', 'type' => 'bool',  'value' => true),
        array('group' => 'settings', 'name' => 'omccheckactive', 'type' => 'bool',  'value' => false),
    )
);
?>
