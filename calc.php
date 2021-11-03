<?php

include 'views/_patrials/header.php';
?>
		<div class="container cal-form col-2" >
			<?php require './app/controller/calcController.php';?>

		    <!-- Calculator form -->		
		    <form method="post">
		        <input name="number1" type="number" placeholder="number 1" class="form-control inputField mb-3" />
		        <select name="operation">
		        	<option value="plus">+</option>
		            <option value="minus">-</option>
		            <option value="times">*</option>
		            <option value="divided by">/</option>
		        </select>
		        <input name="number2" type="number" placeholder="number 2" class="form-control inputField mt-3" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary mt-3" />
		    </form>
		</div>
	</body>
</html>
