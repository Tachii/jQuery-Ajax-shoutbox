$(document).ready(function(){
	//Format date to match MySql format
	function getDate(){
		var date;
		date = new Date;
		date = date.getUTCFullYear() + '-' +
				('00' + (date.getUTCMonth() + 1)).slice(-2) + '-' +
		 		('00' + (date.getUTCDate() + 1)).slice(-2) + ' ' +
		 		('00' + (date.getUTCHours() + 1)).slice(-2) + ':' +
		 		('00' + (date.getUTCMinutes() + 1)).slice(-2) + ':' +
		 		('00' + (date.getUTCSeconds() + 1)).slice(-2);
		return date;
	}
	
	$('#submit').on('click', function(){
		var name = $('#name').val();
		var message = $('#message').val();
		var date = getDate();
		var dataString = 'name= '+ name +'&message= '+ message +'&date=' + date;
		
		//Validation
		if(name == '' || message == ''){
			alert('Please enter in your name and message');
		} else {
			$.ajax({
				type: "GET",
				url: "shoutbox.php",
				data: dataString,
				cache: false,
				success: function(html){
					$('#shouts ul').prepend(html);
				},
				error: function (xhr, ajaxOptions, thrownError) {
		           console.log(xhr.status);
		           console.log(xhr.responseText);
		           console.log(thrownError);
		       } 
			});
		}
		
		//Prevent Form from submitting
		return false;
	});
});
