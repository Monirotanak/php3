<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 p-5 shadow rounded-2">
        <a href="insert.php" class="btn btn-success float-end mb-3">+Add Employee</a>
        <table class="table table-hover text-center">
           <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
           </thead>
           <tbody>
            <?php 
            include 'connection.php';
            $select = "SELECT * FROM tbl_employee";
            $execute = mysqli_query($conn, $select);
            while($row=mysqli_fetch_assoc($execute)){
                echo '
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['position'].'</td>
                    <td>'.$row['salary'].'</td>
                    <td>
                        <div class="d-flex gap-2 justify-content-center">
                       <Form action="delete.php" method="post">
                        <input type="hidden" name="id" value=' .$row['id'].'>
                        <button name="delete" class="btn btn-outline-danger">Delete</button>
                       </Form>
                       <a href="Edit.php?id='.$row['id'].'" class="btn btn-outline-warning">Edit</a>
                   </div>
                    </td>
                </tr
                ';
            }
                
            ?>
     </tbody>
    </div>
</body>
</html>
