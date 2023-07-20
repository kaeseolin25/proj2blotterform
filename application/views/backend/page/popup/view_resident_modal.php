<div>
   <h5>Resident ID: <?= $resident['resident_id'] ?></h5>
   <p>Full Name: <?= $resident['last_name'] ?>, <?= $resident['first_name'] ?> <?= $resident['middle_name'] ?></p>
   <p>Birth Date: <?= $resident['birth_date'] ?></p>
   <p>Sex: <?= $resident['sex'] ?></p>
   <p>Address: <?= $resident['street'] ?> <?= $resident['purok'] ?> <?= $resident['barangay'] ?></p>
   <p>Contact Number: <?= $resident['contact'] ?></p>
   <p>Religion: <?= $resident['religion'] ?></p>
   <p>Civil Status: <?= $resident['civil_status'] ?></p>
   <p>Nationality: <?= $resident['nationality'] ?></p>
   <?php if ($resident['image'] !== '') : ?>
      <img src="<?= base_url('uploads/' . $resident['image']) ?>" alt="Resident Image" width="100" height="100">
   <?php else : ?>
      <p>No Image</p>
   <?php endif; ?>
</div>