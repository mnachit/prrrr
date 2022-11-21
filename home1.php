<?php 
 // include
 include('scripts.php');
 include('script.php');
 if(!isset($_SESSION['first_namee'])){
    header("location: log_in.php");
    die;
 }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="stylesheet" rel="style.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
        /* body 
        {
            background-image: url('wp5464254-wallpaper-full-hd-musica.png');
            position : 
        } */
</style>
    </head>
    <body class="">
        <div class='text-danger'></div>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary bg-gradient">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Music</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                        </button>
                    </form>
                </div>
            </div>
            <!-- <button class="btn btn-outline-dark" style="margin-right : 110px"></button> -->
            <!-- <button href="#" class="navbar-link dropdown-toggle d-flex align-items-center btn " style="margin-right : 40px" data-bs-toggle="dropdown" >
                            
                <img class="rounded-circle" src="user-13.jpg" style="
                height:40px; 
                width: 40px;" /> 
                <span>
                    <span class="d-none d-md-inline" style="margin-left : 7px" id="navbarDropdown1 "nav-link dropdown-toggle  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['first_namee']?></span>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="#!">jj</a></li>
                            </ul>
                </span>
            </button> -->
            <li class="nav-item dropdown d-flex flex-row mb-2 text-dark">
                
                <img class="rounded-circle" src="user-13.jpg" style="
                    height:40px; 
                    width: 40px;" /> 
                <span>
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left : 2px"><?php echo $_SESSION['first_namee']; echo " ";echo $_SESSION['last_namee']?></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                </ul>
            </li>
        </nav>
        <div class="d-flex">
            <a href="#modal-task" data-bs-toggle="modal" class="form-control me-2 ms-2 btn btn-outline-success">+ add task</a>
        </div>
        <div class="profile-content">
        <!-- Product section-->
        <!-- <form class="py-5 border border-dark" style="width : 50%">
            <div class=" px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="wp5464254-wallpaper-full-hd-musica.png" /></div>
                    <div class="col-md-6" style="width : 40%">
                        <h1 class="display-5 fw-bolder" id="title1"></h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through" id="prix1"></span>
                            <span></span>
                        </div>
                        <p class="lead" id="dess1"></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        </div>
                    </div>
                </div>
            </div>
        </form> -->
        <!-- Related items section -->
        <section class="bg-primary">
            <div class=" px-4 px-lg-5 mt-5" style="min-height:73.3vh">
                <h2 class="fw-bolder mb-4 ms-6">products</h2>
                <div class="container row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                        AddTask();
                    ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark" style="">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>

        <!-- TASK MODAL -->
        <div class="modal fade" id="modal-task">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="scripts.php" method="POST" id="form-task">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Task</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                                <!-- This Input Allows Storing Task Index  -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="task-title"/>
                                </div>
                                <div class="mb-3">
								<label class="form-label">Priority</label>
								<select class="form-select" name="status" id="task-priority">
									<option value="">Please select</option>
									<option value="1">piano</option>
									<option value="2">guitare</option>
									<option value="3">le VIOLON</option>
									<option value="4">Oud</option>
                                    <option value="5">autre</option>
								</select>
							</div>
                                <div class="mb-3">
                                    <label class="form-label">prix</label>
                                    <input type="number" name="prix" class="form-control" id="task-prix"/>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="10" id="task-description" name="description"></textarea>
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            function aff(id)
		    {
                document.getElementById('title1').innerHTML = document.getElementById("titlee_"+id).getAttribute('data');
                document.getElementById('prix1').innerHTML = document.getElementById("prixx"+id).getAttribute('data');
                document.getElementById('dess1').innerHTML = document.getElementById("descriptionn"+id).getAttribute('data');
            }
        </script>
    </body>
</html>

<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">Shop item template</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">$45.00</span>
                            <span>$40.00</span>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>