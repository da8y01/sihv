<table class="table table-bordered" border="1">
	<thead>
		<tr>
		<?php
			$count = 0;
			foreach($this->tableSchema->columns as $column)
			{
				$count +=1;
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
			<?php echo "<?php"; ?> };  ?>
		
	</tbody>
</table>