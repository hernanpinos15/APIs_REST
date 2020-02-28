<?php

$var = 1;

?>
<html>
	<body>
		<input type="button" value="Enviar variable" id="send"/>
	</body>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
	$('#send').click( function() {
	alert('Enviando!');
		$.ajax(
				{
					url: 'get_var.php?var=<?php echo $var; ?>',
					success: function( data ) {
						alert( 'El servidor devolvio "' + data + '"' );
					}
				}
			)
		}
	);
	</script>
</html>
