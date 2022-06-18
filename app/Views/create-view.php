<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UsersCRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <?= $header ?>
    <h1>Create User</h1>
    <form method="post" action="<?= base_url("home") ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="document">Document</label>
            <input type="text" name="document" class="form-control" id="document" placeholder="Document">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" class="form-control" id="gender" placeholder="Gender">
        </div>
        <div class="form-group">
            <label for="birth_date">Birth Date</label>
            <input type="date" name="birth_date" class="form-control" id="birth_date">

        </div>
        <div class="form-group">
            <label for="eps_id">EPS</label>
            <input type="text" name="eps_id" class="form-control" id="eps_id">

        </div>
        <div class="form-group">
            <label for="role_id">Role</label>
            <input type="text" name="role_id" class="form-control" id="role_id">

        </div>
        <button type="submit" class="btn mr-3 btn-primary">Submit</button>

    </form>
    <?= $footer ?>
</body>

</html>