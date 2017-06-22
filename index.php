<?php 
$random2=rand(0,365); // 0 to max size to one of total line in the file versets**.txt
$versets=array();
$versets = file("versetsFR.txt");
 ?>


<div ><strong>UN VERSET </strong></div>
<div >
	<strong><?= $versets["$random2"] ;?></strong>

</div>
