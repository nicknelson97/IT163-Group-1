<?php
include('includes/server.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="title">Register</h1>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <fieldset>

            <label>First Name</label>
            <input class="input is-normal" type="text" name="FirstName" placeholder="First Name" value="<?php if(isset($_POST['FirstName'])) echo $_POST['FirstName']; ?>">

            <label>Last Name</label>
            <input class="input is-normal" type="text" name="LastName" placeholder="Last Name" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName']; ?>">

            <label>Username</label>
            <input class="input is-normal" type="text" name="UserName" placeholder="Username" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">

            <label>Email</label>
            <input class="input is-normal" type="email" name="Email" placeholder="Email" value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>">

            <label>ZipCode</label>
            <input class="input is-normal" type="text" name="ZipCode" placeholder="ZipCode" value="<?php if(isset($_POST['ZipCode'])) echo $_POST['ZipCode']; ?>">

            <label>Password</label>
            <input class="input is-normal" type="password" name="Password_1" placeholder="Confirm Password">

            <label>Confirm Password</label>
            <input class="input is-normal" type="password" name="Password_2" placeholder="Confirm Password">

            <div class="box">
                <button type="submit" class="button is-primary" name="reg_user">Register</button>
                <p class="subtitle">Already a member? <a href="login.php">Sign in</a></p>
            </div>

            <?php
          include('includes/errors.php');
            ?>
    </fieldset>
    </form>
        
          <button class="button is-light modal-trigger">Modal</button>
            <div class="modal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Title</p>
                        <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <p>Some text...</p>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-warning">No</button>
                        <button class="button is-success">Yes</button>
                    </footer>
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-trigger">
                    <button class="button is-dark" aria-haspopup="true" aria-controls="dropdown-menu3">
                        <span>Click Me</span>
                        <span class="icon is-small">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                    <div class="dropdown-content">
                        <a href="index.php" class="dropdown-item">Home</a>
                        <a href="login.php" class="dropdown-item">Login</a>
                        <a href="" class="dropdown-item">Reviews</a>
                        <a href="BookList.php" class="dropdown-item">Books</a>
                        <a href="NewBook.php" class="dropdown-item">Add a Book</a>
                    </div>
                </div>
            </div>



        <script>
            let drop = document.querySelector('.dropdown');
            drop.addEventListener('click', (event) => {
                event.stopPropagation();
                drop.classList.toggle('is-active');
            });



            let modal = document.querySelector('.modal-trigger');
            let pop = document.querySelector('.modal');
            let close = document.querySelector('.delete');
            let outside = document.querySelector('.modal-background');
            let confirm=document.querySelector('.is-success');
            let cancel=document.querySelector('.is-warning');

            modal.addEventListener('click', (event) => {
                pop.classList.toggle('is-active');
            });
            close.addEventListener('click', (event) => {
                pop.classList.toggle('is-active');
            });
            confirm.addEventListener('click', (event) => {
                pop.classList.toggle('is-active');
            });
            cancel.addEventListener('click', (event) => {
                pop.classList.toggle('is-active');
            });
            window.addEventListener('click', (event) => {
                if(event.target === outside){
                    pop.classList.toggle('is-active');
                }
            });
        </script>
    </body>
</html>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
