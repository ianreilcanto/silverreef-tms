<!DOCTYPE html>
<html>
<head>
	<title>Checklist View</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style type="text/css">
	.active-task{
		background: blue;
	}
	.acomplised-task{
		background: grey;
	}
</style>
<body>

	<div class="container p-3" style="background: #ffe; border: 10px solid #072f5f">
		<div class="row">
			<div class="col-3">
				<img src="<?= base_url('assets/'); ?>img/default-image.png" style="width: 100%">
			</div>
			<div class="col-9 text-center">
				<h1><?= $dept; ?> DAILY <?= $sched_type; ?> CHECKLIST</h1>
				<h3> <?php echo  ($station != null) ? '('. $station .')' : '' ?></h3>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut porttitor nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
				</p>
			</div>
		</div>
		<br>
		<!-- start checklist -->
		<?php foreach ($checklists as $checklist) { ?>

				<?php foreach ($checklist as $checklistTitle => $tasks ) { ?>
						<div class="row">
							<div class="col">
								<div class="row">
									<div class="col-6">
										<h4><?php echo strtoupper($checklistTitle); ?></h4>
									</div>
									<div class="col-6">
										Accomplished By : Antonette Benitez <br>
										Review By : Mitz Inguito
									</div>
								</div>
							</div>
						</div>
						<div class="container">

								<?php foreach ($tasks as $task) { ?>
										<input type="hidden" name="taskId" value="<?= $task['id'] ?>">
										<!-- start task -->
										<div class="row p-3">
											<div class="col">
												<h5><?= $task['name'] ?></h5>
												<p>
													<?= $task['description'] ?>
												</p>
											</div>
											<div class="col align-self-center">
													<img src="<?= base_url('assets/'); ?>img/default-image.png" style="width: 100%">
											</div>
											<!-- <div class="col align-self-center">
												 <div class="input-group mb-3">
													 <div class="input-group-text">
												     	<input type="checkbox" aria-label="Checkbox for following text input">
												   	 </div>
													 <div class="custom-file">
													    <input type="file" class="custom-file-input" id="checklist-task-image">
													    <label class="custom-file-label" for="inputGroupFile01">Upload Image</label>
													 </div>
												</div>
											</div> -->
										</div>
										<!-- end task -->
								<?php  }//end foreach (tasks)  ?>
						</div>
			<?php } //end  foreach (checklist) ?>
	<?php }//end root foreach (checklists) ?>
		<!-- end checklist -->

	</div>

</body>
</html>