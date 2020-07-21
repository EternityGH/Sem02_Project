<?php 

include('header.php');


?>

<!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Watches - Management</h1>
    
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
                <input type="search" class="form-control float-left table-search" placeholder="Search..." id="search">
                <a href="add_watch.php" class="float-right">Add New Watch</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover watch" width="100%" cellspacing="0">
                      <thead class="thead-dark">
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Diameter</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th>For</th>
                            <th>Image</th>
                            <th>Create At</th>
                            <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody class="text-center" id="dataTable">
                        <?php 
                        foreach ($watches as $watch) {
                          if ($watch['Type'] == 0) {
                            # code...
                            $type = 'Men';
                          } else {
                            $type = 'Lady';
                          }
                          $date   = date_create($watch['CreateAt']);
                          $date   = date_format($date, 'd-m-Y');
                          $image  = json_decode($watch['Image'], true);
                          $spec   = json_decode($watch['Specification'], true);

                        ?>
                        <tr>
                            <td><?=$watch['WatchName']?></td>
                            <td><?=$spec['Diameter']?>MM</td>
                            <td>$<?=$watch['Price']?></td>
                            <td><?=$watch['BrandName']?></td>
                            <td><?=$type?></td>
                            <td><img src="../<?=$image[0]?>" width="50px" height="50px"></td>
                            <td><?=$date?></td>
                            <td><a href="edit_watch.php?id=<?=$watch['ID']?>" style="color: #1c1c1c"><i class="fas fa-edit"></i></a></td>
                            <td>
                              <a href="#" data-toggle="modal" data-target="#confirm-delete<?=$watch['ID']?>" style="color: #1c1c1c">
                                <i class="fas fa-trash-alt"></i>
                              </a>
                            </td>
                        </tr>
                        <!-- Modal Delete -->
                        <div class="modal fade" id="confirm-delete<?=$watch['ID']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      Delete Watch
                                  </div>
                                  <div class="modal-body">
                                      Are you Sure?
                                  </div>
                                  <div class="modal-footer">
                                      <a href="watch.php?id=<?=$watch['ID']?>" class="btn btn-danger">Yes</a>
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
      'Your watch has been deleted.',
      'success'
  )
</script>
<?php
}

?>