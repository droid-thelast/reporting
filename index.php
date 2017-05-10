<?php
session_start();

//include 'conn.php';
include "header.php";

?>
	<?php
		if (!isset($_SESSION['usrname'])) { ?>

			<div class="row" style="padding-top: 15px;">
			  <div class="medium-4 columns" style="padding-right: 10px;">
					<div class="card">
					  <div class="card-divider">
					    <?php 

                         $sql = "SELECT `branch` FROM `login` WHERE `branch` = `$branch`";
                         $result = $conn->query($sql);

                         $fetch = $result->fetch_assoc();

                         if ($result->num_rows > 0) {
                        echo "<h1>BRANCH :</h1> <br>";
                        // output data of each row
                        while($row = $result->$fetch) {
                            echo "<h2>" .$row['branch'] ."</h2>";
                        }
                         ?>
					  </div>
					  <div class="card-section">
					    <p>This card makes use of the card-divider element.</p>
					  </div>
					</div>
			  </div>

			  <div class="medium-4 columns" style="padding-right: 10px;">
			  	<div class="card">
				  <div class="card-divider">
				    <h4>I'm featured</h4>
				  </div>
				  <div class="card-section">
				    <p>This card makes use of the card-divider element.</p>
				  </div>
				</div>
			  </div>

            <div class="medium-4 columns" style="padding-right: 10px;">
                <div class="card">
                    <div class="card-divider">
                        <h4>I'm featured</h4>
                    </div>
                    <div class="card-section">
                        <p>This card makes use of the card-divider element.</p>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="medium-6 medium-offset-2 column">
                    <form method="POST" action="sales.php">
                        <fieldset>
                            <legend>DAILY SALES</legend>
                            <label>PHONES<br>
                                <input type="text" name="phones"  required pattern="number">
                            </label><br>
                            <label>ACCESSORIES<br>
                                <input type="text" name="acc"  required pattern="number">
                            </label><br>
                            <label>SIMEX<br>
                                <input type="text" name="simex"  required pattern="number">
                            </label><br>
                            <label>CAFETERIA<br>
                                <input type="text" name="cafe"  required pattern="number">
                            </label><br>
                            <label>REPAIR<br>
                                <input type="text" name="repair"  required pattern="number">
                            </label><br>
                            <label>DAYS TOTAL<br>
                                <input type="text" name="dtotal"  required pattern="number">
                            </label><br>
                            <label>CASHBANKED<br>
                                <input type="text" name="cashbank"  required pattern="number">
                            </label><br>
                            <label>CASH TO MPESA<br>
                                <input type="text" name="cashmpesa"  required pattern="number">
                            </label><br>
                            <label>PDQ<br>
                                <input type="text" name="pdq"  required pattern="number">
                            </label><br>
                            <label>LIPA NA MPESA<br>
                                <input type="text" name="lnm"  required pattern="number">
                            </label><br>
                            <label>CASH PURCHASE<br>
                                <input type="text" name="cashpurchase"  required pattern="number">
                            </label><br>
                            <label>CLIENT CASH<br>
                                <input type="text" name="cashclient"  required pattern="number">
                            </label><br>
                            <label>CREDIT SALES<br>
                                <input type="text" name="salescredit"  required pattern="number">
                            </label><br>
                            <label>RANDOM<br>
                                <input type="text" name="randomother"  required pattern="number">
                            </label><br>
                            <label>DAYS TOTAL<br>
                                <input type="text" name="daystotal"  required pattern="number">
                            </label><br>
                            <label>VARIANCE<br>
                                <input type="text" name="dvar"  required pattern="number">
                            </label><br>
                            <label>FEEDBACK<br>
                                <input type="text" name="feedback">
                            </label><br>
                            <label>
                                <input type="submit" class="button" name="submit" value="submit">
                            </label><br>
                        </fieldset>
                    </form>
				</div>
            </div>

		<?php
	} else {

            ?>
            <div class="medium-6 medium-offset-3 column" style="padding-top: 2%;">
            <div class="callout callout-hover-reveal medium-12" data-callout-hover-reveal style="text-align: center;">
                <div class="callout-body">
                    <h2>NOT A MEMBER YET? </h2>
                </div>
                <div class="callout-footer">
                    <img src="img/minimal.jpg" alt="" style="text-align: center"><br>
                    <h4 style="font-size: 1.5em;"><a data-open="login_register">Login/Register</a></h4>
                </div>
            </div>
            </div>
            <?php
        }
?>



<?php
	include_once "footer.php";
?>
