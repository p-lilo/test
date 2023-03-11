
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Users DataTable 
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                    
                    <thead>

                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>age</th>
                            <th>password</th>
                            <th>birthday</th>
                            <th>  </th>
                        </tr>
                    </thead>
                        
                        <tbody>
                            <?php
                                $res=$conn->query("SELECT * FROM users");
                                while($user=$res->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['age'] ?></td>
                                <td><?php echo $user['password'] ?></td>
                                <td><?php echo $user['birthday'] ?></td>
                                <td>
                                    <a href="?action=edit&id=<?= $user['id']?>" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#a<?php echo $user['id']?>">
                                    <i class="fas fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="a<?php echo $user['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete <span class="text-danger" style="font-weight: bolder;"> <?php echo $user['name'];?></span>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="functions/del_user.php?id=<?= $user['id'] ?>" class="btn btn-danger">confirm </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>       
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                        <a href="?action=add" class="btn btn-danger">insert</a>  
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php
    include 'includes/footer.php';
    ?>
</div>
