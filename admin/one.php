		<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position_id = '14'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
					<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
			</table>	