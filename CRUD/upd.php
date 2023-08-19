   <center>
   <div class="col-md-6">
      <h2 >Update Your Data</h2>
      <form method="post" id="frm1">
        <div class="mt-4">
        <b>Name</b>
        <input type="text" name="name" value="<?php echo $shw1[0]["name"];?>" data-bvalidator="required,alpha" placeholder="Enter Your Name">
    </div>
    <div class="mt-2">
        <b>Email</b>
        <input type="email" name="email" value="<?php echo $shw1[0]["email"];?>" data-bvalidator="required" placeholder="Enter Your email">
    </div>
    <div class="mt-2">
        <b>Phone</b>
        <input type="text" name="phone" value="<?php echo $shw1[0]["phone"];?>" data-bvalidator="required,number" placeholder="Enter Your Number">
    </div>
    <div class="mt-2">
        <b>Add Date</b>
        <input type="date" name="ad" value="<?php echo $shw1[0]["adddate"];?>" data-bvalidator="required" >
    </div>
    <div class="mt-2">
       <button
        value="submit" name="upd" class="btn btn-sm btn-primary">Updet Now</button>
    </div>
      </form>
    </div>
</center>