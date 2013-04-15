<? $this->load->view('include/header');?>
<? $this->load->view('include/admin_navbar');?>
<div class="wrapper">
  <div class="row">
    <div class="span12">
     <div class="side_button">
       <p><a href="edit_expo.html"class="btn btn-primary">Create an Expo</a></p>
     </div>
     <h3>Expos</h3>
     <table class="table table-bordered table-striped">
      <tr>
        <th>Expo Date</th>
        <th>Expo Name</th>
        <th>Location</th>
        <th>Actions</th>
      </tr>
      <tr>
        <td>8/04/2013</td>
        <td>DJ Expo Meet</td>
        <td>Melbourne</td>
        <td><a class="btn btn-success" href="view_expo.html">
          <i class="icon-zoom-in icon-white"></i>    View                                            
        </a>
        <a class="btn btn-info" href="edit_expo.html">
          <i class="icon-edit icon-white"></i>  
          Edit                                            
        </a>
        <a class="btn btn-danger" href="#">
          <i class="icon-trash icon-white"></i> 
          Delete
        </a>
      </td>
    </tr>
      <tr>
        <td>18/04/2013</td>
        <td>DJ Expo Meet</td>
        <td>Melbourne</td>
        <td><a class="btn btn-success" href="view_expo.html">
          <i class="icon-zoom-in icon-white"></i>    View                                            
        </a>
        <a class="btn btn-info" href="edit_expo.html">
          <i class="icon-edit icon-white"></i>  
          Edit                                            
        </a>
        <a class="btn btn-danger" href="#">
          <i class="icon-trash icon-white"></i> 
          Delete
        </a>
      </td>
    </tr>
      <tr>
        <td>29/04/2013</td>
        <td>DJ Expo Meet</td>
        <td>Sydney</td>
        <td><a class="btn btn-success" href="view_expo.html">
          <i class="icon-zoom-in icon-white"></i>    View                                            
        </a>
        <a class="btn btn-info" href="edit_expo.html">
          <i class="icon-edit icon-white"></i>  
          Edit                                            
        </a>
        <a class="btn btn-danger" href="#">
          <i class="icon-trash icon-white"></i> 
          Delete
        </a>
      </td>
    </tr>
      <tr>
        <td>30/04/2013</td>
        <td>DJ Expo Meet</td>
        <td>Perth</td>
        <td><a class="btn btn-success" href="view_expo.html">
          <i class="icon-zoom-in icon-white"></i>    View                                            
        </a>
        <a class="btn btn-info" href="edit_expo.html">
          <i class="icon-edit icon-white"></i>  
          Edit                                            
        </a>
        <a class="btn btn-danger" href="#">
          <i class="icon-trash icon-white"></i> 
          Delete
        </a>
      </td>
    </tr>
  </table>
</div>
</div><!--/end of span12-->
</div><!--/end of wrapper-->
<? $this->load->view('include/footer');?>