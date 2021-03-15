
$("#checklist-task-department").on("change",function(){
	$data = {};
	let val = $(this).val();

	$data['deptId'] = val;

$.ajax({
        url: "/checklist/getAllChecklistByDept",
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

$('#manage-task-form').on('submit',function(e) {

   e.preventDefault();

      var formvalues = $("#manage-task-form");
     //validate form first before submitting
     var file_data =  $('#task-file').prop('files')[0];  
     $tasklist = taskValidator(formvalues);

    var form_data = new FormData(this);    

   console.log($tasklist);

    form_data.append('tasklist', JSON.stringify($tasklist));

   // console.log(form_data);

    $.ajax({
        url: '/checklist/add_task', // point to server-side PHP script 
      //  dataType: 'text',  // what to expect back from the PHP script, if anything
        type: 'post',  
        data:  form_data,  
        processData:false,
        contentType:false,
        cache:false,
        async:false,       
        success: function(php_script_response){
            console.log(php_script_response); // display response from the PHP script, if any
        }
     });


});

 $('#task-file').on('change',function(e){
    //get the file name
   var fileName = e.target.files[0].name;


    //replace the "Choose a file" label
    $(this).next('.task-file-label').html(fileName);
})


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
			sec : formvalues.find("#checklist-task-sec").val(),
			//path : formvalues.find("#checklist-task-iamge").val()

	}


	return task;


}

