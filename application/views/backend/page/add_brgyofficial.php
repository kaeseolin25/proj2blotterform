<div id="content">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 border rounded p-4">
            <h1 class="h3 mb-4 text-center text-primary">Manage Barangay Officials</h1>
            <form method="POST">
               <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" name="position" id="position" class="form-control" placeholder="Enter Position" required>
                  <span class="text-danger"><?= form_error('position') ?></span>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="first_name">First Name</label>
                     <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" required>
                     <span class="text-danger"><?= form_error('first_name') ?></span>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="middle_name">Middle Name</label>
                     <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Enter Middle Name" required>
                     <span class="text-danger"><?= form_error('middle_name') ?></span>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="last_name">Last Name</label>
                     <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" required>
                     <span class="text-danger"><?= form_error('last_name') ?></span>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="contact">Contact Number</label>
                     <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Contact Number" required>
                     <span class="text-danger"><?= form_error('contact') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="purok">Purok</label>
                     <input type="text" name="purok" id="purok" class="form-control" placeholder="Enter Purok" required>
                     <span class="text-danger"><?= form_error('purok') ?></span>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="barangay">Barangay</label>
                     <input type="text" name="barangay" id="barangay" class="form-control" placeholder="Enter Barangay" required>
                     <span class="text-danger"><?= form_error('barangay') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="municipality">Municipality</label>
                     <input type="text" name="municipality" id="municipality" class="form-control" placeholder="Enter Municipality" required>
                     <span class="text-danger"><?= form_error('municipality') ?></span>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="province">Province</label>
                     <input type="text" name="province" id="province" class="form-control" placeholder="Enter Province" required>
                     <span class="text-danger"><?= form_error('province') ?></span>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="start_term">Start of Term</label>
                     <input type="date" name="start_term" id="start_term" class="form-control" required>
                     <span class="text-danger"><?= form_error('start_term') ?></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="end_term">End of Term</label>
                  <input type="date" name="end_term" id="end_term" class="form-control" required>
                  <span class="text-danger"><?= form_error('end_term') ?></span>
               </div>
               <div class="text-center">
                  <button class="btn btn-primary mr-2">Add Official</button>
                  <button class="btn btn-secondary">Cancel</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
