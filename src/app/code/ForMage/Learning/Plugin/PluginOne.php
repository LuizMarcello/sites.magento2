<?php

namespace ForMage\Learning\Plugin;
class PluginOne
{
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        return "Plugin Before Antes | " . $name;
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result . "| Plugin After Depois";
    }
}
