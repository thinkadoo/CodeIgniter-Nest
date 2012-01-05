<?php

require_once('redbean/redbean.inc.php');

R::setup('mysql:host=localhost;dbname=cms', 'root', 'root');

if (isset($_POST['submit'])) {

    $user = R::dispense( 'user' );

// Import all the parameters sent by POST from the form below and persist a new object

    $user->import($_POST);

    R::begin();
    try{
        R::store($user);
        R::commit();
    }
    catch(Exception $e) {
        R::rollback();
        echo 'the user was not stored in the database';
    }


    echo "<br>You can save more users by submitting the following form again to enter a new name.";

}

?>

<!-- Send the Data back to this form using PHP_SELF as url -->
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" name="name"><br>
    <input type="text" name="surname"><br>
    <input type="submit" name="submit" value="Submit Form"><br>
</form>


