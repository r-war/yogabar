
		{if isset($events.error)}
			<div class"error">{$events.error}</div>
		{else}			
			<b>{$events.name} at {$events.event_date}</b>
			<br/>	
			<br/>		
			{$events.description}			
		{/if}
