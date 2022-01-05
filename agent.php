<?php include 'templete/header.php'; ?>
<?php 
    $sql_agent_query = "SELECT * FROM agent";
    $sql_agent_result = $conn->query($sql_agent_query);
?>
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Agents</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Agents</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Our team start -->
<div class="our-team content-area">
    <div class="container">
        <div class="row">
            <?php
                if($sql_agent_result->num_rows > 0) {
                   while($rows_of_agent = $sql_agent_result->fetch_assoc()) {
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="team-1">
                    <div class="team-photo">
                        <a href="#">
                            <img src="admin/upload/agent/<?php echo $rows_of_agent['image']; ?>" alt="<?php echo $rows_of_agent['name']; ?>" class="img-fluid">
                        </a>
                        <ul class="social-list clearfix">
                            <li><a href="<?php echo $rows_of_agent['fb_link']; ?>" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo $rows_of_agent['tw_link']; ?>" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo $rows_of_agent['ins_link']; ?>" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-details">
                        <h5><a href="agent-detail.html"><?php echo $rows_of_agent['name']; ?></a></h5>
                        <h6><?php echo $rows_of_agent['email']; ?></h6>
                        <h4><a href="tel:+1-204-777-0187"><?php echo $rows_of_agent['phone']; ?></a></h4>
                    </div>
                </div>
            </div>
            <?php 
                } } else {
                    echo "No Data Found !";
                }
            ?>
        </div>
    </div>
</div>
<!-- Our team end -->

<?php include 'templete/footer.php'; ?>
