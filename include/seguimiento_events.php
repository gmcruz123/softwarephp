<?php
class eventclass_seguimiento  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeDelete"]=true;

		$this->events["BeforeAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, &$pageObject)
{

		


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$values['SUMATORIA']=$values['VALORACION1']+$values['VALORACION2']+$values['VALORACION3']+$values['VALORACION4']+$values['VALORACION5']+$values['VALORACION6']+$values['VALORACION7']+$values['VALORACION8'];

$values['RENDIMIENTO']=(($values['VALORACION1']+$values['VALORACION2']+$values['VALORACION3']+$values['VALORACION4']+$values['VALORACION5']+$values['VALORACION6']+$values['VALORACION7']+$values['VALORACION8'])/48)*100;

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
