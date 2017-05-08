<?php
session_start();

//include 'conn.php';
include "header.php";


?>
	<?php
		if (!isset($_SESSION['usrname'])) { ?>
			
			<div class="row">
			  <div class="medium-3 columns" style="padding-right: 10px;">
					<div class="card" style="width: 300px;">
					  <div class="card-divider">
					    <h4>I'm featured</h4>
					  </div>
					  <div class="card-section">
					    <p>This card makes use of the card-divider element.</p>
					  </div>
					</div>
			  </div>

			  <div class="medium-9 columns" style="padding-right: 10px;">
			  	<div class="card" style="width: 500px;">
				  <div class="card-divider">
				    <h4>I'm featured</h4>
				  </div>
				  <div class="card-section">
				    <p>This card makes use of the card-divider element.</p>
				  </div>
				</div>
			  </div>
			</div>
			
		<?php
	}

	?>

<?php
	include_once "footer.php";
?>	