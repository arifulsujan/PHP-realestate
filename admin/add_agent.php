<?php include 'templete/header.php'; ?>
<?php
    $name = "";
    $email = "";
    $phone = "";
    $image = "";
    $fb_link = "";
    $tw_link = "";
    $ins_link = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fb_link = $_POST['fb_link'];
        $tw_link = $_POST['tw_link'];
        $ins_link = $_POST['ins_link'];
        
        $image = $_FILES['image']['name'];
        $target_dr_image = "upload/agent/";
        $target_file_dir_image = $target_dr_image . basename($_FILES['image']['name']);
        
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file_dir_image, PATHINFO_EXTENSION));
        
        // Valid file extentions
        $extensions_arr = array("jpg", "jpeg", "png", "gif");
        
        // Check extentions
        if(in_array($imageFileType, $extensions_arr)) {
          // Upload Image
          $is_upload_dr_image = move_uploaded_file($_FILES['image']['tmp_name'], $target_dr_image.$image);
          if($is_upload_dr_image) {
                // Agent inserting query
                $sql_agent_insert = "INSERT INTO agent (name, email, phone, image, fb_link, tw_link, ins_link) VALUES ('$name', '$email', '$phone', '$image', '$fb_link', '$tw_link', '$ins_link')";
                $result_agent_insert = $conn->query($sql_agent_insert);
                
                if($result_agent_insert == TRUE) {
                  echo "<script>alert('Agent Data Inserted Successfully !');</script>";  
                } else {
                  echo "<script>alert('Agent data could not be inserted. Please try again !');</script>";
                }
          } else {
            echo "<script>alert('Could not upload Agent Image. Please try again !');</script>";
          }
        } else {
          echo "<script>alert('Invalid file extention detected. Please try again !');</script>";
        }
    }
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <h1>Add Agent</h1>
    </div>
    <div style="margin: 20px;" class="row">
        <form action="" method="post" enctype='multipart/form-data'>
            <div class="form-group">
                <label>Agent Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Agent Name Here ..." required />
            </div>
            <div class="form-group">
                <label>Agent's Email ID</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Agent Email ID" required />
            </div>
            <div class="form-group">
                <label>Agent's Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter Agent Phone Number" required />
            </div>
            <div style="margin-bottom: 10px;" class="input-group">
                <label>Upload A Photo</label><br/>
                <input type="file" class="form-control-file border" name="image" required />
            </div>
            <div class="form-group">
                <label>Agent's Facebook Link</label>
                <input type="text" class="form-control" name="fb_link" placeholder="Enter Agent Facebook Link" required />
            </div>
            <div class="form-group">
                <label>Agent's Twitter Link</label>
                <input type="text" class="form-control" name="tw_link" placeholder="Enter Agent Twitter Link" required />
            </div>
            <div class="form-group">
                <label>Agent's Instagram Link</label>
                <input type="text" class="form-control" name="ins_link" placeholder="Enter Agent Instagram Link" required />
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'templete/footer.php'; ?>

            