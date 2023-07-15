<?php
include 'config.php';
?>
<!-- Fetch the page header from the html folder -->
<?php include 'html/header.php'; ?>
<!-- Body content -->
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- The page title is defined in the config.php file -->
                <h1 class="display-1"><?php echo $pageTitle ?></h1>
            </div>
        </div>
        <div class="row">
            <!-- This button has a jQuery watch linked by the Element id (#render-btn) -->
            <div class="col-12">
                <button class="btn btn-primary btn-lg" role="button" id="render-btn">jQuery is cool</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- This is where the result is rendered after the Ajax call is made -->
                <div id="render-container"></div>
            </div>
        </div>
    </div>



</div>
<!-- End Body Content -->

<!-- Fetch the footer content from the html folder -->
<?php include 'html/footer.php'; ?>

