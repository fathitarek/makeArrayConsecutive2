<?php
function makeArrayConsecutive2($statues) {
$count = 0;
	    for($i=min($statues); $i<max($statues); $i++){
	        if(!in_array($i, $statues)){
	            $count++;
	        }
	    }
	    return $count;
 
}