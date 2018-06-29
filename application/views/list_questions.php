<?php require "includes/header.php"; ?>
<?php require "includes/menu.php"; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->          

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="title">List Questions: <?php $this->db->get_where("subject",array('id'=>$this->uri->segment(3)))->row()->name; ?></h3>   
                </div>
                <div class="panel-body block">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Add / View Questions</th>
                      </tr>
                    </thead>


                    <tbody>
                      <?php 
                        foreach($subject as $key => $sub){                           
                      ?>
                      <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $sub->name; ?></td>
                        <td>
                        <a href="<?php echo base_url(); ?>home/list_questions/<?php echo $sub->id; ?>"><i class="fa fa-search fa-2x" title="List Question" style="color:#05a4d4"></i></a>                         
                          &nbsp;<a href="<?php echo base_url(); ?>home/add_questions/<?php echo $sub->id; ?>"><i class="fa fa-plus fa-2x" title="Add Question" style="color:#05a4d4"></i></a>
                        </td>
                      </tr>                      
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