

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Category
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Category</a></li>
            <li class="<?php echo base_url('category/add');?>">Add Category</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Add Category</h3>
                <span class="pull-right"><a href="<?php echo base_url('category/lists');?>" class="btn btn-primary btn-sm">Category List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                
                 
                        <form id="defaultForm" name="defaultForm" action="<?php echo base_url('category/addpost');?>" method="post">
                         <div class="row">
						 <div class="col-md-6">   
						<div class="form-group">
							<label>Category Name</label>
							<input type="text" class="form-control" placeholder="Enter Category Name" name="category" >
							
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

