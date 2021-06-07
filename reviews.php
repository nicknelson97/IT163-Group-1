<?php 
    include('includes/config.php');
    include('includes/header.php'); 
?>

<div class="columns is-centered">
    <div class="column is-two-thirds has-background-white p-5 m-3">
        <?php include('includes/reviewSearch.php'); ?>
        <p><?php if($Feedback == ''){echo '';}
            else {echo $Feedback;} ?>
        </p>
    </div>

    <div class="column">
        <div class="side has-background-info-light p-5 mx-3 mb-3 box">
            <h2 class="subtitle mb-0 pt-2"><a href="NewReview.php">leave a review</a></h2>
            <p>(login required)</p>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>