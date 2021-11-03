<?php

include 'views/_patrials/header.php';

?>


		<div class="container col-5" style="margin-top: 50px">


			<?php 
			require './app/controller/calcController.php'
			;?>

		    <!-- Calculator form -->
			
		    <form method="post">
		        <input name="number1" type="text" class="form-control inputField" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="times">Times</option>
		            <option value="divided by">Divided By</option>
		        </select>
		        <input name="number2" type="text" class="form-control inputField" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
		</div>
	</body>
</html>
