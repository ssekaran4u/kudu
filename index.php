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

require_once 'lib/kudu.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        Kudu::addCss(array(
            '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css',
            'templates/' . $this->template . '/css/style.css'
        ));

        Kudu::loadHead();
    ?>
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>

    <?php if ($this->countModules('top')): ?>
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><?php Kudu::loadModules('top'); ?></div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><?php Kudu::loadBody(); ?></div>
            </div>
        </div>
    </div>

    <?php if ($this->countModules('footer')): ?>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><?php Kudu::loadModules('footer'); ?></div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <script src="templates/<?php echo $this->template; ?>/js/script.js"></script>
</body>
</html>