<?php

class WidgetFrameworkWidgetPack_WidgetRenderer_Facebook extends WidgetFramework_WidgetRenderer
{
    protected function _getConfiguration()
    {
        return array(
            'name' => 'Facebook',
            'options' => array(
                'facebookId' => XenForo_Input::STRING,
            ),
            'useWrapper' => false,
            'useCache' => true,
            'useUserCache' => true,
            'cacheSeconds' => 900, // cache for 15 minutes
        );
    }

    protected function _getOptionsTemplate()
    {
        return 'wfwp_sidebar_facebook_options';
    }

    protected function _getRenderTemplate(array $widget, $positionCode, array $params)
    {
        return 'wfwp_sidebar_facebook';
    }

    protected function _render(array $widget, $positionCode, array $params, XenForo_Template_Abstract $renderTemplateObject)
    {

        $renderTemplateObject->setParam('facebookId', $widget['options']['facebookId']);

        return $renderTemplateObject->render();
    }
}