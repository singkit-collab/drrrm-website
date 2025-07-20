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
            <h3 class="mb-0">Edit Notification</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Notification</li>
            </ol>
          </div>
        </div>

        <div class="d-flex justify-content-end mt-2">
          <a href="notification.php" class="btn btn-primary btn-sm">Back</a>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">
            <!--begin::Notification Edit Form-->
            <div class="card card-primary card-outline mb-4">
              <div class="card-header">
                <div class="card-title">Edit Notification</div>
              </div>

              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <!-- Notification Title -->
                    <div class="col-md-6 mb-3">
                      <label for="titleInput" class="form-label">Title:</label>
                      <input type="text" class="form-control" id="titleInput" name="title" value="System Maintenance" />
                    </div>

                    <!-- Notification Message -->
                    <div class="col-md-6 mb-3">
                      <label for="messageInput" class="form-label">Message:</label>
                      <textarea class="form-control" id="messageInput" name="message" rows="3">The system will be down at midnight for updates.</textarea>
                    </div>

                    <!-- Recipient -->
                    <div class="col-md-6 mb-3">
                      <label for="recipientInput" class="form-label">Send To:</label>
                      <select class="form-select" id="recipientInput" name="recipient">
                        <option disabled>Select recipient group</option>
                        <option value="all" selected>All Students</option>
                        <option value="faculty">Faculty Only</option>
                        <option value="staff">Staff Only</option>
                      </select>
                    </div>

                    <!-- Date -->
                    <div class="col-md-3 mb-3">
                      <label for="dateInput" class="form-label">Date:</label>
                      <input type="date" class="form-control" id="dateInput" name="date" value="2025-07-16" />
                    </div>

                    <!-- Time -->
                    <div class="col-md-3 mb-3">
                      <label for="timeInput" class="form-label">Time:</label>
                      <input type="time" class="form-control" id="timeInput" name="time" value="23:59" />
                    </div>

                    <!-- Attachment -->
                    <div class="col-md-6 mb-3">
                      <label for="attachmentInput" class="form-label">Attachment (Optional):</label>
                      <input type="file" class="form-control" id="attachmentInput" name="attachment" />
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              <!--end::Form-->
            </div>
          </div>
        </div>
        <!--end::Row-->
      </div>
    </div>

    <!--begin::App Content-->
    <div class="app-content">
      <div class="container-fluid">
        <!-- Optional: additional content here -->
      </div>
    </div>
    <!--end::App Content-->
  </main>

  <?php include "../layouts/footer.php" ?>
</div>
