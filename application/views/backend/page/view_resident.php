<!-- Include the required CSS and JS files for Bootstrap modal 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>-->

<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Resident List</h1>
   <p class="mb-4">
      <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-resident') ?>">Add Resident</a>
   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
         <!-- Topbar Search -->
         <form class="form-inline" id="search-form">
            <div class="input-group">
               <input type="text" id="search-input" class="form-control" placeholder="Search by name" aria-label="Search" aria-describedby="basic-addon2">
               <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                     <i class="fas fa-search fa-sm"></i>
                  </button>
               </div>
            </div>
         </form>
      </div>
      <div class="card-body">
         <div id="resident-table-container" class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Fullname</th>
                     <th scope="col">Birth Date</th>
                     <th scope="col">Sex</th>
                     <th scope="col">Address</th>
                     <th scope="col">Contact Number</th>
                     <th scope="col">Religion</th>
                     <th scope="col">Civil Status</th>
                     <th scope="col">Nationality</th>
                     <th scope="col">Image</th>
                     <th scope="col">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($resident_list as $resident) : ?>
                     <tr class="search-item">
                        <th scope="row"><?= $resident->resident_id ?></th>
                        <td><?= $resident->last_name ?>, <?= $resident->first_name ?> <?= $resident->middle_name ?></td>
                        <td><?= $resident->birth_date ?></td>
                        <td><?= $resident->sex ?></td>
                        <td><?= $resident->street ?> <?= $resident->purok ?> <?= $resident->barangay ?></td>
                        <td><?= $resident->contact ?></td>
                        <td><?= $resident->religion ?></td>
                        <td><?= $resident->civil_status ?></td>
                        <td><?= $resident->nationality ?></td>
                        <td>
                           <?php if ($resident->image !== '') : ?>
                              <img src="<?= base_url('uploads/' . $resident->image) ?>" alt="Resident Image" width="50" height="50">
                           <?php else : ?>
                              No Image
                           <?php endif; ?>
                        </td>
                        <td>
                           <button type="button" class="btn btn-primary edit-resident-btn" data-resident="<?= $resident->resident_id ?>">Update</button>
                           <button class="btn btn-danger delete-resident-btn" data-resident="<?= $resident->resident_id ?>">Delete</button>
                           <button class="btn btn-success view-resident-btn" data-resident-id="<?= $resident->resident_id ?>">View</button>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="view-resident-modal" tabindex="-1" role="dialog" aria-labelledby="view-resident-modal-label" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="view-resident-modal-label">Resident Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!-- This div will be populated with the response data from the AJAX request -->
            <div id="view-resident-content"></div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<script> 
/* AJAX */
   /* Your JavaScript/jQuery code for AJAX and other interactions goes here */
   $(document).on('click', '.view-resident-btn', function() {
      var residentId = $(this).data('resident');
      $.ajax({
         url: '<?= base_url('index.php/dashboard/ajax-view-resident-form') ?>', // Replace with the correct URL to fetch the resident details
         method: 'POST',
         data: {
            resident_id: residentId
         },
         success: function(response) {
            $('#view-resident-content').html(response); // Populate the modal body with the response data
            $('#view-resident-modal').modal('show'); // Show the modal
         }
      }).find('.bootbox-body').html(response);
   });

  
   $(document).on('click', '.edit-resident-btn', function() {
      var residentId = this.dataset.resident;

      $.ajax({
         url: '<?= base_url('index.php/dashboard/ajax-update-resident-form') ?>',
         method: 'POST',
         data: {
            resident_id: residentId
         },
         success: function(response) {
            bootbox.dialog({
               title: 'Edit resident',
               message: ' ',
               size: 'extra-large'
            }).find('.bootbox-body').html(response);
         }
      });
   });

   $(document).on('click', '.delete-resident-btn', function(e) {
      var residentId = $(this).data('resident');
      bootbox.confirm('Are you sure you want to delete this official', function(answer) {
         if (answer == true) {
            window.location = '<?= base_url('index.php/dashboard/delete-resident/') ?>' + residentId;
         }
      });
   });

   

   $(document).ready(function() {
      // Search functionality (unchanged)
      $('#search-input').keyup(function() {
         var searchValue = $(this).val().toLowerCase();
         $('.search-item').each(function() {
            var residentName = $(this).find('td:nth-child(2)').text().toLowerCase();
            if (residentName.includes(searchValue)) {
               $(this).show();
            } else {
               $(this).hide();
            }
         });
      });
   });
</script>
