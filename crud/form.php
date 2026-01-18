<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container w-50 mt-4 p-5 shadow rounded-2">
        <h2 class="text-center">Employee Form</h2>

        <form action="insert.php" method="post">
            <!-- Employee Name -->
            <div class="mb-2">
                <label for="name" class="form-label">Employee Name</label>
                <input type="text" name="name" id="name" class="form-control"
                       placeholder="Employee name..." required>
            </div>

            <!-- Gender -->
            <div class="mb-2">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-select" required>
                    <option value="" disabled selected>--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <!-- Email -->
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email"
                       class="form-control" placeholder="Email..." required>
            </div>

            <!-- Position -->
            <div class="mb-2">
                <label for="position" class="form-label">Employee Position</label>
                <select class="form-select" name="position" id="position" required>
                    <option value="" disabled selected>--Position--</option>
                    <option value="manager">Manager</option>
                    <option value="assistant_manager">Assistant Manager</option>
                    <option value="hr">HR Officer</option>
                    <option value="accountant">Accountant</option>
                    <option value="developer">Software Developer</option>
                    <option value="designer">UX/UI Designer</option>
                    <option value="marketing">Marketing Specialist</option>
                    <option value="sales">Sales Executive</option>
                    <option value="support">Customer Support</option>
                    <option value="intern">Intern</option>
                </select>
            </div>

            <!-- Salary -->
            <div class="mb-2">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" name="salary" id="salary"
                       class="form-control" placeholder="Salary..." required>
            </div>

            <button type="submit" name="submit" class="btn btn-success d-flex mx-auto">
                Submit
            </button>
        </form>
    </div>
</body>
</html>
