<div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
      <h3 class="mt-4">Update :</h3>
      <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="admins.php">Tables</a></li>
                <li class="breadcrumb-item active">update new product </li>
            </ol>
        <div class="card mb-4">
            <?php
            include 'functions/conn.php';
            $ID=$_GET['id'];
            $select="SELECT * FROM `products` WHERE id=$ID";
            $query=$conn->query($select);
            $user=$query->fetch_assoc();

?>
            <form method="POST" action="functions/add_product.php" >
                <input type="hidden" name="id" value="<?= $user['id']?>">
                  <div class="mb-3">
                    <label  class="form-label">name</label>
                    <input type="text" name="username" value="<?= $user['name']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">price</label>
                    <input type="number" name="price" value="<?= $user['price']?>"class="form-control" id="exampleInputPassword1"required="required">
                  </div>
                    <div class="mb-3">
                    <label  class="form-label">amount</label>
                    <input type="number" name="amount" value="<?= $user['amount']?>"class="form-control" id="exampleInputPassword1"required="required">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">brand</label>
                    <br>
                    <select name="brand" >
                      <?php
                        $brand=$conn->query("SELECT * FROM brands");
                        while($res=$brand->fetch_assoc()){
                      ?>
                      <option value="<?= $res['id']?>"><?= $res['name']?></option>
                      <?php } ?>

                    </select>
                  </div>
                  <div class="mb-3">
                    <?php
                       $ID=$_GET['id'];
                       $select="SELECT * FROM `product_image` WHERE id=$ID";
                       $query=$conn->query($select);
                       $img=$query->fetch_assoc();
                    ?>
                    <label  class="form-label">add photo of product</label>
                    <input type="file" name="img[]" value="<?= $img['img']?>"class="form-control"  id="exampleInputPassword1"required="required" multiple>
                  </div>
                    
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
        </div>
    </main>
</div>            