<?php include "../layouts/header.php" ?>

<div class="app-wrapper">
  <?php include "../layouts/admin/navbar.php" ?>
  <?php include "../layouts/admin/sidebar.php" ?>

  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">Update Team</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </div>
        </div>

        <div class="d-flex justify-content-end mt-2">
          <a href="team.php" class="btn btn-primary btn-sm">Back</a>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">
            <div class="card card-primary card-outline mb-4">
              <div class="card-header">
                <div class="card-title">Update Team Member Info</div>
              </div>

              <form method="post">
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

                    <!-- Department or Team -->
                    <div class="col-md-6 mb-3">
                      <label for="inputDepartment" class="form-label">Department or Team:</label>
                      <select class="form-select" id="inputDepartment" name="department" required>
                        <option selected disabled>Select Department</option>
                        <option value="IT">IT</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                        <option value="HR">HR</option>
                        <option value="Finance">Finance</option>
                      </select>
                    </div>

                    <!-- Role or Position -->
                    <div class="col-md-6 mb-3">
                      <label for="inputRole" class="form-label">Role or Position:</label>
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
                      <label for="inputTime" class="form-label">Time (Hours Available):</label>
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
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="app-content">
      <div class="container-fluid">
        <!-- Optional content -->
      </div>
    </div>
  </main>

  <?php include "../layouts/footer.php" ?>
</div>
