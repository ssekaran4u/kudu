<?php
/**
 * Kudu
 *
 * A simple joomla template
 *
 * This content is released under the GNU General Public License version 2 or later
 *
 * Copyright (C) 2015  Krishnan
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; version 2
 * of the License or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @package     Joomla
 * @subpackage  Template.Kudu
 * @author      Krishnan <krishnan57474@gmail.com>
 * @copyright   Copyright (c) 2015, Krishnan
 * @license     GNU General Public License version 2 or later
 * @link        https://github.com/krishnan57474
 * @since       Version 2.0.0
 */
defined('_JEXEC') or die;

/**
 * Kudu template helper
 *
 * @package     Joomla.Site
 * @subpackage  Template.Kudu
 * @author      Krishnan <krishnan57474@gmail.com>
 * @link        https://github.com/krishnan57474
 * @since       Version 2.0.0
 */
class Kudu
{
    /**
     * Load document head
     *
     * @return  void
     */
    public static function loadHead()
    {
        echo '<jdoc:include type="head" />';
    }

    /**
     * Load document body
     *
     * @return  void
     */
    public static function loadBody()
    {
        echo '<jdoc:include type="message" /><jdoc:include type="component" />';
    }

    /**
     * Load position specific modules
     *
     * @param   string  $position_name
     *
     * @return  void
     */
    public static function loadModules($position_name)
    {
        echo '<jdoc:include type="modules" name="' . $position_name . '" />';
    }

    /**
     * Add styles to document
     *
     * @param   array   $styles
     *
     * @return  void
     */
    public static function addCss($styles)
    {
        $document = JFactory::getDocument();

        foreach ($styles as $style)
        {
            $document->addStyleSheet($style);
        }
    }

    /**
     * Add scripts to document
     *
     * @param   array   $scripts
     *
     * @return  void
     */
    public static function addJs($scripts)
    {
        $document = JFactory::getDocument();

        foreach ($scripts as $script)
        {
            $document->addScript($script);
        }
    }
}