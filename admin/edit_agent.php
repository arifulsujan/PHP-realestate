<?php include 'templete/header.php'; ?>
<?php
    $name = "";
    $email = "";
    $phone = "";
    $image = "";
    $fb_link = "";
    $tw_link = "";
    $ins_link = "";
    
    // Getting agent id
    if(isset($_GET['agent_id'])) {
        $agent_id = $_GET['agent_id'];
    }
    
    // Getting Agent data
    $sql_agent = "SELECT * FROM agent WHERE id='$agent_id'";
    $sql_agent_result = $conn->query($sql_agent)->fetch_assoc();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fb_link = $_POST['fb_link'];
        $tw_link = $_POST['tw_link'];
        $ins_link = $_POST['ins_link'];
        
        $agent_prev_image = $sql_agent_result['image'];
                
        $image = $_FILES['image']['name'];
        $target_dr_image = "upload/agent/";
        $target_file_dir_image = $target_dr_image . basename($_FILES['image']['name']);
        
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file_dir_image, PATHINFO_EXTENSION));
        
        // Valid file extentions
        $extensions_arr = array("jpg", "jpeg", "png", "gif");
        
        if($image == "") {
            $sql_update_agent = "UPDATE agent SET name='$name', email = '$email', phone = '$phone', fb_link = '$fb_link', tw_link = '$tw_link', ins_link = '$ins_link' WHERE id='$agent_id'";
            $sql_agent_result = $conn->query($sql_update_agent);
            
            if($sql_agent_result == TRUE) {
                echo "<script>alert('Agent Data Updated Successfully !'); window.location.href='view_agent.php';</script>";  
            } else {
                echo "<script>alert('Agent data could not be updated. Please try again !'); window.location.href='view_agent.php';</script>";
            }
        } else {
            // Check extentions
            if(in_array($imageFileType, $extensions_arr)) {
                // Remove previous image of agent
                unlink("upload/agent/" . $agent_prev_image);
                
                // Upload Image
                $is_upload_dr_image = move_uploaded_file($_FILES['image']['tmp_name'], $target_dr_image.$image);
                if($is_upload_dr_image) {
                        // Agent updating query
                        $sql_update_agent = "UPDATE agent SET name='$name', email = '$email', phone = '$phone', image = '$image', fb_link = '$fb_link', tw_link = '$tw_link', ins_link = '$ins_link' WHERE id='$agent_id'";
                        $sql_agent_result = $conn->query($sql_update_agent);

                        if($sql_agent_result == TRUE) {
                          echo "<script>alert('Agent Data Updated Successfully !'); window.location.href='view_agent.php';</script>";  
                        } else {
                          echo "<script>alert('Agent data could not be Updated. Please try again !'); window.location.href='view_agent.php';</script>";
                        }
                } else {
                  echo "<script>alert('Could not upload Agent Image. Please try again !');</script>";
                }
            } else {
              echo "<script>alert('Invalid file extention detected. Please try again !');</script>";
            }
        }
        

    }
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <h1>Edit This Agent</h1>
    </div>
    <div style="margin: 20px;" class="row">
        <form action="" method="post" enctype='multipart/form-data'>
            <div class="form-group">
                <label>Agent Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Agent Name Here ..." value="<?php echo $sql_agent_result['name']; ?>"/>
            </div>
            <div class="form-group">
                <label>Agent's Email ID</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Agent Email ID" value="<?php echo $sql_agent_result['email']; ?>"/>
            </div>
            <div class="form-group">
                <label>Agent's Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter Agent Phone Number" value="<?php echo $sql_agent_result['phone']; ?>"/>
            </div>
            <div style="margin-bottom: 10px;" class="input-group">
                <label>Upload A Photo</label>
                <br/>
                <img style="width: 250px; height: 100px; margin: 20px;" src="upload/agent/<?php echo $sql_agent_result['image']; ?>" alt="<?php echo $sql_agent_result['name']; ?>"/>
                <input type="file" class="form-control-file border" name="image" />
            </div>
            <div class="form-group">
                <label>Agent's Facebook Link</label>
                <input type="text" class="form-control" name="fb_link" placeholder="Enter Agent Facebook Link" value="<?php echo $sql_agent_result['fb_link']; ?>"/>
            </div>
            <div class="form-group">
                <label>Agent's Twitter Link</label>
                <input type="text" class="form-control" name="tw_link" placeholder="Enter Agent Twitter Link" value="<?php echo $sql_agent_result['tw_link']; ?>"/>
            </div>
            <div class="form-group">
                <label>Agent's Instagram Link</label>
                <input type="text" class="form-control" name="ins_link" placeholder="Enter Agent Instagram Link" value="<?php echo $sql_agent_result['ins_link']; ?>"/>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'templete/footer.php'; ?>

            