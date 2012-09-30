<?php

class WidgetFrameworkWidgetPack_WidgeWidgetRenderer_Search extends WidgetFramework_WidgetRenderer
{
    protected function _getConfiguration()
    {
        return array(
            'name' => 'Search',
            'options' => array(
                'template' => XenForo_Input::STRING,
            ),
            'useWrapper' => false,
        );
    }

    protected function _getOptionsTemplate()
    {
        return '';
    }

    protected function _getRenderTemplate(array $widget, $positionCode, array $params)
    {
        return 'wfwp_sidebar_search';
    }

    protected function _render(array $widget, $positionCode, array $params, XenForo_Template_Abstract $renderTemplateObject)
    {
        return $renderTemplateObject->render();
    }
}