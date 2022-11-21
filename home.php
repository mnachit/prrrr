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
        <title>Shop music</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            #footer {         
            position: absolute;
            left: 0;
            bottom: 12px;
            width: 100%;
            }
        </style>
    </head>
    <body id="jamal" style= "background: linear-gradient(90deg, rgba(43,204,189,1) 0%, rgba(6,69,67,0.8715861344537815) 50%);">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Music</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#footer">About</a></li>
                        
                    </ul>
                    <!-- <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                        </button>
                    </form> -->
                </div>
            </div>
            <li class="nav-item dropdown d-flex flex-row mb-2 text-dark">
                
                <img class="rounded-circle" src="12.jpg" style="
                    height:40px; 
                    width: 40px;" /> 
                <span>
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right : 25px"><?php echo $_SESSION['first_namee']; echo " ";echo $_SESSION['last_namee'];?></a>
                <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                    <li class="nav-item"><a class="nav-link" href="#modal-task_profil" data-bs-toggle="modal" onclick="affPro()"><i class="bi bi-pencil-square pe-2"></i>Edit profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#modal-task12" data-bs-toggle="modal"><i class="bi bi-pencil-square pe-2"></i>send message</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-in-right pe-2 "></i>logout</a></li>
                </ul>
            </li>
        </nav>
        <!-- Product section-->
        <?php if (isset($_SESSION['message'])){?>
            <div class="alert alert-danger" role="alert">
            <?php    echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?></div>
        <?php } ?>
        <div>
        <section class="py-2">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="d-flex justify-content-between">
                    <h2 class="fw-bolder mb-4 mt-1">Related products</h2>
                    <h2 class="fw-bolder mb-4">
                        <select class="form-select mt-2 text-dark" name="status1" id="searchbar1" onclick="search_animal11()">
                            <option value="6">All Product</option>
                            <option value="1">piano</option>
                            <option value="2">guitare</option>
                            <option value="3">le VIOLON</option>
                            <option value="4">Oud</option>
                            <option value="5">autre</option>
                        </select>
                    </h2>
                    <div class="fw-bolder mb-4">
                        <h2 class="input-group mt-2">
                            <input id="searchbar" class="form-control rounded" placeholder="Search" onkeyup="search_animal()" type="text" name="search" placeholder="Search animals..">                  
                    </div>
                    <button class="fw-bolder  text-dark btn bg-dark text-white mb-3" href="#modal-task" data-bs-toggle="modal"><i class="bi bi-plus-circle-fill pe-2"></i>add product</button>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
                    
                    <?php
                        AddTask();
                    ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <!-- <footer class="py-5 bg-dark" id="footer">
        </footer> -->
        </div>
        <!-- form message -->
        <div class="modal fade" id="modal-task12">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="mail.php" method="POST" id="form-task">
                    <div class="modal-body">
                                <!-- Name input -->
                        <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" name="namee" id="namee" type="text" placeholder="Name" />
                        </div>

                        <!-- Email address input -->
                        <div class="mb-3">
                        <label class="form-label" for="emailAddress">Email Address</label>
                        <input class="form-control" name="emaill" id="emailAddress" type="emaill" placeholder="Email Address" />
                        </div>

                        <!-- Message input -->
                        <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" name="messagee" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                        </div>

                        <!-- Form submit button -->
                        <div class="d-grid">
                        <button class="btn btn-primary btn-lg" name="sybmmit" type="submit">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

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
							    <input type="hidden" id="task-id2" name="idd1">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="task-title"/>
                                </div>
                                <div class="mb-3">
								<label class="form-label">Priority</label>
								<select class="form-select " name="status" id="task-priority">
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

        <!-- TASK MODAL -->
        <div class="modal fade" id="modal-task_profil">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="script.php" method="POST" id="form-task44">
                        <div class="modal-header">
                            <h5 class="modal-title">edit profil</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                                <!-- This Input Allows Storing Task Index  -->
							    <input type="hidden" id="task-id__" name="idd1">
                                <!-- Product image-->
                                <div class="d-flex justify-content-center">
                                    <img class="card-img-top rounded-circle w-50 h-50" src="123.jpg" alt="..." />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">PRÉNOM</label>
                                    <input type="text" name="title12" class="form-control" id="task-title_profil1" value='<?php echo $_SESSION['first_namee'];?>'/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">NOM</label>
                                    <input type="text" name="title21" class="form-control" id="task-title_profil2" value='<?php echo $_SESSION['last_namee'];?>'/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" name="prix56" class="form-control" id="task-title_profil5" value='<?php echo $_SESSION['emaill'];?>'/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">date de naissance</label>
                                    <input type="date" name="prix34" class="form-control" id="task-title_profil3" value='<?php echo $_SESSION['datee'];?>'/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="task-title_profil4">Numéro de téléphone</label>
                                    <input type="tel" name="prix43" class="form-control" id="task-title_profil4" value='<?php echo $_SESSION['num_telee'];?>'/>
                                </div>
						</div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="save_" class="btn btn-primary task-action-btn" id="task-save-btn" onclick="ver()">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- TASK MODAL -->
        <div class="modal fade" id="modal-task1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="scripts.php" method="POST" id="form-task">
                        <div class="modal-header">
                            <h5 class="modal-title">Afficher les détails</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                                <img class="card-img-top " style="width : 80%; margin-left : 44px" src="wp5464254-wallpaper-full-hd-musica.png" alt="..." />
                                <!-- This Input Allows Storing Task Index  -->
							    <input type="hidden" id="task-id1" name="idd1">
                                <div class="mb-3">
                                    <label class="form-label pt-3">Title</label>
                                    <input type="text" name="title1" class="form-control" id="task-title2"/>
                                </div>
                                <div class="mb-3">
								<label class="form-label">Priority</label>
								<select class="form-select" name="status1" id="task-priority2">
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
                                    <input type="number" name="prix1" class="form-control" id="task-prix2"/>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="10" id="task-description2" name="description1"></textarea>
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white btn-secondary" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="delet" class="btn btn-danger task-action-btn" id="task-save-btn">DELET</button>
                            <button type="submit" name="update" class="btn btn-success task-action-btn" id="task-save-btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <!-- BEGIN parsley css-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
        <!-- END parsley css-->

        <!-- BEGIN jquery js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- BEGIN parsley js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            function afficher(id)
            {
			    document.getElementById('task-id1').value = id;
                document.getElementById("task-title2").value = document.getElementById("titlee_"+id).getAttribute("data");
                document.getElementById("task-prix2").value = document.getElementById("prixx"+id).getAttribute("data");
                document.getElementById("task-description2").value = document.getElementById("descriptionn"+id).getAttribute("data");
                document.getElementById("task-priority2").value = document.getElementById("stattus_"+id).getAttribute("data");
            }
        </script>
        <!-- <script>
            function affPro()
            {
                document.getElementById('task-title_profil1').value = '<?= $_SESSION['first_namee']?>';
                document.getElementById('task-title_profil2').value = '<?= $_SESSION['last_namee']?>';
            }
        </script> -->
        <script>
            function ver()
            {
                if (document.getElementById('prix65').value != document.getElementById('prix77').value)
                {
                    alert("att");
                }
            }
            function search_animal() {
                let input = document.getElementById('searchbar').value
                let x = document.getElementsByClassName('carte');
                
                for (i = 0; i < x.length; i++) {
                    if (!x[i].innerHTML.toLowerCase().includes(input)) {
                        x[i].style.display="none";
                    }
                    else {
                        x[i].style.display=document.getElementById('titlee_');				
                    }
                }
            }

            function search_animal11() {
                let input = document.getElementById('searchbar1').value
                let x = document.getElementsByClassName('carte');
                if (input != 6)
                {
                    for (i = 0; i < x.length; i++) {
                        if (x[i].getAttribute("title") != input){
                            x[i].style.display="none";
                        }
                        else {
                            x[i].style.display="block";				
                        }
                    }
                }
                else {
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display="block";
                    }				
                }
            }
        </script>
    </body>
</html>