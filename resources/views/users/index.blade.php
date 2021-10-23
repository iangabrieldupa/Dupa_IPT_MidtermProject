<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IPT Midtem Project</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   
    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">IPT Midterm Project</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="nav justify-content-end">
          <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= url('/')?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= url('/users')?>">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= url('/accounts')?>">Account</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">
            <div class="align-self-center px-5 mt-2">
                <h1>Users</h1>
                <table class="table table-bordered table">
                    <thead class="bg-primary">
                        <tr>
                            <th>User ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $u): ?>
                        <tr class="fs-5">
                            <td><?= $u->id?></td>
                            <td><?= $u->lname?></td>
                            <td><?= $u->fname?></td>
                            <td><?= $u->address?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

</body>
</html>