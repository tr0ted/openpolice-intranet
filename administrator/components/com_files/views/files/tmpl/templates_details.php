<?php
/**
 * @version     $Id: templates_details.php 1369 2012-01-06 16:38:50Z stiandidriksen $
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Files
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */
defined('KOOWA') or die( 'Restricted access' ); ?>

<script>
window.addEvent('domready', function() {
	document.id('files-canvas').addEvent('click:relay(input.-check-all)', function(e) {
		var value = e.target.checked,
			grid = Files.app.grid,
			nodes = grid.nodes;

		$each(nodes, function(node) {
			if (value && !node.checked) {
				grid.checkNode(node);	
			} else if (!value && node.checked) {
				grid.checkNode(node);
			}
			
		});

	});
})
</script>

<textarea style="display: none" id="details_container">
<div class="manager">
	<table width="100%" cellspacing="0" class="adminlist">
		<thead>
			<tr>
				<th width="10" ><input type="checkbox" class="-check-all" /></th>
				<th></th>
				<th><?= @text('Name'); ?></th>
				<th><?= @text('Dimensions'); ?></th>
				<th><?= @text('Size'); ?></th>
				<th><?= @text('Last Modified'); ?></th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>
</textarea>

<textarea style="display: none" id="details_folder">
	<tr class="files-node files-folder">
		<td width="10">
			<input type="checkbox" class="files-select" value="" />
		</td>
		<td width="10">
		    <img src="media://com_files/images/folder-16.png" width="16" height="16" alt="[%=name%]" border="0" />
		</td>
		<td colspan="4">
			<a href="#" class="navigate">
				[%=name%]
			</a>
		</td>
	</tr>
</textarea>

<textarea style="display: none" id="details_file">
	<tr class="files-node files-file">
		<td width="10">
			<input type="checkbox" class="files-select" value="" />
		</td>
		<td width="10">
		    <img src="media://com_files/images/document-16.png" width="16" height="16" alt="[%=name%]" border="0" />
		</td>
		<td>
			<a href="#" class="navigate">
				[%=name%]
			</a>
		</td>
		<td></td>
		<td align="center">
			[%=size.humanize()%]
		</td>
		<td align="center">
			[%=getModifiedDate(true)%]
		</td>
	</tr>
</textarea>

<textarea style="display: none" id="details_image">
	<tr class="files-node files-image">
		<td width="10">
			<input type="checkbox" class="files-select" value="" />
		</td>
		<td width="10">
		    <img src="media://com_files/images/image-16.png" width="16" height="16" alt="[%=name%]" border="0" />
		</td>
		<td>
			<a href="#" class="navigate">
				[%=name%]
			</a>
		</td>
		<td align="center">
			[%=metadata.image.width%] x [%=metadata.image.height%]
		</td>
		<td align="center">
			[%=size.humanize()%]
		</td>
		<td align="center">
			[%=getModifiedDate(true)%]
		</td>
	</tr>
</textarea>