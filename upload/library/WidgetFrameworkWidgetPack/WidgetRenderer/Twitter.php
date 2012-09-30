<?php

class WidgetFrameworkWidgetPack_WidgetRenderer_Twitter extends WidgetFramework_WidgetRenderer
{
    protected function _getConfiguration()
    {
        return array(
            'name' => 'Twitter',
            'options' => array(
                'template' => XenForo_Input::STRING,
            ),
            'useWrapper' => false,
        );
    }

    protected function _getOptionsTemplate()
    {
        return 'wfwp_sidebar_twitter_options';
    }

    protected function _getRenderTemplate(array $widget, $positionCode, array $params)
    {
        return 'wfwp_sidebar_twitter';
    }

    protected function _render(array $widget, $positionCode, array $params, XenForo_Template_Abstract $renderTemplateObject)
    {
        $renderTemplateObject->setParam('search', $widget['options']['twitter']);
        $renderTemplateObject->setParam('height', $widget['options']['height']);
        $renderTemplateObject->setParam('scroll', $widget['options']['scroll']);
        $renderTemplateObject->setParam('hashtags', $widget['options']['hashtags']);
        $renderTemplateObject->setParam('avatars', $widget['options']['avatars']);
        $renderTemplateObject->setParam('toptweets', $widget['options']['toptweets']);
        $renderTemplateObject->setParam('timestamps', $widget['options']['timestamps']);
        return $renderTemplateObject->render();
    }
}