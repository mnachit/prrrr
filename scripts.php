<?php

// connection avec data base
include 'database.php';
// fin

// isset
if(isset($_POST['save']))   SaveTasks();
if(isset($_POST['update']))   update();
if(isset($_POST['delet']))   delete();
//fin

function SaveTasks()
{
    $title = $_POST['title'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $statu = $_POST['status'];

    $sql = "INSERT INTO `tasks`(`title`, `prix`, `description` ,`Status_id`) VALUES ('$title','$prix','$description','$statu')";

    global $conn;

    if ($conn->query($sql) === true)
        echo "true";
    else
        {
            echo "false" . $sql . "<br>" . $conn->error;
        exit();
        }
    $conn->close;
    header('location: home.php');
}

function AddTask()
{
    $index = 0;
    $requet = "SELECT status.name as name ,tasks.* FROM tasks JOIN status ON tasks.Status_id = status.id";
    global $conn;

    $qury = mysqli_query($conn, $requet);
    
    while ($row = mysqli_fetch_assoc($qury))
    {
        $id = $row['id'];
        echo '
            <div class="col mb-5 carte" id="" title="'.$row['Status_id'].'">
                <div class="card h-100 bg-white">
                    <!-- Sale badge-->
                    <!-- Product image-->
                    <img class="card-img-top" src="wp5464254-wallpaper-full-hd-musica.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div>
                            <!-- Product name-->
                            <h5 id="titlee_'.$id.'" class="fw-bolder text-center" data="'.$row['title'].'">
                            <small style="font-size: 10px; font-weight: 700; margin-top: -20px;" class="text-warning">'.$row['name'].'</small></br>'.$row['title'].'</h5>
                            <!-- Product price-->
                            <h5 id="prixx'.$id.'" data="'.$row['prix'].'" class="fw-bolder text-center pt-2">$'.$row['prix'].'</h5>
                            <h5 id="stattus_'.$id.'" data="'.$row['Status_id'].'"></h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent" id="descriptionn'.$id.'" data="'.$row['description'].'">
                        <div class="text-center mt-3"><a class="btn btn-outline-dark mt-auto" href="#modal-task1" data-bs-toggle="modal" onclick="afficher('.$id.')">Afficher les détails</a></div>
                    </div>
                </div>
            </div>';
    }
}

function update()
{
    $title1       = $_POST['title1'];
    $prority1     = $_POST['status1'];
    $prix1        = $_POST['prix1'];
    $description1 = $_POST['description1'];
    $id1          = $_POST['idd1'];

    $upd = "UPDATE `tasks` SET `title` = '$title1', `Status_id` = '$prority1', `prix` = '$prix1', `description` = '$description1' WHERE `id` = '$id1'";
    global $conn;
    $qury5 = mysqli_query($conn, $upd);
    //SQL UPDATE
    $_SESSION['message'] = "Task has been updated successfully !";
    header('location: home.php');
}
function delete()
{
    $id = $_POST['idd1'];
    $sql1 = "DELETE FROM tasks where id='$id'";
    global $conn;
    $qury1 = mysqli_query($conn,$sql1);
    $_SESSION['message'] = "Task has been deleted successfully !";
        header('location: home.php');
}