$(document).ready(function() {
	function submit() {

		//var product_name-url = location.search.split('?user=')[1];
		var product_name = $('#product-name').val();
		var fda_id = $('#fda-id').val();


		//Validate input
		if (product_name == '') {
			$('#surnameerror').show();
		}

		else if (fda_id == '') {
			$('#surnameerror').empty();
			$('#nameerror').show();
		}


		else {

		//console.log(product_name,fda_id);

		//Make an ajax request
		$.ajax({
			type: 'POST',
			url: 'http://192.168.43.108/pvs/php/authenticator.php',
			data: {"product_name":product_name,"fda_id":fda_id},

			success: function(res) {
				res = JSON.parse(res);
				console.log(res);
				//alert(res);

				$.each(res, function(index, item){

					var result = "The Product Name " + item.name + " with ID " + item.fda_id + " is genuine";
					console.log(result);
					$('#result').append(result);
				});
				
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
