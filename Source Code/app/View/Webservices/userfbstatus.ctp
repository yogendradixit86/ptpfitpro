<?php
##******************************************************************
##  Project		:		Fitness
##  Done by		:		921
##	Create Date	:		22/03/2014
##  Description :		It is use for User status Post web service.
##	Copyright   :       SynapseIndia
## *****************************************************************

//http://www.sampatti.com/fitnessAaland/webservices/userfbstatus/
if(isset($flagv))
{
	$output['result']="$flagv";
	
}
else {
	$output['result']="EMPTY FIELD";
}
//echo json_encode($output);
echo $flagv;
?>