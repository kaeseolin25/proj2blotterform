<div id="content">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 border rounded p-4">
            <h2 class="text-center text-primary mb-4">RESIDENT INFORMATION</h2>
            <form method="POST">
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-4">
                        <label for="firstname">Resident's Name</label>
                        <input type="text" name="first_name" placeholder="First Name" class="form-control" />
                        <span class="text-danger"><?= form_error('firstname') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <label for="middlename"></label>
                        <input type="text" name="middle_name" placeholder="Middle Name" class="form-control" />
                        <span class="text-danger"><?= form_error('middlename') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <label for="lastname"></label>
                        <input type="text" name="last_name" placeholder="Last Name" class="form-control" />
                        <span class="text-danger"><?= form_error('lastname') ?></span>
                     </div>
                  </div>
               </div>
               <br>
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-6">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" name="birth_date" class="form-control" />
                        <span class="text-danger"><?= form_error('birth_date') ?></span>
                     </div>
                     <div class="col-sm-6">
                        <label for="sex">Sex</label>
                        <select name="sex" class="form-control">
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                        </select>
                        <span class="text-danger"><?= form_error('sex') ?></span>
                     </div>
                  </div>
               </div>
               <br>
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-4">
                        <label for="address">Address</label>
                        <input type="text" name="street" placeholder="Street" class="form-control" />
                        <span class="text-danger"><?= form_error('street') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <label for="purok"></label>
                        <input type="text" name="purok" placeholder="Purok" class="form-control" />
                        <span class="text-danger"><?= form_error('purok') ?></span>
                     </div>
                     <div class="col-sm-4">
                        <label for="barangay"></label>
                        <input type="text" name="barangay" placeholder="Barangay" class="form-control" />
                        <span class="text-danger"><?= form_error('barangay') ?></span>
                     </div>
                  </div>
               </div>
               <br>
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-6">
                        <label for="contact">Contact</label>
                        <input type="tel" name="contact" class="form-control" />
                        <span class="text-danger"><?= form_error('contact') ?></span>
                     </div>
                     <div class="col-sm-6">
                        <label for="religion">Religion</label>
                        <input type="text" name="religion" class="form-control" />
                        <span class="text-danger"><?= form_error('religion') ?></span>
                     </div>
                  </div>
               </div>
               <br>
               <div class="form-group">
                  <div class="row">
                     <div class="col-sm-6">
                        <label for="civilstatus">Civil Status</label>
                        <select name="civil_status" class="form-control">
                           <option value="single">Single</option>
                           <option value="married">Married</option>
                           <option value="separated">Separated</option>
                           <option value="widowed">Widowed</option>
                        </select>
                        <span class="text-danger"><?= form_error('civilstatus') ?></span>
                     </div>
                     <div class="col-sm-6">
                        <label for="nationality">Nationality</label>
                        <input type="text" name="nationality" class="form-control" />
                        <span class="text-danger"><?= form_error('nationality') ?></span>
                     </div>
                  </div>
               </div>
               <br>
               <?php if (isset($_SESSION['error'])) : ?>
                  <div style="color:red;"><?= $_SESSION['error'] ?></div>
               <?php endif; ?>

               <?php if (isset($_SESSION['success'])) : ?>
                  <div style="color:green;"><?= $_SESSION['success'] ?></div>
               <?php endif; ?>

               <form action="<?= base_url('demo/upload') ?>" method="POST" enctype="multipart/form-data">
                  Select image to upload:
                  <input type="file" name="image_file" />
                  <button type="submit" name="upload_btn"> Upload Image </button>
               </form>
               <br>
               <div class="text-center">
                  <button class="btn btn-primary">Add Resident</button>
               </div>
            </form>
            <br>
            <br>
            <br>
            <br>
            <br>
         </div>
      </div>
   </div>
</div>
