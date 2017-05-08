<?php
session_start();

//include 'conn.php';
include "header.php";


?>
	<?php
		if (isset($_SESSION['usrname'])) { ?>
			
			<div class="row" style="padding-top: 15px;">
			  <div class="medium-4 columns" style="padding-right: 10px;">
					<div class="card" style="width: 320px;">
					  <div class="card-divider">
					    <h4>I'm featured</h4>
					  </div>
					  <div class="card-section">
					    <p>This card makes use of the card-divider element.</p>
					  </div>
					</div>
			  </div>

			  <div class="medium-4 columns" style="padding-right: 10px;">
			  	<div class="card" style="width: 320px;">
				  <div class="card-divider">
				    <h4>I'm featured</h4>
				  </div>
				  <div class="card-section">
				    <p>This card makes use of the card-divider element.</p>
				  </div>
				</div>
			  </div>

            <div class="medium-4 columns" style="padding-right: 10px;">
                <div class="card" style="width: 320px;">
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
	} else {

            ?>
            <div class="medium-6 medium-offset-3 column" style="padding-top: 2%;">
            <div class="callout callout-hover-reveal medium-12" data-callout-hover-reveal>
                <div class="callout-body">
                    <h2>NOT A MEMBER YET? <a data-open="login_register">Login/Register</a></h2>
                </div>
                <div class="callout-footer">
                    <img src="img/minimal.jpg" alt=""/>
                </div>
            </div>
            </div>
            <?php
        }
?>



<?php
	include_once "footer.php";
?>	