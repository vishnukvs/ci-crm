<? $this->load->view('include/header');?>
<? $this->load->view('include/admin_navbar');?>
<div class="wrapper">
  <div class="row">
   <div class="span12">
    <div class="myform">
     <h3>Client Management</h3>
     <div class="side_button">
      <p><a href="add_newuser.html" class="btn btn-primary">Add new User</a></p>
    </div>
    <h5>Active Clients</h5>
    <table class="table  table-bordered table-striped">
      <tr>
        <th>Name</th>
        <th>Actions</th> 
      </tr>
      <tr>
        <td>James Cisco</td>
        <td>
          <a class="btn btn-info" href="out_email.html">
            <i class="icon-envelope icon-white"></i>  
            Email                                            
          </a>
          <a class="btn btn-info" href="edit_client.html">
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
        <td>Michel Fischman</td>
        <td>
          <a class="btn btn-info" href="out_email.html">
            <i class="icon-envelope icon-white"></i>  
            Email                                            
          </a>
          <a class="btn btn-info" href="edit_client.html">
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
      <td>Larry Ellison</td>
      <td>
        <a class="btn btn-info" href="out_email.html">
          <i class="icon-envelope icon-white"></i>  
          Email                                            
        </a>
        <a class="btn btn-info" href="edit_client.html">
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
<h5>Inactive Clients</h5>
<table class="table  table-condensed table-bordered table-striped">
  <tr>
    <th>Name</th>
    <th>Access Level</th> 
    <th>Actions</th> 
  </tr>
  <tr>
    <td>Corinne McPherson</td>
    <td>Client</td> 
    <td>
      <a class="btn btn-info" href="out_email.html">
        <i class="icon-envelope icon-white"></i>  
        Email                                            
      </a>
      <a class="btn btn-info" href="edit_client.html">
       <i class="icon-edit icon-white"></i>  
       Edit                                            
     </a>
     <a class="btn btn-success" href="#">
      <i class="icon-ok icon-white"></i> 
      Activate
    </a>
  </td>
</tr>
<tr>
  <td>James Paterson</td>
  <td>Dj</td> 
  <td>
    <a class="btn btn-info" href="out_email.html">
      <i class="icon-envelope icon-white"></i>  
      Email                                            
    </a>
    <a class="btn btn-info" href="edit_client.html">
     <i class="icon-edit icon-white"></i>  
     Edit                                            
   </a>
   <a class="btn btn-success" href="#">
    <i class="icon-ok icon-white"></i> 
    Activate
  </a>
</td>
</tr>
</div>
</div><!--/span12-->
</div><!--/end of row-->
</div><!--/end of wrapper-->
<? $this->load->view('include/footer');?>
