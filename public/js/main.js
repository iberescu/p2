(function($){
	
	$(document).ready(function(){
		
		$('#generate').click(function(){
			
			//show loading
			$(".wrapper").show();
			$.ajax({
			  url: "http://localhost:8080/p2/generate",
			  data: $('#data-wrapper').serialize(),
			  method:"POST",
			  dataType: JSON
			}).done(function() {
				$(".wrapper").hide();  
			});
		})
	})
})(window.jQuery);