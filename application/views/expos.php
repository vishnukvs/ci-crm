<? $this->load->view('include/header');?>
<? $this->load->view('include/admin_navbar');?>
<div class="wrapper">
    <div class="row">
     <div class="span12">
     <form class="form-horizontal myform"action="#"method="post">
    <fieldset>
      <h3>View an Expo</h3>
      <div class="control-group">
       <label class="control-label"for="expoDate">Expo Date</label>
        <div class="controls">
         <div class="input-prepend">
          <span class="add-on">
           <i class="icon-calendar"></i></span>
           <input type="text"class="input-medium"placeholder="9/04/2013" readonly="true">
         </div>
       </div>
     </div>
     <div class="control-group">
      <label class="control-label"for="exponame">Expo Name</label>
      <div class="controls">
        <input type="text"class="input-medium" name="expoName" placeholder="Test Expo" readonly="true">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label"for="location">Location</label>
      <div class="controls">
        <input type="text"class="input-medium"name="location"placeholder="Melbourne" readonly="true">
      </div>
    </div>
     </fieldset>
      </form>
    </div>
  </div>
</div><!--/end of wrapper-->
<? $this->load->view('include/footer');?>