	<div class="content">
			<!-- Centering the little add form -->
			
			<div class="flex-center">

				<!-- Add form -->
				<form id="add-form" class="form-control">
					<div class="form-group">
						<input type="text" name="content" id="content" class="form-control-input" required>
						<label for="content" class="form-label">Content</label>
					</div>
					<div class="form-group">
						<input type="datetime-local" name="date" id="date" class="form-control-input" required>
						<label for="date" class="form-label">Date</label>
					</div>
					<input type="submit" name="submit" id="add-submit" value="Add" class="btn-add">
					<input type="hidden" name="action" id="action" value="add">
				</form>
			</div>

			<!-- Tasks list -->
			<table class="tasks-table">
				<tr>
					<th>#</th><th>Date</th><th>Task</th><th>Actions</th>
				</tr>
				<!--
				<tr>
					<td>#</td> <td>DD/MM/AAAA HH:MM:SS</td> <td>Lorem ipsum...</td> <td>Buttons here</td>
				</tr>
				-->
			</table>
		</div>

		<!-- Modal for tasks editing -->
		<div id="editmodal" class="modal">

			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h3>Edit task</h3>
				</div>

				<div class="modal-body">
					<form id="edit-form" class="form-control">

						<div class="form-group">
							<input type="text" name="edit-content" id="edit-content" class="form-control-input used" required>
							<label for="content" class="form-label">Content</label>
						</div>
						<div class="form-group">
							<input type="datetime-local" name="edit-date" id="edit-date" class="form-control-input" required>
							<label for="date" class="form-label">Date</label>
						</div>

						<input type="hidden" name="action" id="edit-action" value="update">
						<input type="hidden" name="id" id="edit-id">
						<input type="submit" name="edit-submit" id="edit-submit" value="Edit" class="btn-add">
					</form>
				</div>
			</div>
		</div>

	
		<script src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<!-- task_request.js to show the tasks -->
        <!-- <script src="js/task_request.js"></script> -->
		<!-- task_action.js to add and manipulate tasks -->
        <script src="js/task_action.js"></script>