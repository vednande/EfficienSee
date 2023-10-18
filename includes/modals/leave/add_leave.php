<div id="add_leave" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Leave</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST">
									<div class="form-group">
										<label>First Name<span class="text-danger">*</span></label>
										<input name="fname" class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Last Name<span class="text-danger">*</span></label>
										<input name="lname" class="form-control" type="text">
									</div>
									
									<div class="form-group">
										<label>Number of days <span class="text-danger">*</span></label>
										<input name="days" class="form-control" type="number">
									</div>
									
									<div class="form-group">
										<label>Leave Reason <span class="text-danger">*</span></label>
										<textarea name="reason" rows="4" class="form-control"></textarea>
									</div>
									<div class="submit-section">
										<button type="submit" name="add_leave" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>