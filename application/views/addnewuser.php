<?php $this->load->view('include/header');?>
<?php $this->load->view('include/admin_navbar');?>
<div class="wrapper">
  <div class="row">
    <div class="span12">
     <form class="form-horizontal myform" action="#" method="post">
      <h3>Create New User</h3>
      <fieldset>
        <div class="control-group">
          <label class="control-label" for="displayname">Display Name</label>
          <div class="controls">
            <input type="text" class="input-medium" name="displayname">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="email">Email </label>
          <div class="controls">
            <input type="text" class="input-medium" name="email">
          </div>
        </div>
        <div class="control-group">
         <label class="control-label" for="password">Password</label>
         <div class="controls">
          <input type="text" class="input-medium" name="password">
          <button class="btn btn-success">New Random Password</button>
        </div>
      </div>
      <div class="control-group" >
        <label class="control-label"for="phone">Telephone</label>
        <div class="controls">
          <input type="text" class="input-medium" name="telephone" >
        </div>
      </div>
      <div class="control-group">
       <label class="control-label" for="accesslevel">Access Level</label>
       <div class="controls">
        <select class="input-medium" name="accesslevel">
          <option name="Admin">Admin</option>
          <option name="GeneralSataff">General Staff</option>
          <option name="Dj">DJ/Talent</option>
        </select>
      </div>
    </div>
    <div class="control-group">
     <div class="controls">
       <button type="submit"class="btn btn-primary">Create User</button>
     </div>
   </div>
 </fieldset> 
</form><!--/end of form-->
</div>
</div>
</div><!--/end of wrapper-->
<? $this->load->view('include/footer');?>