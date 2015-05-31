$(document).ready(function(e){
	$('.addtolist').on('click', function(e) {
		e.preventDefault();
		// Je récupère le "data-issue" écrit dans la balise html
		// Et je l'insère dans une variable JS
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


		// Dashboad scripts

			// Load Dashboard content
	//	function loadDash(){
	//		// Insérer le script ajax ici
	//		$.ajax({
	//			var idIssue = $(this).data().issue;
	//
	//			jQuery.post(
	//			    ajaxurl,
	//			    {
	//			        'action': 'Addlist',
	//			        'param': idIssue
	//			    },
	//			    function(response){
	//			            console.log(response);
	//			    		$('.addtolist').addClass('success').text('Ajouté !');
	//			        }
	//			);
	//           url: "superfinderofficiel/wp-content/themes/Superfinder-theme/parts/ajax/dashboardcontent.php",
	//           type: "GET",
	//           dataType: "html",
	//           success: function(html) {
	//           $("#dashboard-content").html(html);
	//        }
	//      });
	//		// fin ajax call
	//	}

			// Expand Dashboard

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
