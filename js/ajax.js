$(document).ready(function() {
	function submit() {

		//var product_name-url = location.search.split('?fda-id=')[1];
		var product_name = $('#product-name').val();
		var fda_id = $('#fda-id').val();


		//Validate input
		if (product_name == '') {
			$('.product-error').css('color','#DA0A2B');
			$('.product-error').empty();
			$('.product-error').show().append('Oops! You did not enter any product name');
		}

		else if (fda_id == '') {
			$('.fda-error').css('color','#DA0A2B');
			$('.fda-error').empty();
			$('.fda-error').show().append('Oops! You did not enter any fda id');
		}


		else {

		//console.log(product_name,fda_id);

		//Make an ajax request
		$.ajax({
			type: 'POST',
			cache:false,
			url: 'http://localhost/pvs/php/authenticator.php',
			data: {"product_name":product_name,"fda_id":fda_id},

			success: function(res) {
				res = JSON.parse(res);
				console.log(res);
				//alert(res);

				if ( res == false) {
					$('#result').show;
					$('#result').html('<p>The product ' + product_name + ' is counterfeit. Contact the nearest FDA office</p>');
				}

				else {
					$.each(res, function(index, item){

						$('#result').show();
						$('#result').html('<p>The Product ' + item.product_name + ' with ID ' + item.fda_id + ' is genuine' +'</p>');
						$('#result').append('<img src="' + (item.product_image_url).substring(3) + '">');
					});	
				}
				
				
			},
			error: function(err)
			{
				//$('#form').empty();
				//$('#submiterror').show();
				//alert('Submission Failed!!');
				console.log(err);
			}
		});//end ajax
		}

		
	}

	$("#submit").click(function(){
		submit();
	});
})