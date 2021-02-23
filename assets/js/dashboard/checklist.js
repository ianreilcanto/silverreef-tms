var default_station = $('#default_station').val()
displayTask(default_station);

$('#slc-employee-station').on('change',function(){

	let stationId = $(this).val();
	displayTask(stationId);
	
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


	// $('.station'+$id).toggle();
	// console.log('asd');

}
