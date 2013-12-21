<table class="table table-bordered">
	<thead>
		<tr>
		<?php
			foreach($this->tableSchema->columns as $column)
			{
				echo "<th><?php echo CHtml::encode('{$column->name}'); ?></th>";
			}
		?>
		</tr>
	</thead>
	<tbody>
		<?php echo "<?php"; ?> foreach($model as $data) { ?>
			<tr>
			<?php
				foreach($this->tableSchema->columns as $column)
				{
					echo "<td><?php echo CHtml::encode(\$data->{$column->name}); ?></td>";
				}
			?>
			</tr>			
			<?php echo "<?php"; ?> } ?>
	</tbody>
	<tfoot>
	</tfoot>
</table>
