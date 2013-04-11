<?php $this->load->view('include/header');?>
<?php $this->load->view('include/admin_navbar');?>
<div class="wrapper">
  <div class="row">
    <div class="span12">
      <h3> In the Main Dashboard</h3>
      <div class="row" id="main">
        <div class="container">
          <div class="span3 admin-left-bar" >
            <ul class="side-nav">
              <li class="active">
                <a href="<?=base_url('/dashboard');?>"><i class="icon-home icon-white"></i> Dashboard</a>
              </li>
              <li>
                <a href="<?=base_url('/addnewuser');?>"><i class="icon-user icon-white"></i> User Management</a>
              </li>
              <li>
                <a href="<?=base_url('/todo');?>"><i class="icon-calendar icon-white"></i> Todo List</a>
              </li>
              <li>
                <a href="<?=base_url('/documents');?>"><i class="icon-folder-open icon-white"></i> File Management</a>
              </li>
              <li>
                <a href="<?=base_url('/notes');?>"><i class="icon-pencil icon-white"></i> Notes </a>
              </li>
              <li><a href="#"><i class="icon-bullhorn icon-white"></i> Messages <span class="badge badge-warning">2</span></a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="collapse" data-target="#report-dropdown" href="#"><i class="icon-book icon-white"></i> Reports <b class="caret"></b></a>
                <ul id="report-dropdown" class="collapse">
                  <li><a href="#">Revenue</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div><!--  Main Container Ends Here -->  
      </div> <!-- main ends here -->
    </div>
  </div><!--/end of row-->
</div><!--/end of wrapper-->
<?php $this->load->view('include/footer');?>