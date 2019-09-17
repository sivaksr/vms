

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Category
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Category</a></li>
            <li class="<?php echo base_url('category/edit');?>">Edit Category</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Edit Category</h3>
                <span class="pull-right"><a href="<?php echo base_url('category/lists');?>" class="btn btn-primary btn-sm">Category List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                
                 
                        <form id="defaultForm" name="defaultForm" action="<?php echo base_url('category/editpost');?>" method="post">
                         <input type="hidden" name="c_id" id="c_id" value="<?php echo isset($edit_category['c_id'])?$edit_category['c_id']:''?>" >
						 <div class="row">
						 <div class="col-md-6">   
						<div class="form-group">
							<label>Category Name</label>
							<input type="text" class="form-control" placeholder="Enter Category Name" name="category"  value="<?php echo isset($edit_category['category'])?$edit_category['category']:''?>">
							
						</div>
						</div>
						</div>
						
						
						
						
							 
							 
                            <div class="">
                                <button type="submit" class="btn btn-md btn-primary btn-flat">Submit</button>
                            </div>
                        </form>
                   
               
            </div>
        </div>
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
 function remove_subcategory(p_id,id){
	if(p_id!=''){
		 jQuery.ajax({
					url: "<?php echo base_url('category/remove_subcategory');?>",
					data: {
						p_id: p_id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
						jQuery('#oldid'+id).remove();
						jQuery('#oldid'+id).hide();
					}
				 }
				});
			}
	
}
</script>
<script>
  $(function () {
   
    $('.datepicker').datepicker({
      autoclose: true
    });

    
  });
</script>
<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input type='text' name='sub_category[]' id='name"+i+"'  class='form-control' placeholder='Enter Sub-Category Name'/></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>
<script>
   $(document).ready(function() {
     
      $('#defaultForm').bootstrapValidator({
   //      
          fields: {
   		
   		category:{
   		   validators: {
   				notEmpty: {
   					message: 'Category Name is required'
   				}
   			}
              }
   		
   				
   		
          }
      });
   
   });
</script>

