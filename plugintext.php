<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 */
defined('_JEXEC') or die('Access Deny');
jimport( 'joomla.plugin.plugin' );

class plgSystemplugintext extends JPlugin 
{
public function onBeforeCompileHead()
    {    
        
     $val = $this->params->get('alt-text'); 
     $document = JFactory::getDocument();
     $document->addScriptDeclaration(' window.addEventListener("DOMContentLoaded", function() {
          const ans = document.querySelectorAll("h1,h2").length; 
          for(let i = 0; i < ans; i++) {
              const attachthis =document.querySelectorAll("h1,h2")[i].innerHTML = "'. $val.'" + document.querySelectorAll("h1,h2")[i].innerHTML ;
             }

        }
      );');
       return true;
    
    } 
}

