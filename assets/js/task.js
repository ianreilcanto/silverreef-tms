
$("#checklist-task-department").on("change",function(){
	$data = {};
	let val = $(this).val();

	$data['deptId'] = val;

$.ajax({
        url: "/checklist/getChecklistByDept",
        type: "post",
        data: $data ,
        success: function (response) {


        	$task = JSON.parse(response);

        	if($task.length > 0){

        		$('#checklist-task-checklistName-div').show();
        		
        		$('#checklist-task-checklistName').children().remove();

        		$optionTemplate = `<option value='0'>Choose...</option>`;

        		for (var i = 0; i < $task.length; i++) {
        			
        			$optionTemplate += `<option value='${ $task[i].id }'> ${ $task[i].name } </option>`;
        				
        		}

        		$('#checklist-task-checklistName').append($optionTemplate);

        	}else{
        		$('#checklist-task-checklistName-div').hide();
        		$('#checklist-task-checklistName option[value=0]').attr('selected','selected');
        	}


        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });


});


$('#add-task').click(function(e){
	e.preventDefault();
	
	 	var formvalues = $("#manange-checklist-form");
	    //validate form first before submitting

		$tasklist = taskValidator(formvalues);

	    $data = {
	    	task : $tasklist
	    }

	   
	 $.ajax({
        url: "/checklist/add_task",
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

function taskValidator(formvalues){

	console.log(formvalues);

	// let task_count = parseInt($('#checklist-task-count').val());

	let desc = task_description.getData();




	let task = {

			department : formvalues.find("#checklist-task-department").val(),
			checklist : formvalues.find("#checklist-task-checklistName").val(),
			taskType : formvalues.find("#checklist-task-taskType").val(),
			name : formvalues.find("#checklist-task-name").val(),
			desc : desc,//formvalues.find("#checklist-task-desc").val(),
			sec : formvalues.find("#checklist-task-sec").val()
			//path : formvalues.find("#checklist-task-iamge").val()

	}


	return task;


}

