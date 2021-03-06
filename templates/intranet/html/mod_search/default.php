<?
/**
 * @version		$Id: form.php 1294 2011-05-16 22:57:57Z johanjanssens $
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Searcg
 * @copyright	Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		http://www.nooku.org
 */

defined('KOOWA') or die('Restricted access'); ?>

<form action="<?= JRoute::_('index.php?option=com_search'); ?>" method="get">
	<div class="search input-append">
		<input name="term" id="mod_search_term" maxlength="<?= $maxlength ?>" type="text" placeholder="Search" /><input type="submit" value="Search" class="btn btn-primary"/>
	</div>
	<input type="hidden" name="Itemid" value="<?php echo $itemid; ?>" />
</form>

<?= @service('com://site/search.model.results')->get('term') ?>