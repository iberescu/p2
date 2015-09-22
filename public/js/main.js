(function($){
	
	$(document).ready(function(){
		
		$('#generate').click(function(){
			$.ajax({
			  url: "http://localhost:8080/p2/generate",
			  data: $('#data-wrapper').serialize(),
			  method: "POST",
			  dataType: "JSON",
			  success : function(data){
				  $('.stong-password').html(data.result);
			  }
			});
		})
	})
})(window.jQuery);