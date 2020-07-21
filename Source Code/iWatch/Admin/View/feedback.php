<?php 

include('header.php');

?>

<!-- Begin Page Content -->
	<div class="container-fluid">

	  	<!-- Page Heading -->
  		<h1 class="h3 mb-4 text-gray-800">Feedbacks - Management</h1>
		
		<!-- DataTales Example -->
        <div class="card shadow mb-4">
        	<div class="card-header py-3">
              	<input type="search" class="form-control float-left table-search" placeholder="Search..." id="search">
            </div>
            <div class="card-body">
              	<div class="table-responsive">
                	<table class="table table-bordered table-hover watch" width="100%" cellspacing="0">
                  		<thead class="thead-dark">
		                    <tr class="text-center">
                            <th>Name Customer</th>
                            <th>Name Watch</th>
		                      	<th>Title</th>
		                      	<th>Content</th>
		                      	<th>Rating</th>
		                      	<th>Create At</th>
		                      	<th>Action</th>
		                    </tr>
                  		</thead>
                  		<tbody class="text-center" id="dataTable">
                  			<?php 
                  			foreach ($feedbacks as $feedback) {

                          $date = date_create($feedback['CreateAt']);
                          $date =  date_format($date, 'd-m-Y');
                  			?>
		                    <tr>
		                      	<td><?=$feedback['Name']?></td>
		                      	<td><?=$feedback['WatchName']?>MM</td>
		                      	<td><?=$feedback['Title']?></td>
		                      	<td><?=$feedback['Content']?></td>
		                      	<td><?=$feedback['Rating']?></td>
		                      	<td><?=$date?></td>
                            <td>
                              <a href="#" data-toggle="modal" data-target="#confirm-delete<?=$feedback['ID']?>" style="color: #1c1c1c;">
                                <i class="fas fa-trash-alt"></i>
                              </a>
                            </td>
                        </tr>
                        <!-- Modal Delete -->
                        <div class="modal fade" id="confirm-delete<?=$feedback['ID']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      Delete Watch
                                  </div>
                                  <div class="modal-body">
                                      Are you Sure?
                                  </div>
                                  <div class="modal-footer">
                                      <a href="feedback.php?id=<?=$feedback['ID']?>" class="btn btn-danger">Yes</a>
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
      'Deleted!',
      'Your feedback has been deleted.',
      'success'
    )
</script>
<?php
}

?>