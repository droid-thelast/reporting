<?php
session_start();

//include 'conn.php';
include "header.php";


?>
	<?php
		if (!isset($_SESSION['usrname'])) { ?>
			
			<div class="row" style="padding-top: 15px;">
			  <div class="medium-4 columns" style="padding-right: 10px;">
					<div class="card" style="width: 300px;">
					  <div class="card-divider">
					    <h4>I'm featured</h4>
					  </div>
					  <div class="card-section">
					    <p>This card makes use of the card-divider element.</p>
					  </div>
					</div>
			  </div>

			  <div class="medium-4 columns" style="padding-right: 10px;">
			  	<div class="card" style="width: 300px;">
				  <div class="card-divider">
				    <h4>I'm featured</h4>
				  </div>
				  <div class="card-section">
				    <p>This card makes use of the card-divider element.</p>
				  </div>
				</div>
			  </div>

            <div class="medium-4 columns" style="padding-right: 10px;">
                <div class="card" style="width: 300px;">
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