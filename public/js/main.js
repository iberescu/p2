(function($){
	
	$(document).ready(function(){
		
		$('#generate').click(function(){
			$.ajax({
			  url: "http://localhost:8080/p2/generate",
			  data: $('#data-wrapper').serialize(),
			  method: "POST",
			  dataType: "JSON",
			  success : function(data){
					if (typeof(data.error) != 'undefined')
					{
						alert(data.error);
						return;
					}
				  $('.stong-password').html(data.result);
			  }
			});
		})
		$('#copy-clipboard').click(function(){
		  window.prompt("Copy to clipboard: Ctrl+C, Enter", $('.stong-password').text());
		});

	})
})(window.jQuery);