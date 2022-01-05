<?php include 'templete/header.php'; ?>
<?php
    $agent_id = "";
    
    // Getting agent id
    if(isset($_GET['agent_id'])) {
        $agent_id = $_GET['agent_id'];
    }
    
    // Getting image data
    $sql_agent_image = "SELECT image FROM agent WHERE id='$agent_id'";
    $sql_agent_image_result = $conn->query($sql_agent_image)->fetch_assoc();
    
    // Image Data
    $agent_image = $sql_agent_image_result['image'];
    
    // Remove image data
    unlink("upload/agent/" . $agent_image);
    
    // Angent delete Query
    $sql_agent_del = "DELETE FROM agent WHERE id='$agent_id'";
    $sql_agent_del_result = $conn->query($sql_agent_del);
    
    // Delete Notification
    if($sql_agent_del_result === TRUE) {
        echo "<script>alert('Agent Data Deleted Successfully !'); window.location.href='view_agent.php'; </script>"; 
    } else {
        echo "<script>alert('Agent Data Could Not be Deleted !'); window.location.href='view_agent.php';</script>"; 
    }