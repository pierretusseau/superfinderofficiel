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
	$('.addtovolume').on('click', function(e) {
		e.preventDefault();
		var idVolume = $(this).data().volume;
		/* Act on the event */
		jQuery.post(
		    ajaxurl,
		    {
		        'action': 'Addvolume',
		        'param': idVolume
		    },
		    function(response){
		            console.log(response);
		    		$('.addtovolume').addClass('success').text('Volume ajouté !');
		        }
		);
	});

	var dashState = false;
	$('#dashToogle').on('click' , function(e){
		e.preventDefault();
		if (dashState) {
			// CLOSE
			$('.dashboard').css('top','80vh');
			dashState = false;
		} else {
			// OPEN
		//	alert('OUVRE TOI');
			$('.dashboard').css('top','10vh');
			dashState = true;
		}
	});
});
