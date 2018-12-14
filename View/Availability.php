<?php
	echo "<br><form method=\"get\"><div><table class=\"table table-hover\">
			<thead>
				<tr>
					<th scope=\"col\">hour</th>
					<th scope=\"col\">Monday</th>
					<th scope=\"col\">Tuesday</th>
					<th scope=\"col\">Wensday</th>
					<th scope=\"col\">Thursday</th>
					<th scope=\"col\">Friday</th>
					<th scope=\"col\">Saturday</th>
					<th scope=\"col\">Sunday</th>
				</tr>
			<tbody>";
	for($i=0;$i<24;$i++){
		echo "	<tr>
					<th scope=\"row\">".$i.":00</th>";
		for($j=0;$j<7;$j++){
			echo 	"<td>
						<div class=\"input-group\">
							<input name=\"".$j.$i."\" type=\"checkbox\" aria-label=\"Monday\"".checkedtotext($Availability[$i*7+$j]).">
						</div>
					</td>";
		}
	}
	echo '<button  style="margin-top:35px;" value="true"name="update"class="btn btn-default" type="submit">Update</button></div></form>';
	
function checkedtotext($text){
	if($text=="1"){
			return "checked";
	}else return "";
}
?>