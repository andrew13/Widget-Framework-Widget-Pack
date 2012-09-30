<?php

class WidgetFrameworkWidgetPack_Listener
{

    public static function widget_framework_ready(array &$renderers)
    {
        $renderers[] = 'WidgetFrameworkWidgetPack_WidgetRenderer_Search';
    }

}