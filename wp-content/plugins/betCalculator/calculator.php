<?php 


/**
 
 * @betCAlculator
 
 */
 
/*
 
Plugin Name: Bet Odd Calculator
 
Plugin URI: https://symphonysolution.com
 
Description: A simple calculator plugin for stake and odd betting.
 
Version: 1.0.0
 
Author: Adenola Uthman
 
Author URI: https://www.linkedin.com/in/adenola-uthman-496869154/
 
License: GPLv2 
 
Text Domain: betCalculator
 
*/

define( 'CALC_VERSION', '1.0.0' ) || die('Unauthorized Access');

add_shortcode('bet_odd', 'bet_odd_calc');
function bet_odd_calc() {



		
		?>
		<div class="container">
			<div class="form2">
		<div class="col-lg-4">
				<form action="" method="post">
					<h6>Enter the stake and odd for your bet and the bet calculator will automatically calculate the payout. Add odds for multiple<h6>
						<hr>

				</form>
		</div>
	</div>
</div>
<?php

}
?>