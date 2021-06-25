<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 */
defined('_JEXEC') or die('Access Deny');
jimport( 'joomla.plugin.plugin' );

class plgSystemPlugintext extends JPlugin
{
   
    public function __construct(&$subject, $config)
    {
        parent::__construct($subject, $config);
    }

    public function onBeforeCompileHead()
    {
      
        $app = JFactory::getApplication();
        $document = JFactory::getDocument();
        $heading_text = $this->params->get('heading_text', 1);
        if ($app->isAdmin()) {

            $document->addScriptDeclaration("jQuery.noConflict();  
        jQuery(document).ready(function(){
               
             var heading_text = '$heading_text';
             jQuery('.page-title').text(heading_text);
            }); 
       
        ");
            return;
        }

    }

}
