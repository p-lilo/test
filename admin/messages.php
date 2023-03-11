<?php
include 'functions/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
        include 'includes/header.php';
        ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                   <?php
                    include 'includes/sidebar.php';
                   ?>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            
   
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
          
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Admin DataTable 
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>status</th>
                                    <th>check</th>            
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $select_msg=$conn->query("SELECT * FROM `message`");
                            $id=1;
                            while($msg=$select_msg->fetch_assoc()){
                            ?>
                               
                            <tr>
                                <td><?= $id++ ?></td>
                                <td><?= $msg['name']?></td>
                                <td><?= $msg['email']?></td>  
                                <td><?= ($msg['status']==0)? "unread":"Read"; ?></td>
                                <td>
                                    <!--check button-->
                                    <!-- Button trigger modal -->    
                                    <button type="button" class="btn btn-primary edit_msg" <?=($msg['status']==1)?"disabled":""; ?> data-bs-toggle="modal" data-bs-target="#edit_msg" msg-id="<?= $msg['id']; ?>">
                                    <i class="fa-solid fa-check"></i>
                                    </button>
                                    <!--delete button-->
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-danger del" data-bs-toggle="modal" data-bs-target="#del_msg" msg-id="<?= $msg['id']; ?>">
                                    <i class="fas fa-trash"></i>
                                    </button>

                                    
                                </td>                     
                            </tr>
                        <?php
                        }
                        ?>

                        </tbody>
                        
                    </table> 
                    <!-- check msg -->


                                    <!-- Modal -->
                                    <div class="modal fade" id="edit_msg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">The Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="res">


                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- delete msg -->
                                   
                                    <!-- Modal -->
                                    <div class="modal fade" id="del_msg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Welcome!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                             <div class="res_del">

                                             </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            
                                            
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include 'includes/footer.php';
    ?>
</div>


        </div>
        <script src="js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <!--ajax-->
                        
       <script>
            $(".edit_msg").click(function(){
                $(this).parent().prev().text("Read");
                var id=$(this).attr("msg-id");
                var fun="read_msg";
                $(this).attr("disabled","true");
                $.post("functions/edit.php",{fun,id},function(result){
                    $(".res").text(result);
                })
                var icon=$(".counter").text();
                $(".counter").text(icon-1);
            });
            $(".del").click(function(){
                
                let x=$(this).parent().prev().text();
                if(x=='unread'){
                    var icon=$(".counter").text();
                $(".counter").text(icon-1);
                }
                $(this).parent().parent().remove();
            })
       </script>
    </body>
</html>