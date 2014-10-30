<h1> Analyzing Dark Chocolate Ingredient Preferences</h1>

<?php 	
	foreach ($allChocolate as $chocolate){
		$myChocolate = array();
		$myChocolate = json_decode(json_encode($chocolate), true);
		echo $myChocolate['ChocolateType'] . " is in the system";
		if (isset($myChocolate['Preference'])) {echo " and adds " . $myChocolate['Preference'] . " to the chocolate's rating";}
	echo ". <a href='" . URL::action('ChocolateController@destroy', $myChocolate) ."'>Delete</a> <a href='" . URL::action('ChocolateController@upvotePreference', $myChocolate) ."'>Add +1 Preference</a> </br>";
	}
	//echo "Add a type of Dark Chocolate: " URL::action('ChocolateController@create', $newChocolate);
echo '	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#button").click(function(e){
			var inputvalue = $("#input").val();
			window.location.replace("'. URL::current() .'/create/"+inputvalue);
		});
	});
	</script>
	<input type="text" id="input">
	<button type="button" id="button">Submit New Chocolate</button>';
	
