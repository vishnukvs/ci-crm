<? $this->load->view('include/header');?>
<? $this->load->view('include/admin_navbar');?>
  <div class="wrapper">
      <div class="row">
       <div class="span12">
        <div class="myform">
         <h3>Email Management</h3>
         <h5>Active Templates</h5>
         <div class="side_button">
          <p><a href="create_template.html" class="btn btn-primary">Create A NewTemplate</a></p>
        </div>
        <table class="table  table-bordered table-striped">
          <tr>
            <th>Template Name</th>
            <th>Actions</th> 
          </tr>
          <tr>
            <td>Booked Bartercard</td>
            <td><a class="btn btn-info" href="edit_emailtemplate.html">
              <i class="icon-edit icon-white"></i>  
              Edit                                            
            </a>
            <a class="btn btn-danger" href="#">
              <i class="icon-trash icon-white"></i> 
              DeActivate
            </a>
          </td>
        </tr>
        <tr>
          <td>Booked Party</td>
          <td><a class="btn btn-info" href="edit_emailtemplate.html">
            <i class="icon-edit icon-white"></i>  
            Edit                                            
          </a>
          <a class="btn btn-danger" href="#">
            <i class="icon-trash icon-white"></i> 
            DeActivate
          </a>
        </td>
      </tr>
      <tr>
        <td>Booked Wedding</td>
        <td><a class="btn btn-info" href="edit_emailtemplate.html">
          <i class="icon-edit icon-white"></i>  
          Edit                                            
        </a>
        <a class="btn btn-danger" href="#">
          <i class="icon-trash icon-white"></i> 
          DeActivate
        </a>
      </td>
    </tr>
  </table>
  <h3>Inactive Email Templates</h3>
  <table class="table  table-condensed table-bordered table-striped">
    <tr>
      <th>Template Name</th>
      <th>Actions</th> 
    </tr>
    <tr>
      <td>Corinne McPherson</td>
      <td>
        <a class="btn btn-info" href="edit_emailtemplate.html">
          <i class="icon-edit icon-white"></i>  
          Edit                                            
        </a>
        <a class="btn btn-success" href="#">
          <i class="icon-ok icon-white"></i> 
          Activate
        </a>
      </td>
    </tr>
  </table>
  </div>
</div><!--/span12-->
</div><!--/end of row-->
</div><!--/end of wrapper-->
<? $this->load->view('include/footer');?>
