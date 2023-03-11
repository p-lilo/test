<div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
      <h3 class="mt-4">Update:</h3>
      <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="admins.php">Tables</a></li>
                <li class="breadcrumb-item active">Update</li>
            </ol>
        <div class="card mb-4">
          <?php
          include 'functions/conn.php';
          $ID=$_GET['id'];
            $select="SELECT * FROM admins WHERE id=$ID";
            $query=$conn->query($select);
            $user=$query->fetch_assoc();
          ?>
            <form method="POST" action="functions/update_admin.php">
                  <div class="mb-3">
                    <!-- id -->
                    <input type="hidden" name="id" value="<?php echo $user['id']?>" >
                    <label  class="form-label">name</label>
                    <input type="text" name="username" value="<?php echo $user['name']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">position</label>
                    <input type="text" name="position" value="<?php echo $user['position']?>" class="form-control" id="exampleInputPassword1">
                  </div>
                    <div class="mb-3">
                    <label  class="form-label">Office</label>
                    <input type="text" name="office" value="<?php echo $user['office']?>" class="form-control" id="exampleInputPassword1">
                  </div>
                    <div class="mb-3">
                    <label  class="form-label">age</label>
                    <input type="number" name="age" value="<?php echo $user['age']?>" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">start_date</label>
                    <input type="date" name="start_date" value="<?php echo $user['start_date']?>" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">salary</label>
                    <input type="number" name="salary" value="<?php echo $user['salary']?>" class="form-control" id="exampleInputPassword1">
                  </div> 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
        </div>
    </main>
</div>            