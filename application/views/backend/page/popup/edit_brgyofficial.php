<form method="POST" action="<?= base_url('index.php/dashboard/edit-brgyofficial/'.$brgyofficial_data->brgyofficial_id); ?>">
   <div class="form-group">
      <div class="row">
         <div class="col-sm-4">
            <label >Position</label>
            <input type="text" name="position" value="<?= $brgyofficial_data->position?>" placeholder="--SELECT POSITION--" class="form-control" />
            <span class="text-danger"><?= form_error('position') ?></span>
         </div>
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-6">
            <label >First Name</label>
            <input type="text" name="first_name" value="<?= $brgyofficial_data->first_name?>" class="form-control" />
            <span class="text-danger"><?= form_error('first_name') ?></span>
         </div>
         <div class="col-sm-6">
            <label>Middle Name</label>
            <input type="text" name="middle_name" value="<?= $brgyofficial_data->middle_name?>" class="form-control" />
            <span class="text-danger"><?= form_error('middle_name') ?></span>
         </div>
      </div>
      <div class="col-sm-6">
         <label for="con_complainant">Last Name</label>
         <input type="text" name="last_name" value="<?= $brgyofficial_data->last_name?>" class="form-control" />
         <span class="text-danger"><?= form_error('last_name') ?></span>
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-4">
            <label for="complainee">Contact #</label>
            <input type="text" name="contact" value="<?= $brgyofficial_data->contact?>" placeholder="--SELECT COMPLAINEE--" class="form-control" />
            <span class="text-danger"><?= form_error('contact') ?></span>
         </div>
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-6">
            <label for="age_c">Purok</label>
            <input type="text" name="purok" value="<?= $brgyofficial_data->purok?>" class="form-control" />
            <span class="text-danger"><?= form_error('purok') ?></span>
         </div>
         <div class="col-sm-6">
            <label for="address_c">Barangay</label>
            <input type="text" name="barangay" value="<?= $brgyofficial_data->barangay?>" class="form-control" />
            <span class="text-danger"><?= form_error('barangay') ?></span>
         </div>
      </div>
      <div class="col-sm-6">
         <label for="con_complainee">Municipality</label>
         <input type="text" name="municipality" value="<?= $brgyofficial_data->municipality?>" class="form-control" />
         <span class="text-danger"><?= form_error('municipality') ?></span>
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-4">
            <label for="complaint">Province</label>
            <input type="text" name="province" value="<?= $brgyofficial_data->province?>" placeholder="--SELECT COMPLAINEE--" class="form-control" />
            <span class="text-danger"><?= form_error('province') ?></span>
         </div>
      </div>
   </div>
   <br>
   <div class="form-group">
      <div class="row">
         <div class="col-sm-6">
            <label for="action">Start of Term</label>
            <input type="text" name="start_term" value="<?= $brgyofficial_data->start_term?>" class="form-control" />
            <span class="text-danger"><?= form_error('start_term') ?></span>
         </div>
         <div class="col-sm-6">
            <label for="status">End of Term</Address></label>
            <input type="text" name="end_term" value="<?= $brgyofficial_data->end_term?>" class="form-control" />
            <span class="text-danger"><?= form_error('end_term') ?></span>
         </div>
      </div>
     
   </div>

   <br>
   <div class="form-group">
      <center>
         <button class="btn btn-primary">Save Changes</button>
      </center>
   </div>
</form>
