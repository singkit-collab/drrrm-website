<?php include "../layouts/header.php" ?>

    <div class="app-wrapper">
      <!--begin::Header-->
<?php include "../layouts/admin/navbar.php" ?>
<?php include "../layouts/admin/sidebar.php" ?>
 
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Notification</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Notification</li>
                </ol>
              </div>
            </div>
            <div class="d-flex justify-content-end">
                  <a href="addnotification.php" class="btn btn-primary btn-sm">Add</a>
             </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Notification</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                   <<table class="table table-bordered">
  <thead>
    <tr>
      <th style="width: 10px">#</th>
      <th>Title</th>
      <th>Message</th>
      <th>Date Sent</th>
      <th>Status</th>
      <th>Manage</th>
    </tr>
  </thead>
  <tbody>
    <tr class="align-middle">
      <td>1.</td>
      <td>System Maintenance</td>
      <td>The system will be down for maintenance at midnight.</td>
      <td>07/15/2025 - 02:00 PM</td>
      <td><span class="badge bg-warning text-dark">Unread</span></td>
      <td>
        <a href="editnotification.php" class="btn btn-sm btn-primary me-1">
          <i class="bi bi-pencil-square"></i> Edit
        </a>
        <a href="#" class="btn btn-sm btn-secondary">
          <i class="bi bi-eye"></i> View
        </a>
      </td>
    </tr>
  </tbody>
</table>


                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
            
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
<?php include "../layouts/footer.php" ?>