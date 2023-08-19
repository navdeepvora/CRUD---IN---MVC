      <!-- FORM -->

      <div class="row p-4">
        <div class="col-md-4 ">
          <h2>Add Data</h2>
      <form method="post" id="frm">
        <div class="mt-2">
        <b>Name</b>
        <input type="text" class="ms-2" name="name" data-bvalidator="required,alpha" placeholder="Enter Your Name">
    </div>
    <div class="mt-2">
        <b>Email</b>
        <input type="email" class="ms-2" name="email" data-bvalidator="required" placeholder="Enter Your email">
    </div>
    <div class="mt-2">
        <b>Phone</b>
        <input type="text" class="ms-2" name="phone" data-bvalidator="required,number" placeholder="Enter Your Number">
    </div>
    <div class="mt-2">
        <b>Add Date</b>
        <input type="date" name="ad" data-bvalidator="required">
    </div>
    <div class="mt-2">
       <button
        value="submit" name="add" class="btn btn-sm btn-dark">Add Now</button>
    </div>
      </form>
    </div> 
    <!-- <hr style="border: -1px solid #000; height: 0px; width: 1px;" class="me-4"> -->
    <div class="col-md-7">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Add Date</th>
            <th scope="col">Edit</th>
          </tr> 
        </thead>
        <tbody>
        <?php
foreach($stshw as $row) {
    ?>
          <tr>
            <th><?php echo $row["id"];?></th>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["phone"];?></td>
            <td><?php echo $row["adddate"];?></td>
            <td><a href="?delete=<?php echo $row["id"];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a> | <a href="upd?show=<?php echo $row["id"];?>"
            class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i><a></td>
          </tr>
          <?php
}
        ?>
        </tbody>
      </table>
</div>
    </div>


    
    
      <script>
$(document).ready(function(){
    $("#frm").bValidator();
});

</script>
<script>
  $(document).ready(function(){
      $("#frm1").bValidator();
  });
  
  </script>
