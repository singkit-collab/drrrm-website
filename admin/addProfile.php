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
              <div class="col-sm-6"><h3 class="mb-0">Add Profile</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
              </div>
            </div>
            <div class="d-flex justify-content-end">
                   <a href="profile.php" class="btn btn-primary btn-sm">Back</a></a>
             </div>
<div class="row">
        <div class="col-md-12">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quick Example</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form>
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="row">

                      <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name:</label>
                        <input
                          type="text"
                          class="form-control"
                     
                        />
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" />
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Course:</label>
                        <input
                          type="text"
                          class="form-control"
                     
                        />
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Age:</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" />
                      </div>


                        <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address:</label>
                        <input
                          type="email"
                          class="form-control"
                     
                        />
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contact Number:</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" />
                      </div>
                    </div>
                    </div>

                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
             
            
              </div>
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
           
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
<?php include "../layouts/footer.php" ?>