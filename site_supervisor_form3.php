<?php
/**
 * Created by PhpStorm.
 * User: CausticAnomaly
 * Date: 2/10/2018
 * Time: 10:57 PM
 */
?>

<html>
<body>

<h1>Signature and Submit</h1>
<div> <!-- this div will contain the signature agreement text that will need to be centered on page -->
    By signing and dating below as my electronic signature,
    I hereby certify that I approve of and agree to the
    Learning Agreement. I agree to abide by all the Equal
    Opportunity/Affirmative Action and other related
    federal and state laws and regulations in the hiring of
    Winthrop University students. I agree that the company
    will instruct/orient the
    student on company policies/procedures, and provide a
    safe working environment.
</div>

<form action="" method="post">
    <input type="text" name="supervisorSignature" required placeholder="Legal Name">
    <input type="date" name="signDate" required placeholder="Today's Date">
    <input type="submit" name="finishSupervisor" value="Submit">
</form>

Form Progress:
<div id='barbox_a'></div>
<div class='bar' style='width: 300px'></div>
<div class='per'>3 of 3</div>
</body>
</html>
