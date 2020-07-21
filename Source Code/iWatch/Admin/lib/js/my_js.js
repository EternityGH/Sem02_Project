$(document).ready(function(){
  	$("#search").on("keyup", function() {
    	var value = $(this).val().toLowerCase();
    	$("#dataTable tr").filter(function() {
      		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    	});
  	});
  	$('#confirm-delete').on('show.bs.modal', function(e) {
	    $('#confirm-delete #btn-confirm-delete').attr('href', $(e.relatedTarget).data('href'));
	});
	$('#form-add').submit(function(event){
    $('#form-add button').html('<img src="../lib/images/background/ajax-loader.gif" />');
	});
  $('#form-edit').submit(function(event){
    $('#form-edit button').html('<img src="../lib/images/background/ajax-loader.gif" />');
  });
});