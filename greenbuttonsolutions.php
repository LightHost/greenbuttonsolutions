<?php
// no direct access
defined('_JEXEC') or die;

class plgSystemGreenbuttonsolutions extends JPlugin
{
    public function onBeforeCompileHead()
    {
        $app = JFactory::getApplication();
        $menu = $app->getMenu();
        $lang = JFactory::getLanguage();

        if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
            $dataapp = $this->params->get('dataapp');
            $javascript = '<script src="http://greenbuttonsolutions.com/public/js/m.js" data-app="'. $dataapp .'"></script>';

            $document = JFactory::getDocument();
            $document->addCustomTag($javascript);
        }

    }
}

?>