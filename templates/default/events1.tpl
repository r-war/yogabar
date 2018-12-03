 

		{if isset($events.error)}
			<div class"error">{$events.error}</div>
		{else}			
			<b>{$events.name} at {$events.event_date}</b>
			<br/>	
			<br/>		
			{$events.description}
{if {$events.price > 0 }  }
 
{if {$ChkLogin ==1 }  }

<form action="events_checkout.php" id='evpackFrm' name="evpackFrm" method="post" >
<input type='hidden' name="hidid" id="hidid" value="{$events.id}"  > 
<input type='submit'  name='' value='Pay'>	

{else}

 
 <form action="login.php" id='evpackFrm' name="evpackFrm" method="post" >
<input type='submit'  name='' value='Login to Pay'> 
 {/if}


 	{/if}
		
		{/if}

</form>




 
