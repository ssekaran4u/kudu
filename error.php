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
 * @package     Joomla.Site
 * @subpackage  Template.Kudu
 * @author      Krishnan <krishnan57474@gmail.com>
 * @copyright   Copyright (c) 2015, Krishnan
 * @license     GNU General Public License version 2 or later
 * @link        https://github.com/krishnan57474
 * @since       Version 2.0.0
 */
defined('_JEXEC') or die;

$app = JFactory::getApplication();

if (!isset($this->error))
{
    $this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->error->getCode(); ?> | <?php echo $app->get('sitename'); ?></title>
    <style>
        body {
            margin: 1%;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 14px;
            line-height: 1.42857;
            color: #333;
            background-color: #FFF;
            background: #F3F3F3;
        }

        .error {
            margin: 0 auto;
            max-width: 400px;
            background: #fff;
            border: 1px solid #EEE;
        }

        .error .header {
            background: #D5D5D5;
            padding: 10px 20px;
            text-align: center;
        }

        .error h1 {
            font-size: 6em;
            line-height: 1em;
            text-shadow: 1px 1px 1px #FFF;
            margin: 0 auto 10px;
        }

        .error p {
            margin: 0 auto 10px;
        }

        .error .content {
            padding: 10px 15px;
        }

        li {
            margin: 0 auto 5px;
        }

        .error .info {
            background: #EEE;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="error">
        <div class="header">
            <h1><?php echo $this->error->getCode();?></h1>
            <p><?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <div class="content">
            <p><strong><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></strong></p>
            <ol>
                <li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
                <li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
                <li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
                <li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
                <li><?php echo JText::_('JERROR_LAYOUT_REQUESTED_RESOURCE_WAS_NOT_FOUND'); ?></li>
                <li><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></li>
            </ol>
            <p><strong><?php echo JText::_('JERROR_LAYOUT_PLEASE_TRY_ONE_OF_THE_FOLLOWING_PAGES'); ?></strong></p>
            <ul>
                <li><a href="<?php echo $this->baseurl; ?>/index.php" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></li>
            </ul>
            <p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
            <p class="info"><?php echo $this->error->getMessage(); ?></p>
        </div>
    </div>
</body>
</html>