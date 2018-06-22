<?php require "includes/header.php"; ?>
<?php require "includes/menu.php"; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->          

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
                        <th>Show Category</th>
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
                          &nbsp;<a href="<?php echo base_url(); ?>home/list_subject/<?php echo $cat->id; ?>"><i class="fa fa-eye fa-2x" title="See Chapters" style="color:#05a4d4"></i></a>
                        </td>
                      </tr>

                      <?php foreach($q as $key1 => $q1){?>
                        <tr>
                          <td><?php echo $key1+1; ?></td>
                          <td><?php echo $q1->name; ?></td>
                          <td>                            
                            &nbsp;<a href="<?php echo base_url(); ?>home/list_subject/<?php echo $q1->id; ?>"><i class="fa fa-eye fa-2x" title="See Chapters" style="color:#05a4d4"></i></a>

                          </td>
                        </tr>
                      <?php } ?>
                      <?php } ?>

                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
          

           


            

          </div>


          
        </div>
        <!-- /page content -->
<?php require "includes/footer.php"; ?>