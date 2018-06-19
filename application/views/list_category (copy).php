<?php require "includes/header.php"; ?>
<?php require "includes/menu.php"; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->          
          <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="title">List Category</h3>   
                </div>
                <div class="panel-body block">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status</th>
                      </tr>
                    </thead>


                    <tbody>
                      <?php 
                        foreach($category as $key => $cat){ 
                          $q = $this->db->get_where('category',array('parent_id'=>$cat->id))->result();
                      ?>
                      <tr style="background: #eee">
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $cat->name; ?></td>
                        <td>                          
                          <?php
                            if($cat->status == 1){?>                             
                              <a href="<?php echo base_url(); ?>home/active_or_deactivate/category/0/<?php echo $cat->id; ?>"><i class="fa fa-thumbs-o-up fa-2x" title="Deactivate?" style="color:green"></i></a>
                            <?php } else {?>
                            <a href="<?php echo base_url(); ?>home/active_or_deactivate/category/1/<?php echo $cat->id; ?>"><i class="fa fa-thumbs-o-up fa-2x" title="Activate?" style="color:red"></i></a>
                            <?php } ?>                          
                        </td>
                      </tr>

                      <?php foreach($q as $key1 => $q1){?>
                        <tr>
                          <td><?php echo $key1+1; ?></td>
                          <td><?php echo $q1->name; ?></td>
                          <td>                            
                           <?php
                            if($q1->status == 1){?>                             
                              <a href="<?php echo base_url(); ?>home/active_or_deactivate/category/0//<?php echo $q1->id; ?>"><i class="fa fa-thumbs-o-up fa-2x" title="Deactivate?" style="color:green"></i></a>
                            <?php } else {?>
                            <a href="<?php echo base_url(); ?>home/active_or_deactivate/category/1/<?php echo $q1->id; ?>"><i class="fa fa-thumbs-o-up fa-2x" title="Activate?" style="color:red"></i></a>
                            <?php } ?> 

                          </td>
                        </tr>
                      <?php } ?>
                      <?php } ?>

                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="title">Add Category</h3>   
                </div>
                <div class="panel-body block">
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Select Parent Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="parent_id" class="form-control col-md-7 col-xs-12">
                            <option value="">--Select--</option>
                            <?php
                              $q = $this->db->get_where('category',array('parent_id'=>0,'status'=>'1'))->result();
                              foreach($q as $q1){?>
                              <option value="<?php echo $q1->id; ?>"><?php echo $q1->name; ?></option>
                              <?php } ?>
                            ?>
                          </select>
                        </div>
                      </div>
                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                          <button class="btn btn-primary" type="button">Cancel</button>                          
                        </div>
                      </div>

                </div>
              </div>
            </div>
          </div>
          
          

           


            

          </div>


          
        </div>
        <!-- /page content -->
<?php require "includes/footer.php"; ?>