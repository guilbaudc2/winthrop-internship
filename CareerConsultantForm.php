<html>
<body>


<div style="background: #024366 ">
    <font color="white">WILE</font>
</div>
<div style="text-align: center; background: coral">
    <font color="white">
        The language in this form does not create an employment contract, either expressed<br>
        or implied, or otherwise alter the at-will employment relationship between any<br>
        employee and Winthrop University. Winthrop University reserves the right to revise<br>
        the contents of this form in whole or in part, as necessary.<br>
    </font>
</div>

<form action=""><!-- need action-->
    <input type="submit" value="Help">
</form>

<br>
<h1 style="text-align: center">
    Internship Learning Agreement Form - Student Name <!--import Student Name-->
</h1>

<!--
******************************************
Student form 1 Info
******************************************
-->
<h2 style="text-align: center">
    Student Information
</h2>

<!--beginning of "form"-->
Student ID #(W Number)<br>
<input type="text" name="wNumber"><br><br>

Email Address<br>
<input type="text" name="Email"><br><br>

Class/Graduation Year<br>
<select name="GradMonth">
    <option value="May">May</option>
    <option value="August">August</option>
    <option value="December">December</option>
</select>
<input type="text" name="GradYear"><br><br>

<input type="text" name="Name" value="Legal Name"><br><br>

<input type="text" name="Phone" value="Phone Number"><br><br>

<input type="text" name="EnrolledYear" value="Semester/Year Enrolled"><br><br>

Class Enrolled in<br>
<select name="Class">
    <option value="CSCI491">CSCI 491</option>
    <option value="....">....</option>
    <option value="....">....</option>
</select><br><br>

<input type="text" name="Major" value="Major"><br><br>

<input type="text" name="Supervisor" value="Site Supervisor"><br><br>

Site Supervisor Email Address<br>
<input type="text" name="supervisorEmail"><br><br>

<select name="FacultyLiaison">
    <option selected disabled>Faculty Liaison</option>
    <option value="CSCI491">CSCI 491</option>
    <option value="....">....</option>
    <option value="....">....</option>
</select><br><br>

<input type="text" name="Minor" value="Minor/Concentration"><br><br><br>
<!--end of "form"-->

<!--
******************************************
Site Supervisor form Info
******************************************
-->
<h2 style="text-align: center">
    Site Supervisor Information
</h2>


<!--
******************************************
Student form 2 Info
******************************************
-->
<h2 style="text-align: center">
    Student Personal Learning Goals
</h2>

<!--beginning of "form"-->
Explain how this internship will add to your educational experience at Winthrop<br>
University <br>
<input type="text" name="educationExperience"><br><br>

What professional and personal goals do you hope to achieve while at this internship? (Be specific)<br>
<input type="text" name="Goals"><br><br>

By signing and dating below as my electronic signature, I hearby <br>
certify that I have read the agreement and will fulfill the duties <br>
and responsibilities outlined for the internship and the academic <br>
requirements for completeing the internship course for credit. <br>


<input type="text" name="legalName" value="Legal Name">
<input type="text" name="dateSigned" value="Recorded Date"> <!--not real value-->
<!---end of "form"->


<!--
******************************************
Faculty Liaison Form
******************************************
-->

<form>

    <h2 style="text-align: center">
        Faculty Liaison Approval
    </h2>

    Digital Signature <br>
    <input type="text" name="legalName" value="Legal Name">
    <input type="text" name="dateSigned" value="Recorded Date"> <!--not real value-->

</form>



<!--
******************************************
Career Consultant Approval
******************************************
-->
<h2 style="text-align: center">
    Signature and Submit
</h2>

<form>

    I approve of the Learning Agreement & Personal <br>
    Learning Goals. Learning agreement is valid and<br>
    internship meets Universty criteria.<br>

    <input type="text" name="legalName" value="Legal Name">
    <input type="text" name="dateSigned" value="Today's Date">
    <br>
    <input type="submit" value="DENY">
    <input type="submit" value="HOLD">
    <input type="submit" value="APPROVE">

</form>

<?php
/**
 * Created by PhpStorm.
 * User: sean9_000
 * Date: 2/10/2018
 * Time: 9:37 PM
 */
?>
</body>
</html>