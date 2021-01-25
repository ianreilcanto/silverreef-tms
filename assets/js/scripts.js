

//employee
$("#employee-dept-position-div").hide();

//Employee Date
$('#startDate').datepicker({
        uiLibrary: 'bootstrap4'
});

$('#birthDate').datepicker({
        uiLibrary: 'bootstrap4'
});


//checklist
$('#checklist-station option[value=0]').attr('selected','selected');
$('#checklist-station-div').hide();

$('#checklist-task-start-time').timepicker({
    uiLibrary: 'bootstrap4'
});
$('#checklist-task-end-time').timepicker({
    uiLibrary: 'bootstrap4'
});


//task
$('#checklist-task-checklistName-div').hide();

if($("textarea").length > 0){
   
var task_description = CKEDITOR.replace( 'task_description');
}



