<?php
/**
 * @version     $Id: default.php 3046 2011-10-12 18:25:12Z ercanozkaya $
 * @category    Nooku
 * @package     Nooku_Server
 * @subpackage  Settings
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */
defined('KOOWA') or die( 'Restricted access' ); ?>

<?= @helper('behavior.tooltip'); ?>

<style src="media://com_settings/css/settings-default.css" />

<form action="" method="post" class="-koowa-form -koowa-box" >
<?= @helper('tabs.startPane') ?>
<h3><?= @text('System')?></h3>	
<?= @template('default_system', array('settings' => $settings->system)); ?>	

<h3><?= @text('Components')?></h3>	
<? foreach($settings as $name => $setting) : ?>
	<? if($setting->getType() == 'component' && $setting->getPath()) : ?>
	    <?= @template('default_component', array('settings' => $setting)); ?>
	<? endif; ?>
<? endforeach; ?>
<?= @helper('tabs.endPane') ?>
</form>