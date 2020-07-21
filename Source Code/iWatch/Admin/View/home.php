<?php 

include('header.php');

?>

<!-- Begin Page Content -->
<div class="container-fluid">
  
      <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

  <div class="row">
    <div class="col-sm-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">New Customers (MONTHLY)</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$newCustomer?></div>
              </div>
              <div class="col-auto">
                  <i class="fas fa-users fa-2x text-gray-300"></i>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">New Watches (MONTHLY)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$newWatch?></div>
            </div>
            <div class="col-auto">
                <i class="far fa-clock fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">New Feedbacks (MONTHLY)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$newFeedback?></div>
            </div>
            <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->



<?php 

include('footer.php');

?>