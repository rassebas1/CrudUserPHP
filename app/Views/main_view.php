<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UsersCRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <section>
        <?= $header ?>

        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Users</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Document</th>
                                <th>Birth Date</th>
                                <th>Gender</th>
                                <th>EPS</th>
                                <th>Role</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr>

                                    <td><?= $user["name"] ?></td>
                                    <td><?= $user["document"] ?></td>
                                    <td><?= $user["birth_date"] ?></td>
                                    <td><?= $user["gender"] ?></td>
                                    <td><?= $user["eps_id"] ?></td>
                                    <td><?= $user["role_id"] ?></td>
                                    <td>
                                        <a href="<?= base_url("/edit/" . $user["id"]) ?>" class="btn btn-primary">Edit</a>
                                        <a href="<?= base_url("/delete/" . $user["id"]) ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
        <?= $footer ?>
    </section>

</body>

</html>