<?php
   include 'connection.php';
   $id=$_GET['id'];
   $select = "SELECT * FROM tbl_employee WHERE id='$id'";
   $execute = $conn->query($select);
   $row = mysqli_fetch_assoc($execute);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="p-4">
    <a href="table.php"><i class="fa-solid fa-left-long fs-2"></i></a>
     <div class="container w-50 mt-4 p-5 shadow rounded-2">
        <h2 class="text-center">Form Edit</h2>

        <form action="Update.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <!-- Employee Name -->
            <div class="mb-2">
                <label for="name" class="form-label">Employee Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $row['name'] ?>"
                       placeholder="Employee name..." required>
            </div>

            <!-- Gender -->
            <div class="mb-2">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select" required>
                <option value="" disabled>--Select Gender--</option>
    <option value="male" <?= $row['gender'] == 'male' ? 'selected' : '' ?>>Male</option>
    <option value="female" <?= $row['gender'] == 'female' ? 'selected' : '' ?>>Female</option>
</select>

            </div>

            <!-- Email -->
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" value="<?= $row['email'] ?>" 
                       class="form-control" placeholder="Email..." required>
            </div>

            <!-- Position -->
            <div class="mb-2">
                <label for="position" class="form-label">Employee Position</label>
                <select class="form-select" name="position" required>
    <option value="" disabled>--Position--</option>
    <option value="manager" <?= $row['position'] == 'manager' ? 'selected' : '' ?>>Manager</option>
    <option value="assistant_manager" <?= $row['position'] == 'assistant_manager' ? 'selected' : '' ?>>Assistant Manager</option>
    <option value="hr" <?= $row['position'] == 'hr' ? 'selected' : '' ?>>HR Officer</option>
    <option value="accountant" <?= $row['position'] == 'accountant' ? 'selected' : '' ?>>Accountant</option>
    <option value="developer" <?= $row['position'] == 'developer' ? 'selected' : '' ?>>Software Developer</option>
    <option value="designer" <?= $row['position'] == 'designer' ? 'selected' : '' ?>>UX/UI Designer</option>
    <option value="marketing" <?= $row['position'] == 'marketing' ? 'selected' : '' ?>>Marketing Specialist</option>
    <option value="sales" <?= $row['position'] == 'sales' ? 'selected' : '' ?>>Sales Executive</option>
    <option value="support" <?= $row['position'] == 'support' ? 'selected' : '' ?>>Customer Support</option>
    <option value="intern" <?= $row['position'] == 'intern' ? 'selected' : '' ?>>Intern</option>
</select>

            </div>

            <!-- Salary -->
            <div class="mb-2">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" name="salary" id="salary" value="<?= $row['salary'] ?>"
                       class="form-control" placeholder="Salary..." required>
            </div>

            <button type="submit" name="update" class="btn btn-success d-flex mx-auto">
                Update
            </button>
        </form>
    </div>
</body>
</html>