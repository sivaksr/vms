

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sub Category
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Edit Sub Category</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Edit Category</h3>
                <span class="pull-right"><a href="<?php echo base_url('subcategory/lists');?>" class="btn btn-primary btn-sm">Category List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                
                 
                        <form id="defaultForm" name="defaultForm" action="<?php echo base_url('subcategory/editpost');?>" method="post">
                         <input type="hidden" name="s_id" id="s_id" value="<?php echo isset($edit_subcategory['s_id'])?$edit_subcategory['s_id']:'' ?>" >
						 <div class="row">
						 <div class="col-md-6">   
						<div class="form-group">
							<label>Category Name</label>
							<select id="category_name" name="category_name"  class="form-control" >
										<option value="">Select</option>
										<?php if(isset($category_list) && count($category_list)>0){ ?>
											<?php foreach($category_list as $list){ ?>
											
													<?php if($edit_subcategory['category_name']==$list['c_id']){ ?>
															<option selected value="<?php echo $list['c_id']; ?>"><?php echo $list['category']; ?></option>
													<?php }else{ ?>
															<option value="<?php echo $list['c_id']; ?>"><?php echo $list['category']; ?></option>
													<?php } ?>
											<?php } ?>
										<?php } ?>
										</select>	
								
								
								
								
								
						</div>
						</div>
						
						<div class="col-md-6">   
						<div class="form-group">
							<label>Sub Category</label>
							<input type="text" class="form-control" placeholder="Enter Category Name" name="sub_category" value="<?php echo isset($edit_subcategory['sub_category'])?$edit_subcategory['sub_category']:'' ?>" >
							
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
   		
   		category_name:{
   		   validators: {
   				notEmpty: {
   					message: 'Category Name is required'
   				}
   			}
              },
   		sub_category:{
   		   validators: {
   				notEmpty: {
   					message: 'Sub Category  is required'
   				}
   			}
              }
   		
   				
   		
          }
      });
   
   });
</script>

