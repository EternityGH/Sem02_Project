<?php 

include('header.php');

?>

<!-- Begin Page Content -->
	<div class="container-fluid">

	  	<!-- Page Heading -->
  		<h1 class="h3 mb-4 text-gray-800">Brands - Management</h1>
		
		<!-- DataTales Example -->
        <div class="card shadow mb-4">
        	<div class="card-header py-3">
              	<input type="search" class="form-control float-left table-search" placeholder="Search..." id="search">
                <a href="add_brand.php" class="float-right">Add New Brand</a>
            </div>
            <div class="card-body">
              	<div class="table-responsive">
                	<table class="table table-bordered table-hover customer" width="100%" cellspacing="0">
                  		<thead class="thead-dark text-center">
		                    <tr>
		                      	<th>Brand Name</th>
		                      	<th>Introduce</th>
                            <th>Background</th>
		                      	<th colspan="2">Action</th>
		                    </tr>
                  		</thead>
                  		<tbody class="text-center" id="dataTable">
                  			<?php 
                  			foreach ($brands as $brand) {
                          $spec = json_decode($brand['Specification'], true);
                  			?>
		                    <tr>
		                      	<td><?=$brand['BrandName']?></td>
		                      	<td><?=$spec['Intro']?></td>
                            <td><img src="../<?=$spec['Background']?>" height="50px" width="150px"></td>
		                      	<td><a href="edit_brand.php?id=<?=$brand['ID']?>" style="color: #1c1c1c"><i class="fas fa-edit"></i></a></td>
		                      	<td>
                              <a href="#" data-toggle="modal" data-target="#confirm-delete<?=$brand['ID']?>" style="color: #1c1c1c">
                                <i class="fas fa-trash-alt"></i>
                              </a>
                            </td>
		                    </tr>
                        <!-- Modal Delete -->
                        <div class="modal fade" id="confirm-delete<?=$brand['ID']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      Delete Brand
                                  </div>
                                  <div class="modal-body">
                                      If you delete brand, all watches which have brand will be deleted. <br>
                                      Are you Sure?
                                  </div>
                                  <div class="modal-footer">
                                      <a href="brand.php?id=<?=$brand['ID']?>" class="btn btn-danger">Yes</a>
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
      'Delete!',
      'Your brand has been deleted.',
      'success'
    )
</script>
<?php
}

?>