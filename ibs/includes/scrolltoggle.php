	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="http://parsleyjs.org/dist/parsley.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="parsley.min.js"></script>
	<script>
		$(document).ready(function(){
			 $(".my-cities").hide();
		    $(".categories > .centralize > a").click(function(){
		        $(".my-cities").slideToggle();
		    });
		});
	</script>

<script>
  $('.general-form').parsley();
</script>

