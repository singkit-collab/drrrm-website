<?php include "../layouts/header.php" ?>

<div class="app-wrapper">
  <!--begin::Header-->
  <?php include "../layouts/admin/navbar.php" ?>
  <?php include "../layouts/admin/sidebar.php" ?>

  <main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">Add Team Member Availability</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Team</li>
            </ol>
          </div>
        </div>

        <div class="d-flex justify-content-end mt-2">
          <a href="team.php" class="btn btn-primary btn-sm">Back</a>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">
            <!--begin::Form Card-->
            <div class="card card-primary card-outline mb-4">
              <div class="card-header">
                <div class="card-title">Team Member Information</div>
              </div>

              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                      <label for="inputName" class="form-label">Name:</label>
                      <input type="text" class="form-control" id="inputName" name="name" required />
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                      <label for="inputEmail" class="form-label">Email:</label>
                      <input type="email" class="form-control" id="inputEmail" name="email" required />
                    </div>

                    <!-- Department -->
                    <div class="col-md-6 mb-3">
                      <label for="inputDepartment" class="form-label">Department / Team:</label>
                      <select class="form-select" id="inputDepartment" name="department" required>
                        <option selected disabled>Select Department</option>
                        <option value="IT">IT</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                        <option value="HR">HR</option>
                        <option value="Finance">Finance</option>
                      </select>
                    </div>

                    <!-- Role -->
                    <div class="col-md-6 mb-3">
                      <label for="inputRole" class="form-label">Role / Position:</label>
                      <select class="form-select" id="inputRole" name="role" required>
                        <option selected disabled>Select Role</option>
                        <option value="Team Member">Team Member</option>
                        <option value="Team Lead">Team Lead</option>
                        <option value="Project Manager">Project Manager</option>
                        <option value="Intern">Intern</option>
                      </select>
                    </div>

                    <!-- Contact Number -->
                    <div class="col-md-6 mb-3">
                      <label for="inputContact" class="form-label">Contact Number:</label>
                      <input type="text" class="form-control" id="inputContact" name="contact" required />
                    </div>

                    <!-- Available Days -->
                    <div class="col-md-6 mb-3">
                      <label for="inputDays" class="form-label">Available Days:</label>
                      <select class="form-select" id="inputDays" name="available_day" required>
                        <option selected disabled>Select a day</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                      </select>
                    </div>

                    <!-- Available Time -->
                    <div class="col-md-6 mb-3">
                      <label for="inputTime" class="form-label">Available Time:</label>
                      <select class="form-select" id="inputTime" name="available_time" required>
                        <option selected disabled>Select Time Slot</option>
                        <option value="8am-12pm">8 AM – 12 PM</option>
                        <option value="12pm-4pm">12 PM – 4 PM</option>
                        <option value="4pm-8pm">4 PM – 8 PM</option>
                        <option value="Full Day">Full Day</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!--end::Form Card-->
          </div>
        </div>
        <!--end::Row-->
      </div>
    </div>

    <!--begin::App Content-->
    <div class="app-content">
      <div class="container-fluid">
        <!-- Optional additional content -->
      </div>
    </div>
    <!--end::App Content-->
  </main>

  <?php include "../layouts/footer.php" ?>
</div>
