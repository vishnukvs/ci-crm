<?php $this->load->view('include/header');?>
<?php $this->load->view('include/admin_navbar');?>
<form class="form-horizontal" action="<?=base_url('/form');?>" method="post" >
 
      <h1>Register  </h1>
    <fieldset>
     <legend>Personal Details</legend>
        <div class="control-group">
        <label class="control-label" for="input01">Given Name</label>
          <div class="controls">
            <input type="text" placeholder="Enter First Name" class="input-medium"name="firstname">
         </div>
        </div>
        <div class="control-group">
        <label class="control-label" for="input01">Surname</label>
          <div class="controls">
            <input type="text" placeholder="Enter SurName" class="input-medium"name="surname" >
         </div>
       </div>
       <div class="control-group">
        <label class="control-label" for="input01">Email</label>
          <div class="controls">
           <input type="text" placeholder="Enter Your Email" class="input-medium"name="email" >
         </div>
        </div>
          <div class="control-group">
          <label class="control-label">Gender</label>
          <div class="controls">
          <label class="radio inline">
           <input type="radio" value="male" checked="checked" name="gender">
                Male
              </label>
              <label class="radio inline">
             <input type="radio" value="female" name="gender">
                Female
              </label>
            </div>
           </div>
            <div class="control-group">
          <label class="control-label" for="input01">Contact Number</label>
          <div class="controls">
           <input type="text" placeholder="Enter Phone Number" class="input-medium"name="phone">
         </div>
        </div>
        <legend>Do you have any health condtions?</legend>
        <div class="controls-group">
          <div class="controls">
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions"<?php echo set_checkbox('health_condtions', 'asthma'); ?>  value="asthma"> Asthama
              </label>
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions"<?php echo set_checkbox('health_condtions', 'heartproblem'); ?> value="heartproblem"> Heart Problems
              </label>
              <label class="checkbox inline">
              <input type="checkbox" name="health_condtions"value="highbp"<?php echo set_checkbox('health_condtions', 'highbp'); ?>> High Blood Pressure
              </label>
            </div>
            <div class="controls">
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions" value="epilepsy"<?php echo set_checkbox('health_condtions', 'epilepsy'); ?>> Epilepsy
              </label>
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions" value="pregnency"<?php echo set_checkbox('health_condtions', 'pregnency'); ?>> Pregnency
              </label>
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions" value="lowbp"<?php echo set_checkbox('health_condtions', 'lowbp'); ?>> Low Blood Pressure
              </label>
            </div>
          </div>
       <p> <button type="submit" class="btn btn-large btn-primary">Submit</button></p>
   
  </form>
