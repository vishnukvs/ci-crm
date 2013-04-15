<?php $this->load->view('include/header');?>
<?php $this->load->view('include/admin_navbar');?>
<div class="wrapper">
  <div class="row">
    <div class="span12">
      <form class="form-horizontal myform" method="post"action="#">
       <h3>Manage Your Documents</h3>
       <div class="control-group">
        <label class="control-label" for="upload_Doc">Upload a Document</label>
        <div class="controls">
          <input type="file" class="input-medium" name="uploadDoc"id="uploadDoc">
        </div>
      </div>
      <div class="controls">
        <button type="submit" class="btn btn-inverse" id="uploadNow">Upload Now</button>
      </div>
    </form>
    <div class="myform">
     <h3>Active Documents</h3>
     <table class="table tablesorter table-bordered table-striped" id="myTable">
       <tr>
        <th>Document</th>
        <th>Action</th>
      </tr>
      <tr>
        <td><a href="#">Sampledoc 1</a></td>
        <td>
          <a class="btn btn-primary" href="#">
            <i class="icon-remove icon-white"></i>Deactivate</a>                           
            <a class="btn btn-danger" href="#">
              <i class="icon-trash icon-white"></i>Delete</a>
            </td> 
          </tr>
          <tr>
            <td><a href="#">Sampledoc 2</a></td>
            <td>
              <a class="btn btn-primary" href="#">
                <i class="icon-remove icon-white"></i>Deactivate</a>                           
                <a class="btn btn-danger" href="#">
                  <i class="icon-trash icon-white"></i>Delete</a>
                </td> 
              </tr>
              <tr>
                <td><a href="#">Sampledoc 3</a></td>
                <td>
                  <a class="btn btn-primary" href="#">
                    <i class="icon-remove icon-white"></i>Deactivate</a>                           
                    <a class="btn btn-danger" href="#">
                      <i class="icon-trash icon-white"></i>Delete</a>
                    </td> 
                  </tr>
                </table>
                <h3>InActive Documents</h3>
                <table class="table tablesorter table-bordered table-striped" id="myTable">
                 <tr>
                  <th>Document</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td><a href="#">Sampledoc 1</a></td>
                  <td>
                    <a class="btn btn-success" href="#">
                      <i class="icon-check icon-white"></i>Activate</a>                           
                      <a class="btn btn-danger" href="#">
                        <i class="icon-trash icon-white"></i>Delete</a>
                      </td> 
                    </tr>
                    <tr>
                      <td><a href="#">Sampledoc 2</a></td>
                      <td>
                        <a class="btn btn-success" href="#">
                          <i class="icon-check icon-white"></i>Activate</a>         
                          <a class="btn btn-danger" href="#">
                            <i class="icon-trash icon-white"></i>Delete</a>
                          </td> 
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
       <? $this->load->view('include/footer');?>