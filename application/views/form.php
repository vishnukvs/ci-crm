<?php $this->load->view('include/header');?>
<?php $this->load->view('include/admin_navbar');?>
<form class="form-horizontal" action="<?=base_url('/register');?>" method="post" >
      <h1>Register  </h1>
    <fieldset>
     <legend>Personal Details</legend>
        <div class="control-group">
        <label class="control-label" for="input01">Given Name</label>
          <div class="controls">
            <input type="text" placeholder="Enter First Name" class="input-medium"name="firstname" required="true">
         </div>
        </div>
        <div class="control-group">
        <label class="control-label" for="input01">Surname</label>
          <div class="controls">
            <input type="text" placeholder="Enter SurName" class="input-medium"name="surname" required="true">
         </div>
       </div>
        <div class="control-group">
         <label class="control-label" for="input01">Date of Birth</label>
         <div class="controls">
          <select class="input-small" size="1" name="dobMonth" id="dobMonth">
                  <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="Jul">Jul</option>
                    <option value="Aug">Aug</option>
                    <option value="Sep">Sep</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
                 <select class="input-small"size="1" name="dobDay" id="dobDay">
                  <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select class="input-small"size="1" name="dobYear" id="dobYear">
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
            </select>
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
        <label class="control-label" for="input01">Email</label>
          <div class="controls">
           <input type="text" placeholder="Enter Your Email" class="input-medium"name="email" required="true">
         </div>
        </div>
         <div class="control-group">
        <label class="control-label" for="input01">Contact Number</label>
          <div class="controls">
           <input type="text" placeholder="Enter Phone Number" class="input-medium"name="phone">
         </div>
        </div>
   </fieldset>
   <fieldset>
    <legend>Please Answer the following questions ?</legend>
      <div class="control-group">
          <label class="control-label">Have You Attended Yoga classes before ?</label>
          <div class="controls">
          <label class="radio inline">
           <input type="radio" value="yes" checked="checked" name="yoga">
                Yes
              </label>
              <label class="radio inline">
             <input type="radio" value="no" name="yoga">
                No
              </label>
            </div>
           </div>
             <div class="control-group">
             <label class="control-label">Are you practising yoga</label>
          <div class="controls">
          <label class="radio inline">
           <input type="radio" value="yes" checked="checked" name="pra_yoga">
                Yes
              </label>
              <label class="radio inline">
             <input type="radio" value="no" name="pra_yoga">
                No
              </label>
            </div>
           </div>
      </fieldset>
       <fieldset>
        <legend>Do you have any health condtions?</legend>
        <div class="controls-group">
          <div class="controls">
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions[]" value="asthma"> Asthama
              </label>
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions[]" value="heartproblem"> Heart Problems
              </label>
              <label class="checkbox inline">
              <input type="checkbox" name="health_condtions[]"value="highbp"> High Blood Pressure
              </label>
            </div>
            <div class="controls">
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions[]" value="epilepsy"> Epilepsy
              </label>
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions[]" value="pregnency"> Pregnency
              </label>
              <label class="checkbox inline">
              <input type="checkbox"name="health_condtions[]" value="lowbp"> Low Blood Pressure
              </label>
            </div>
          </div>
          <div class="controls-group">
            <label class="control-label">Any Other(Give Details)</label>
                <div class="controls">
                  <div class="textarea">
                    <textarea name="other_health"></textarea>
                  </div>
            </div>
          </div>
      </fieldset>
      
      <fieldset>
        <legend>Are you on Prescribed Medicines?</legend>
       <div class="controls-group">
            <label class="control-label">Any Other(Give Details)</label>
                <div class="controls">
                  <div class="textarea">
                    <textarea name="medical_details"></textarea>
                  </div>
            </div>
          </div>

      </fieldset>
       <fieldset>
        <legend>Do you have any other physical alignments that you feel the instructor 
        should know about(e.g recent injury or surgery?)</legend>
       <div class="controls-group">
            <label class="control-label">Any Other(Give Details)</label>
                <div class="controls">
                  <div class="textarea">
                    <textarea name="surgery_details"></textarea>
                  </div>
            </div>
         </div>
     </fieldset>
            
      <p> <button type="submit" class="btn btn-large btn-primary">Submit</button></p>
   
  </form>
