<?php include 'templete/header.php'; ?>
<?php 
    $sql_agent_query = "SELECT * FROM agent";
    $sql_agent_result = $conn->query($sql_agent_query);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div style="margin: 20px;" class="row">
        <div class="row">
            <h1>View All Agents</h1>
        </div>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    if($sql_agent_result->num_rows > 0) {
                       while($rows_of_agent = $sql_agent_result->fetch_assoc()) {
                ?>
                <tr>
                  <td><img style="width: 100px; height: 75px;" src="upload/agent/<?php echo $rows_of_agent['image']; ?>" alt="No Preview" /></td>
                  <td><?php echo $rows_of_agent['name']; ?></td>
                  <td><?php echo $rows_of_agent['email']; ?></td>
                  <td><?php echo $rows_of_agent['phone']; ?></td>
                  <td>
                      <a href="edit_agent.php?agent_id=<?php echo $rows_of_agent['id']; ?>" class="btn btn-warning">Edit</a>
                      <a href="delete_agent.php?agent_id=<?php echo $rows_of_agent['id']; ?>" onclick="return alert('Are you sure wish to delete it ?')" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php 
                    } } else {
                        echo "No Data Found !";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'templete/footer.php'; ?>