<?php
/**
 * Created by PhpStorm.
 * User: CausticAnomaly
 * Date: 2/7/2018
 * Time: 10:24 AM
 */
?>
<html>
<body>

<form action="site_supervisor_form2.php" method="post">
  Organization Name <input type="text" name="organizationName" required>
  Business License # or FEIN #(Do not provide a SS#) <input type="text" name="businessLicense" required>
  State issued:
  <select required>
      <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <option value="AZ">Arizona</option>
      <option value="AR">Arkansas</option>
      <option value="CA">California</option>
      <option value="CO">Colorado</option>
      <option value="CT">Connecticut</option>
      <option value="DE">Delaware</option>
      <option value="DC">District Of Columbia</option>
      <option value="FL">Florida</option>
      <option value="GA">Georgia</option>
      <option value="HI">Hawaii</option>
      <option value="ID">Idaho</option>
      <option value="IL">Illinois</option>
      <option value="IN">Indiana</option>
      <option value="IA">Iowa</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="ME">Maine</option>
      <option value="MD">Maryland</option>
      <option value="MA">Massachusetts</option>
      <option value="MI">Michigan</option>
      <option value="MN">Minnesota</option>
      <option value="MS">Mississippi</option>
      <option value="MO">Missouri</option>
      <option value="MT">Montana</option>
      <option value="NE">Nebraska</option>
      <option value="NV">Nevada</option>
      <option value="NH">New Hampshire</option>
      <option value="NJ">New Jersey</option>
      <option value="NM">New Mexico</option>
      <option value="NY">New York</option>
      <option value="NC">North Carolina</option>
      <option value="ND">North Dakota</option>
      <option value="OH">Ohio</option>
      <option value="OK">Oklahoma</option>
      <option value="OR">Oregon</option>
      <option value="PA">Pennsylvania</option>
      <option value="RI">Rhode Island</option>
      <option value="SC">South Carolina</option>
      <option value="SD">South Dakota</option>
      <option value="TN">Tennessee</option>
      <option value="TX">Texas</option>
      <option value="UT">Utah</option>
      <option value="VT">Vermont</option>
      <option value="VA">Virginia</option>
      <option value="WA">Washington</option>
      <option value="WV">West Virginia</option>
      <option value="WI">Wisconsin</option>
      <option value="WY">Wyoming</option>
  </select>
  For-Profit Organization
  <input type="radio" name="forProfit" value="Yes">Yes<br>
  <input type="radio" name="forProfit" value="No">No<br>
  Direct Internship Supervisor <input type="text" name="supervisor" required>
  Supervisor's Title <input type="text" name="supervisorTitle" required>
  Physical Address <input type="text" name="address" required>
  Supervisor Phone <input type="text" name="">
  Supervisor Email <input type="email" name="supervisorEmail" required placeholder="Enter a valid email address">
  Major <input type="text">
  Available for Site Visit?
  <input type="radio" name="siteVisit" value="Yes">Yes
  <input type="radio" name="siteVisit" value="No">No<br>
  Internship Projected Start Date <input type="text" name="startDate" required>
  Internship Projected End Date <input type="text" name="endDate" required>
  Paid
  <input type="radio" name="isPaid" value="Yes">Yes
  <input type="radio" name="isPaid" value="No">No<br>
  Payment Method
  <input type="radio" name="paymentMethod" value="salary">Salary
  <input type="radio" name="paymentMethod" value="stipend">Stipend<br>
  <input type="submit" name="saveProgress" value="Save">
  <input type="submit" name="nextSupervisorPage" value="Next">
</form>

Form Progress:
<div id='barbox_a'></div>
<div class='bar' style='width: 100px'></div>
<div class='per'>1 of 3</div>
</body>
</html>