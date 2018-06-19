<?php require "includes/header.php"; ?>
<?php require "includes/menu.php"; ?>

       

        <div class="right_col" role="main">
          <!-- top tiles -->          

          <div class="row">            

            <div class="col-md-12">


              <?php if($this->session->flashdata('success')){?>
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <?php echo $this->session->flashdata('success'); ?>
              </div>
              <?php } ?>

              <?php if($this->session->flashdata('error')){?>
              <div class="alert alert-danger alert-dismissible fade in"" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <?php echo $this->session->flashdata('error'); ?>
              </div>
              <?php } ?>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="title">Add General Awareness</h3>   
                </div>
                <div class="panel-body block">
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                    <div class="form-group">
                      <label class=" col-md-1 col-sm-3 col-xs-12" for="first-name">Date <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" id="single_cal1" placeholder="Date" aria-describedby="inputSuccess2Status">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Content <span class="required">*</span>
                      </label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                       <textarea name="content"></textarea>
                      </div>
                    </div>
                    
                    <br />

                    <div class="ln_solid"></div>
                      
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
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script>

  CKEDITOR.replace( 'content' );
  function AddQuestion(){
    console.log(1);
    var content = $('#editor-one').html();
    var date = $('#single_cal1').val();

    $.ajax({
            url: '<?php echo base_url(); ?>home/add_general_awareness_data',
            type: 'POST',
            data: {
                content: content,
                date: date
            },
            success: function(data){
              console.log(data);
              window.location.reload();
            },
        });

    return false;
  }
</script>

<?php require "includes/footer.php"; ?>