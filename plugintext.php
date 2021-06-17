<?php

// no direct access
defined('_JEXEC') or die;

// $document = JFactory::getDocument();
// $document->addScriptDeclaration('
        
// ');

class plgContentPluginText extends JPlugin
{
        public function onContentAfterTitle($context, &$article, &$params, $limitstart)
        {
                
                if($this->params->get('alt-text'))
                        return '<h1>'.$this->params->get('alt-text').'</h1>';
                        
                else
                        return "Enter your text here!";
        }
}

?>