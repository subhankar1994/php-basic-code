<?php
//for example Sum of odd number 1 to 50

$startNum = 1; //Start number
$endNum = 50; // End number

for ($i=$startNum; $i<=$endNum ; $i++) { 
	if ($i%2 !=0) {
		@$sum += $i; //@ used for error control.
	}
}

echo "Sum of odd number ".$startNum." to ".$endNum." is. ".$sum;

?>