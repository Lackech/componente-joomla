<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_congreso
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>

<form action="index.php?option=com_congreso&view=congresocats" method="post" id="adminForm" name="adminForm">

	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('Número'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>

			<th width="5%">
				<?php echo JText::_('ID') ;?>
			</th>
			<th width="17%">
				<?php echo JText::_('Nombre') ;?>
			</th>
			<th width="70%">
				<?php echo JText::_('Descripción') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('Publicado'); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) : 
					$link = JRoute::_('index.php?option=com_congreso&task=congresocat.edit&id=' . $row->id);
				?>

					<tr>
						<td>
							<?php echo $this->pagination->getRowOffset($i); ?>
						</td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->catid); ?>
						</td>
						<td>
							<a href="<?php echo $link; ?> " catid= "<?php echo JText::_('Editar'); ?>">
								<?php echo $row->catid; ?>
							</a>
						</td>

						<td>
							<a href="<?php echo $link; ?> " name= "<?php echo JText::_('Editar'); ?>">
								<?php echo $row->name; ?>
							</a>
						</td>
						<td>
							<a href="<?php echo $link; ?> " category= "<?php echo JText::_('Editar'); ?>">
								<?php echo $row->description; ?>
							</a>
						</td>
						


						<td align="center">
							<?php echo JHtml::_('jgrid.published', $row->published, $i, 'congresocats.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<?php echo JHtml::_('form.token'); ?>
	
</form>