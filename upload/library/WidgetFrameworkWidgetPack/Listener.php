<?php

class WidgetFrameworkWidgetPack_Listener
{
    public static function widget_framework_ready(array &$renderers)
    {
        $renderers[] = 'WidgetFrameworkWidgetPack_WidgetRenderer_Search';
        $renderers[] = 'WidgetFrameworkWidgetPack_WidgetRenderer_Twitter';
        $renderers[] = 'WidgetFrameworkWidgetPack_WidgetRenderer_Facebook';
    }
}