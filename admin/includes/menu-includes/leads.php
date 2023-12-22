<h2>Leads<hr></h2>   
<?php $counter = 1;
    global $wpdb;
	$table_name = $wpdb->prefix . 'cost_estimation_leads';

	$results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY date_and_time DESC");

	if ($results) {
		?>

		<table id="emailListTable">
			<thead>
				<tr>
					<th>Sr. No.</th>
					<th>Email</th>
					<th>Date and Time</th>
					<th>Selected Services</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Loop through the results and output the data
				foreach ($results as $row) {
					?>
				
					<tr>
						<td><?php echo $counter ?></td>
						<td><?php echo $row->email; ?></td>
							<td><?php echo $row->date_and_time; ?></td>
							<td>	<button id="open-popup" class="open-popup button btn-sett" serviceid="<?php echo $row->id; ?>">View Details</button>
					<div class="popup custom-popup<?php echo $row->id; ?>" id="custom-popup" serviceIdPopup="<?php echo $row->id; ?>">
        <div class="popup-content">
            <span class="close close-popup<?php echo $row->id; ?>" id="close-popup" serviceidPopupClose="<?php echo $row->id; ?>">&times;</span>
            <h2>Selected Services</h2>
         <?php echo $row->selected_Services;?>
        </div>
    </div>


</td>
					</tr>
				
					<?php
					
					 $counter++;
				}
				?>
			</tbody>
			
		</table>


		<?php
	} else {
		echo 'No data found.';
	}?>
  <script>
jQuery(document).ready(function($) {
	 var dataTable = $('#emailListTable').DataTable();

    $('#emailListTable').on('click', '.open-popup', function() {
        var servicesid = $(this).attr('serviceid');
        console.log(servicesid);
        var customPopup = $('.custom-popup' + servicesid);
		
        customPopup.css('display', 'block');
		  $('#emailListTable').on('click', '.close-popup'+servicesid, function() {
        customPopup.css('display', 'none');
    });
    });

  
	
// 	$(".open-popup").click(function() {
// 	let servicesid=$(this).attr("serviceid");			
// 		console.log(servicesid);
//     var closeButton = $('.close-popup'+servicesid);
//     var customPopup = $('.custom-popup'+servicesid);
//     customPopup.css('display', 'block');
//     closeButton.click(function() {
//         customPopup.css('display', 'none'); });
// 		});
//             $('#emailListTable').DataTable();
	
        });
    </script>