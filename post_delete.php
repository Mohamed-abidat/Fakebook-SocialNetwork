<div id="post" style="
		margin-left: -10px;
		padding: 25px;
		font-size: 16px;
		margin-bottom: 40px;
		display: flex;
		background-color: white;">
	
		<div style="height: 70px;margin-bottom: 20px;">
			<?php 
				error_reporting(-1);
				ini_set('display_errors', 'On');

				$pro_pic 	= $ROW_USER['profile_image'];
				$first 		= $ROW_USER['firstname'][0];
				$last 		= $ROW_USER['lastname'][0];
				$dot = '.';
				if (empty($pro_pic)) {
					echo"<img src='default_profile_image.php?text=$first$dot$last' style='width: 70px; margin-right: 5px;border-radius: 50%;'>";
				}else
				{
					echo"<img src='data:image/jpeg;base64," . base64_encode($pro_pic) . "' style='width: 70px; margin-right: 5px; border-radius: 50%;'/>";
				}						
			?>	
		</div>
	

	<div style="width: 100%;">
			<div style="font-weight: bold; color: #405d9b; margin-top: 20px;margin-bottom: 20px;font-size: 19px">
				<?php
					echo $ROW_USER['firstname'] . " " . $ROW_USER['lastname'];
				?>
			</div>
		<br><br>
		<?php
			if ($ROW['has_image'] == 0) {
				echo'<span style="margin-left: -70px;margin-top: -20px;">' . htmlspecialchars($ROW['post']) . '</span>';
			}else
			{

				$image = $ROW['image'];
				if (!empty($ROW['post'])) 
				{
					echo'<span style="margin-left: -70px;margin-top: 20px;">' . htmlspecialchars($ROW['post']) . '</span>';
					echo "<br><br>";
				}
				echo'<img src="data:image/jpeg;base64,' . base64_encode($image) . '" style="width: 700px; margin-left: -70px;"/>'; 
			} 
		?>
		
		
	</div>
</div>