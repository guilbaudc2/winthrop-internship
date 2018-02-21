<?php
/**
 * Created by PhpStorm.
 * User: CausticAnomaly
 * Date: 2/10/2018
 * Time: 10:38 PM
 */
?>

<html>
<body>

<form action="site_supervisor_form3.php" method="post">
    What will be the Intern's Tasks or Roles?
    <textarea name="internTasks" required maxlength="2000"></textarea>
    What are specific projects the Intern will work on or assist with?
    <textarea name="internProjects" required maxlength="2000"></textarea>
    What are the learning outcomes for the intern?
    <textarea name="learnOutcomes" required maxlength="2000"></textarea>
    Additional comments regarding the Internship
    <textarea name="addComments" maxlength="2000"></textarea>
    <input type="submit" name="saveProgress2" value="Save">
    <input type="submit" name="nextSupervisorPage2" value="Next">
</form>

Form Progress:
<div id='barbox_a'></div>
<div class='bar' style='width: 200px'></div>
<div class='per'>2 of 3</div>
</body>
</html>