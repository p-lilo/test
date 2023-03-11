<div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
      <h3 class="mt-4">Insert :</h3>
      <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="admins.php">Tables</a></li>
                <li class="breadcrumb-item active">Add new admin </li>
            </ol>
        <div class="card mb-4">
            <form method="POST" action="functions/add_admin.php" >
                  <div class="mb-3">
                    <label  class="form-label">name</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">position</label>
                    <input type="text" name="position" class="form-control" id="exampleInputPassword1"required="required">
                  </div>
                    <div class="mb-3">
                    <label  class="form-label">Office</label>
                    <input type="text" name="office" class="form-control" id="exampleInputPassword1"required="required">
                  </div>
                    <div class="mb-3">
                    <label  class="form-label">age</label>
                    <input type="number" name="age" class="form-control" id="exampleInputPassword1"required="required">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">start_date</label>
                    <input type="date" name="start_date" class="form-control" id="exampleInputPassword1"required="required">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">salary</label>
                    <input type="number" name="salary" class="form-control" id="exampleInputPassword1"required="required">
                  </div> 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
        </div>
    </main>
</div>            