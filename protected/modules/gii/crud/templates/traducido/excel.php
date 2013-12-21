<table>
	<thead>
		<tr>
		<?php
			$count = 0;
			foreach($this->tableSchema->columns as $column)
			{
				$count +=1;
				echo "<th><?php echo CHtml::encode(\$data->getAttributeLabel('{$column->name}')); ?></th>";
			}
		?>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php
			foreach(echo " <?php echo \$model ?>" as $data)
			{
				echo "<td><?php echo CHtml::encode(\$data->{$column->name}); ?></td>";
			}
		?>
		</tr>
	</tbody>
</table>