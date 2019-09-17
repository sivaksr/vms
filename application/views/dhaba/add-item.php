

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Menu Item
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Menu</a></li>
            <li class="<?php echo base_url('menu/add'); ?>">Add Item</li>
        </ol>
    </section>

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="mt-0 pull-left mb-0">Add Item</h3>
                <span class="pull-right"><a href="<?php echo base_url('menu/lists'); ?>" class="btn btn-primary btn-sm">Items List</a></span>
                <div class="clearfix">&nbsp;</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" id="defaultForm" method="post" action="<?php echo base_url('menu/addpost'); ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="form-control" name="category_name" onchange="get_subcategory_list(this.value);">
                                            <option value="">Select</option>
                                            <?php foreach ($category_list as $list){ ?>
								<option value="<?php echo $list['c_id']; ?>"><?php echo $list['category']; ?></option>
								<?php }?>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Sub Category</label>
                                        <select class="form-control"  id="sub_category_name" name="sub_category_name">
                                            <option value="">Select</option>
                                           
                                        </select>
                                    </div>
                                </div> 
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Iamge</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type=" text" class="form-control" name="name" placeholder="Enter Name of the item">
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Cost</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="cost" placeholder="Enter Cost of the item"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class=" control-label">Comment</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="comment" placeholder="Enter here" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <ul class="list-inline text-center">
                                <li><button type="submit" class="btn btn-primary">Submit</button></li>
                            </ul>
                        </form>
						
						
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
function get_subcategory_list(category_name){
	if(category_name !=''){
		    jQuery.ajax({
   			url: "<?php echo base_url('menu/subcategory_list_data');?>",
   			data: {
				category_name: category_name,
			},
   			type: "POST",
   			format:"Json",
   					success:function(data){
						
						if(data.msg=1){
							var parsedData = JSON.parse(data);
						//alert(parsedData.list.length);
							$('#sub_category_name').empty();
							$('#sub_category_name').append("<option>select</option>");
							for(i=0; i < parsedData.list.length; i++) {
								//console.log(parsedData.list);
							$('#sub_category_name').append("<option value="+parsedData.list[i].s_id+">"+parsedData.list[i].sub_category+"</option>");                      
                    
								
							 
							}
						}
						
   					}
           });
	   }
}
</script>
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
   		sub_category_name:{
   		   validators: {
   				notEmpty: {
   					message: '	Sub Category is required'
   				}
   			   }
              },
   			comment:{
   		   validators: {
   				notEmpty: {
   					message: '	Comment is required'
   				}
   			   }
              },
   		name:{
   		   validators: {
   				notEmpty: {
   					message: '	Sub Category is required'
   				}
   			   }
              },
			  cost: {
                 validators: {
					notEmpty: {
						message: 'Cost is required'
					},
					regexp: {
					regexp:/^[0-9]*$/,
					message:' Cost must be digits'
					}
				
				}
            },
		image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            }
		
		
		
		
		
		
          }
      });
   
   });
</script>



