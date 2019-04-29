<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="css/bootstrap.css">-->
    <title>All tasks</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All Tasks</h1>
            <a href="create.php" class="btn btn-success">Add Task</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>
                        <a href="#" class="btn btn-info">Show</a>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>