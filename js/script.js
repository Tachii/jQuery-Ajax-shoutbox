/**
 * @author tachi
 */
$(document).ready(function(){
	$('#submit').on('click', function(){
		var name = $('#name').val();
		var message = $('#shout').val();
		//var date = getDate();
		//var dataString = 'name = '+ name +'&shout = '+ shout +'&date=' + date;
		
		//Validation
		if(name == '' || shout == ''){
			alert('Please enter in your name and message');
		} else {
			$.ajax({
				
			});
		}
		
		//Prevent Form from submitting
		return false;
	});
});
