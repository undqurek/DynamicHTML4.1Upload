<?php

	//TODO: upload logic

	$result = 'true';
	$message = 'File upoloaded!';

?>
<html>
<body>
<script>

	var callback = function()
	{
		/*
		
		var response = {
			result: true,
			message: 'File upoloaded!'
		};
		
		var response = {
			result: false,
			message: 'Incorrect file!'
		};
		
		*/
		
		var response = {
			result: <?php echo $result; ?>,
			message: <?php echo $message; ?>
		};

		window.onsent(response);
	};

	function execute()
	{
		setTimeout(function()
		{
			if(window.onsent)
				callback();

			else
				execute();

		}, 100);
	}

	execute();

</script>
</body>
<html>