<?php include "../layouts/header.php" ?>

<div class="app-wrapper">
  <!--begin::Header-->
  <?php include "../layouts/admin/navbar.php" ?>
  <?php include "../layouts/admin/sidebar.php" ?>

  <main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">Add Incident</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </div>
        </div>

        <div class="d-flex justify-content-end mb-2">
          <a href="incident.php" class="btn btn-primary btn-sm">Back</a>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline mb-4">
              <div class="card-header">
                <div class="card-title">Quick Example</div>
              </div>

              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                      <label for="nameInput" class="form-label">Name:</label>
                      <input type="text" class="form-control" id="nameInput" name="name" required />
                    </div>

                    <!-- Address -->
                    <div class="col-md-6 mb-3">
                      <label for="addressInput" class="form-label">Address:</label>
                      <input type="text" class="form-control" id="addressInput" name="address" required />
                    </div>

                    <!-- Course -->
                    <div class="col-md-6 mb-3">
                      <label for="courseInput" class="form-label">Course:</label>
                      <input type="text" class="form-control" id="courseInput" name="course" />
                    </div>

                    <!-- Location of Incident (Dropdown) -->
                    <div class="col-md-6 mb-3">
                      <label for="locationInput" class="form-label">Location of Incident:</label>
                      <select class="form-select" id="locationInput" name="location" required>
                        <option selected disabled>Select location</option>
                        <option value="Library">Library</option>
                        <option value="Cafeteria">Cafeteria</option>
                        <option value="Gym">Gym</option>
                        <option value="Hallway">Hallway</option>
                        <option value="Parking Lot">Parking Lot</option>
                      </select>
                    </div>

                    <!-- Level of Incident -->
                    <div class="col-md-6 mb-3">
                      <label for="levelInput" class="form-label">Level of Incident:</label>
                      <select class="form-select" id="levelInput" name="level" required>
                        <option selected disabled>Select level</option>
                        <option value="High">High</option>
                        <option value="Moderate">Moderate</option>
                        <option value="Low">Low</option>
                      </select>
                    </div>

                    <!-- Description of Incident -->
                    <div class="col-md-6 mb-3">
                      <label for="descriptionInput" class="form-label">Description of Incident:</label>
                      <input type="text" class="form-control" id="descriptionInput" name="description" />
                    </div>

                    <!-- Time -->
                    <div class="col-md-6 mb-3">
                      <label for="timeInput" class="form-label">Time:</label>
                      <input type="time" class="form-control" id="timeInput" name="time" />
                    </div>

                    <!-- Date -->
                    <div class="col-md-6 mb-3">
                      <label for="dateInput" class="form-label">Date:</label>
                      <input type="date" class="form-control" id="dateInput" name="date" />
                    </div>

                    <!-- Campus Dropdown -->
                    <div class="col-md-6 mb-3">
                      <label for="campusInput" class="form-label">Campus:</label>
                      <select class="form-select" id="campusInput" name="campus" required>
                        <option selected disabled>Select campus</option>
                        <option value="NLUC">NLUC</option>
                        <option value="MLUC">MLUC</option>
                        <option value="SLUC">SLUC</option>
                      </select>
                    </div>

                    <!-- Upload Photo -->
                    <div class="col-md-6 mb-3">
                      <label for="photoInput" class="form-label">Upload Photo:</label>
                      <input type="file" class="form-control" id="photoInput" name="photo" />
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Empty Content Area (Optional) -->
    <div class="app-content">
      <div class="container-fluid"></div>
    </div>
  </main>
</div>

<?php include "../layouts/footer.php" ?>
