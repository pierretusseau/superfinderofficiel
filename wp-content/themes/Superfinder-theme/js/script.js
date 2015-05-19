$(document).ready(function(e){
	$('.addtolist').on('click', function(e) {
		e.preventDefault();
		var idIssue = $(this).data().issue;
		/* Act on the event */
		jQuery.post(
		    ajaxurl,
		    {
		        'action': 'Addlist',
		        'param': idIssue
		    },
		    function(response){
		            console.log(response);
		    		$('.addtolist').addClass('success').text('Ajouté !');
		        }
		);	
	});
});

