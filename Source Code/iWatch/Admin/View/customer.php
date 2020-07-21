<?php 


include('header.php');
?>

<!-- Begin Page Content -->
	<div class="container-fluid">

	  	<!-- Page Heading -->
  		<h1 class="h3 mb-4 text-gray-800">Customers - Management</h1>
		
		<!-- DataTales Example -->
        <div class="card shadow mb-4">
        	<div class="card-header py-3">
              	<input type="search" class="form-control float-left table-search" placeholder="Search..." id="search">
            </div>
            <div class="card-body">
              	<div class="table-responsive">
                	<table class="table table-bordered table-hover customer" width="100%" cellspacing="0">
                  		<thead class="thead-dark text-center">
		                    <tr>
		                      	<th>First Name</th>
		                      	<th>Last Name</th>
		                      	<th>Email</th>
		                      	<th>Phone</th>
		                      	<th>Address</th>
		                      	<th>Gender</th>
		                      	<th colspan="2">Action</th>
		                    </tr>
                  		</thead>
                      <?php 
                      if (count($customers) > 0) {
                        
                      
                      ?>
                  		<tbody class="text-center" id="dataTable">
                  			<?php 
                  			foreach ($customers as $customer) {
                  				if($customer['Role'] != 1){
                  					continue;
                  				}
                          $date = date_create($customer['CreateAt']);
                          $date =  date_format($date, 'd-m-Y');
                  			?>
		                    <tr>
		                      	<td><?=$customer['FirstName']?></td>
		                      	<td><?=$customer['LastName']?></td>
		                      	<td><?=$customer['Email']?></td>
		                      	<td><?=$customer['Phone']?></td>
		                      	<td><?=$customer['Address']?></td>
		                      	<td><?=$customer['Gender']?></td>
                            <td>
                              <a href="view_customer.php?id=<?=$customer['ID']?>" style="color: #1c1c1c">
                                <i class="fas fa-info-circle"></i>
                              </a>
                            </td>
		                      	<td>
                              <a href="#" data-toggle="modal" data-target="#confirm-delete<?=$customer['ID']?>" style="color: #1c1c1c">
                                <i class="fas fa-trash-alt"></i>
                              </a>
                            </td>
		                    </tr>
                        <!-- Modal Delete -->
                        <div class="modal fade" id="confirm-delete<?=$customer['ID']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      Delete Customer
                                  </div>
                                  <div class="modal-body">
                                      Are you Sure?
                                  </div>
                                  <div class="modal-footer">
                                      <a href="customer.php?id=<?=$customer['ID']?>" class="btn btn-danger">Yes</a>
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!-- End modal delete -->
		                    <?php 
	                	   }
		                    ?>
                  		</tbody>
                      <?php 
                      }
                      ?>
                	</table>
                	<nav class="mt-4 float-right" aria-label="Page navigation example">
                		<?=$page->getPagination()?>
                	</nav>
              	</div>
            </div>
      	</div>


	</div>



<!-- /.container-fluid -->


<?php 

include('footer.php');

?>

<?php 

if (isset($_GET['success'])) {
  # code...
?>
<script type="text/javascript">
  Swal.fire(
      'Deleted!',
      'Your account has been deleted.',
      'success'
    )
</script>
<?php
}

?>