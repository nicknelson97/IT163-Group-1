<?php
include('includes/server.php');
include('includes/header.php');
?>
<div class="has-background-info-light p-5 m-3">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="columns is-centered">
        <div class="column is-half">
            <fieldset>
            <div class="field">
                <div class="control">
                    <label for="firstname" class="subtitle">First Name</label>
                    <input id="firstname" class="input has-text-centered" type="text" name="FirstName" placeholder="First Name" value="<?php if(isset($_POST['FirstName'])) echo $_POST['FirstName']; ?>">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="lastname">Last Name</label>
                    <input id="lastname" class="input has-text-centered" type="text" name="LastName" placeholder="Last Name" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName']; ?>">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="username">Username</label>
                    <input id="username" class="input has-text-centered" type="text" name="UserName" placeholder="Username" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="email">Email</label>
                    <input id="email" class="input has-text-centered" type="email" name="Email" placeholder="Email" value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="zipcode">Zip Code</label>
                    <input id="zipcode" class="input has-text-centered" type="text" name="ZipCode" placeholder="ZipCode" value="<?php if(isset($_POST['ZipCode'])) echo $_POST['ZipCode']; ?>">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="pass1">Password</label>
                    <input id="pass1" class="input has-text-centered" type="password" name="Password_1" placeholder="Confirm Password">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="pass2">Confirm Password</label>
                    <input id="pass2" class="input has-text-centered" type="password" name="Password_2" placeholder="Confirm Password">
                </div>
            </div>
            <?php include('includes/errors.php'); ?>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-warning" name="reg_user">Register</button>
                </div>
            </div>
            <p class="subtitle">Already a member? <a href="login.php">Sign In Here</a></p>
            </fieldset>
        </div>
        </div>
    </form>
</div>
<?php include('includes/footer.php'); ?>