<table>
	<thead>
		<tr>
		<?php
			foreach($this->tableSchema->columns as $column)
			{
				echo "<th><?php echo CHtml::encode(\$data->getAttributeLabel('{$column->name}')); ?></th>";
			}
		?>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach(echo " <?php echo \$model ?>" as $data)
			{
				//foreach($this->tableSchema->columns as $column)
				//{
					echo "<td><?php echo CHtml::encode(\$data->{$column->name}); ?></td>";
				//}
			}
		?>
	</tbody>
	<tfoot>
	</tfoot>
</table>
