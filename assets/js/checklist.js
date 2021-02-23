//var j = jQuery.noConflict();

// $('#add-task-field').click(function(e){
// 	e.preventDefault();

// 	let task_count = parseInt($('#checklist-task-count').val());



// 	let taskForm = $('.task-data').children().clone();
// 		taskForm.find('#checklist-task-name').val("");
// 		taskForm.find('#checklist-task-desc').val("");

// 		taskForm.find('#checklist-task-name').prop('id', 'checklist-task-name'+task_count );
// 		taskForm.find('#checklist-task-desc').prop('id', 'checklist-task-desc'+task_count );
// 		taskForm.find('#checklist-task-desc'+task_count).prop('name', 'task_description'+task_count );

// 		taskForm.find('#checklist-task-minute').prop('id', 'checklist-task-minute'+task_count );

// 		CKEDITOR.replace( 'task_description'+task_count);

// 	$('.task-container').append(taskForm);

// 	task_count+=1;

// 	$('#checklist-task-count').val(task_count);

// });	

// $('#remove-task-field').click(function(e){
// 	e.preventDefault();

// 	let tobeRemove = $(".task-container").children().last();

// 	//dont remove the parent field
// 	if(tobeRemove.attr("class") != "task-data"){
// 		tobeRemove.remove();
// 	}
// 	//$('.task-container').append(taskForm);

// });	


$('#add-checklist').click(function(e){
	e.preventDefault();
	
	 	var formvalues = $("#manange-checklist-form");
	    //validate form first before submitting

	    $checklistInfo = checklistFormValidator(formvalues);



	    $data = {
	    	checklistInfo : $checklistInfo
	    }

	   
	    $.ajax({
        url: "/checklist/add",
        type: "post",
        data: $data ,
        success: function (response) {

				let taskForm = $('.task-data').children();
					taskForm.find('#checklist-task-name').val("");
					taskForm.find('#checklist-task-minute').val("");
					task_description.value = "";

        	console.log(response);

           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });


});




$("#checklist-department").on("change",function(){
	$data = {};
	let val = $(this).val();

	$data['deptId'] = val;

	$.ajax({
        url: "/department/getStation",
        type: "post",
        data: $data ,
        success: function (response) {

        	$station = JSON.parse(response);

        	if($station.length > 0){

        		$('#checklist-station-div').show();
        		
        		$('#checklist-station').children().remove();

        		$optionTemplate = `<option value='0'>Choose...</option>`;

        		for (var i = 0; i < $station.length; i++) {
        			
        			$optionTemplate += `<option value='${ $station[i].id }'> ${ $station[i].name } </option>`;
        				
        		}

        		$('#checklist-station').append($optionTemplate);

        	}else{
        		$('#checklist-station-div').hide();
        		$('#checklist-station option[value=0]').attr('selected','selected');
        	}


        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });


});






function checklistFormValidator(formvalues){


	    $department = formvalues.find("#checklist-department").val();
	    $station = formvalues.find("#checklist-station").val();
	    $scheduleType = formvalues.find("#checklist-sched-type").val();
	    $checklistType = formvalues.find("#checklist-type").val();
	    $checklistname = formvalues.find("#checklist-name").val();
        $isGeneral = formvalues.find("#isGeneral").is(":checked");

        console.log($isGeneral);

	    $checkList = {

	    		department : $department,
	    		station : $station,
	    		scheduleType : $scheduleType,
	    		checklistType : $checklistType,
	    		checklistname : $checklistname,
                isGeneral : $isGeneral ? 1 : 0

	    }

	    //validate it first

	    return $checkList;

}
















