var default_station = $('#default_station').val()
displayTask(default_station);

$('#slc-employee-station').on('change',function(){

	let stationId = $(this).val();

	displayTask(stationId);
	toggleImage(stationId);
	
 });



function displayTask($id){


	//$('#station_switch').hasClass('station'+$id);
	$('#slc-employee-station').val($id);

	$('.station_switch').each(function(){
		let isMatch = $(this).hasClass('station'+$id);

		if(isMatch){
			$(this).show();
		}else{
			$(this).hide();
		}
	});

}

function toggleImage(stationId){

	if(stationId == 1){


		$('.logo-bungee').show();
		$('.logo-brew').hide();
		$('.logo-scoot').hide();

	}else if(stationId == 2){

		$('.logo-bungee').hide();
		$('.logo-brew').show();
		$('.logo-scoot').hide();

	}else if(stationId == 3){

		$('.logo-bungee').hide();
		$('.logo-brew').hide();
		$('.logo-scoot').show();


	}else{
		$('.logo-bungee').hide();
		$('.logo-brew').hide();
		$('.logo-scoot').hide();

	}

}
