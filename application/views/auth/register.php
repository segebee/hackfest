<?php
include "auth_header.php";
?>

<div id="wrap">
  <table id="tblwrap">
  	<tr>
      <td id="tdwrapright">
        <div id="profileedit" class="profilewrap">
          <h1 class="title" style="text-align:center">Member Registration</h1>
          <form id="register" class="form password email" method="post" onSubmit="return false">
            <div>
            	<h3 class="infoT">Login Information</h3>
              <table class="tblData" width="100%">
                <tr>
                  <td class="tdT">Phone:</td>
                  <td><input name="phone" type="text" class="req int" style="width:250px" maxlength="11" alt="Phone field is empty" num="Invalid value in phone number"></td>
                  <td class="tdT">Sponsor ID:</td>
                  <td>NRN<input name="sponsor" type="text" class="req int" value="<?php if(isset($_GET['sponsorid'])) echo $_GET['sponsorid']; ?>" style="width:100px !important;" maxlength="11" alt="Sponsor ID field is empty" placeholder="123..">CCN</td>
                <tr>
                  <td class="tdT">Password:</td>
                  <td>
                    <input type="password" name="password" class="req pwd" alt="Password field is empty">
                  </td>
                  <td class="tdT">Retype Password:</td>
                  <td>
                    <input type="password" class="req pwd2" alt="Retype password field is empty">
                  </td>
                </tr>
              </table>
            </div>
            <div>
            	<h3 class="infoT">Basic Information</h3>
            	<table class="tblData" width="100%">
                <tr>
                  <td class="tdT" width="130">Name:</td>
                  <td colspan="3">
                    <input type="text" name="lastname" class="req" placeholder="Last Name" alt="Last Name field is empty">
                    <input type="text" name="firstname" class="req" placeholder="First Name" alt="First Name field is empty">
                    <input type="text" name="middlename" placeholder="Middle Name">
                  </td>
                </tr>
                <tr>
                  <td class="tdT">Membership:</td>
                  <td>
                    <select name="membership" class="req" alt="Select member category">
                      <option value="">Select category...</option>
                      <option>Green Ambassador</option>
                      <option>Green Entrepreneur</option>
                      <option>Solar Customer</option>
                      <option>Social Investor</option>
                    </select>
                  </td>
                  <td class="tdT" width="130">Nationality:</td>
                  <td width="30%">
                  <select name="nationality" id="nationality" class="req" alt="Select your nationality">
                    <option value="">Select...</option>
                    <?php for($i=1; $i<=count($countries); $i++) { ?>
                    <option <?php if($countries[$i] == 'Nigeria') {echo 'selected';} ?>><?php echo $countries[$i]; ?></option>
                    <?php } ?>
                  </select>
                  </td>
                </tr>
                <tr>
                  <td class="tdT">Birthdate:</td>
                  <td>
                    <input type="text" name="dob" id="dob" class="req dob" alt="Birthdate field is empty" style="width:120px !important;" readonly>
                    <span id="btnDob" class="dateIcon" title="Select Check Out Date">&nbsp;</span>
                    <script type="text/javascript"> calender("dob", "btnDob"); </script>
                    <input type="hidden" id="today" value="<?php echo date('Y-m-d'); ?>">
                  </td>
                  <td class="tdT">State:</td>
                  <td>
                    <select name="state" id="state" class="req nstate" alt="Select your state">
                      <option value="">Select state...</option>
                      <?php for($i=1; $i<=count($nigState); $i++) { ?>
                      <option> <?php echo $nigState[$i]; ?></option>
                      <?php } ?>
                    </select>
                    <input name="state" class="ostate" alt="Enter your state">
                  </td>
                </tr>
                <tr>
                  <td class="tdT">Gender:</td>
                  <td>
                    <select name="sex" class="req" alt="Select your gender">
                      <option value="">Select...</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </td>
                  <td class="tdT">LGA:</td>
                  <td>
                    <select name="LGA" id="LGA" class="nlga" alt="Select your LGA">
                      <option value="">Select LGA...</option>
                    </select>
                    <input name="_LGA" class="olga" alt="Enter your LGA">
                  </td>
                </tr>
                <tr>
                  <td class="tdT">Occupation:</td>
                  <td><input type="text" name="occupation" class="req" alt="Occupation field is empty"></td>
                  <td class="tdT">Address:</td>
                  <td rowspan="3">
                    <textarea name="address" class="req" alt="Address field is empty"></textarea>
                  </td>
                </tr>
                <tr>
                  <td class="tdT">Email:</td>
                  <td><input type="text" name="email" class="req email" alt="Email field is empty"></td>
                </tr>
              </table>
            </div>
            <div>
            	<h3 class="infoT shTblData">Landlord's Details</h3>
              <table class="tblData" width="100%" style="display:none;">
                <tr>
                  <td class="tdT">Name:</td>
                  <td><input type="text" name="landlordsname"></td>
                  <td class="tdT">Country:</td>
                  <td>
                  <select name="landlordscountry" id="nationality" alt="Select your nationality">
                    <option value="">Select...</option>
                    <?php for($i=1; $i<=count($countries); $i++) { ?>
                    <option><?php echo $countries[$i]; ?></option>
                    <?php } ?>
                   </select>
                  </td>
                </tr>
                <tr>
                  <td class="tdT">Phone:</td>
                  <td><input type="text" name="landlordsphone" class="int" num="Invalid value in phone number"></td>
                  <td class="tdT">Address:</td>
                  <td rowspan="2"><textarea name="landlordsaddress"></textarea></td>
                </tr>
                <tr>
                  <td class="tdT">Email:</td>
                  <td><input type="text" name="landlordsemail" class="email"></td>
                </tr>
              </table>
            </div>
            <div>
            	<h3 class="infoT shTblData">SHS Reservation Details</h3>
              <table class="tblData" width="100%" style="display:none;">
                <tr>
                  <td class="tdT">Current Electricity Power Provider:</td>
                  <td>
                  <select name="powerprovider" alt="Select your power provider">
                    <option value="">Select...</option>
                    <option value="phcn">PHCN</option>
                    <option value="generator">GENERATOR</option>
                    <option value="solar">SOLAR</option>
                    <option value="windmill">WINDMILL</option>
                  </select>
                  </td>
                  <td class="tdT">Generator's Age:</td>
                  <td>
                  <input type="text" name="generatorsage"></td>
                </tr>
                <tr>
                  <td class="tdT">Roof Age:</td>
                  <td>
                  <select name="roofage">
                    <option value="">Select...</option>
                    <option value="0-5YRS">1-5YRS</option>
                    <option value="5-10YRS">5-10YRS</option>
                    <option value="10-20YRS">10-20YRS</option>
                    <option value="20YRS Above">20YRS Above</option>
                  </select>
                  </td>
                  <td class="tdT">Generator Size:</td>
                  <td>
                  <select name="generatortype">
                    <option value="">Select...</option>
                    <option value="1KVA">1KVA</option>
                    <option value="2KVA">2KVA</option>
                    <option value="3KVA">3KVA</option>
                    <option value="5KVA Above">5KVA Above</option>
                  </select>
                  </td>
                </tr>
                <tr>
                  <td class="tdT">Contract Duration:</td>
                  <td>
                  <select name="contractduration">
                    <option value="">Select...</option>
                    <option value="1-5YRS">-5YRS</option>
                    <option value="5-10YRS">5-10YRS</option>
                    <option value="10-20YRS">10-20YRS</option>
                    <option value="20YRS Above">20KVA Above</option>
                  </select>
                  </td>
                  <td class="tdT">Fuel Type:</td>
                  <td><input type="text" name="fueltype"></td>
                </tr>
              </table>
            </div>
            <div>
            	<h3 class="infoT">Friend's Details</h3>
              <table class="tblData" width="100%">
                <tr>
                  <td class="tdT">Name:</td>
                  <td><input type="text" name="friendsname" class="req" alt="Friend's name field is empty" style="width:250px" placeholder="Full Name"></td>
                  <td class="tdT">Phone:</td>
                  <td><input name="friendsphone" type="text" class="req int" maxlength="11" alt="Friend's phone field is empty" num="Invalid value in phone number"></td>
                </tr>
                <tr>
                  <td class="tdT" style="vertical-align:top">Comment:</td>
                  <td colspan="3">
                  <textarea name="comment" class="req" alt="Friend's comment field is empty" style="width:250px !important; max-width:250px !important; height:100px;"></textarea>
                  </td>
                </tr>
                <tr>
                  <td colspan="4">
                    <center>
                    <input type="submit" class="btn" value="Register">
                    <input type="hidden" name="server" value="profile">
                    <input type="hidden" name="type" value="register">
                    </center>
                  </td>
                </tr>
              </table>
            </div>
          </form>  
        </div>
      </td>
    </tr>
  </table>
</div>
<?php include "auth_footer.php"; ?>