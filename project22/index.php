<?php
    $user = [
"id" => 1,
"name" => "John Doe",
"email" => "johndoe@example.com",
"avatar" => "uploads/default_avatar.png" // Initial avatar URL
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Liên kết với thư viện FontAwesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/services/service-6/assets/css/service-6.css" />
</head>

<body>
<div class="container">
<h2>Profile Information</h2>
    <p></p>
<form action="update_profile.php" method="post" enctype="multipart/form-data">
    <div class="mb-3 row">
        <label for="Name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" name="name" value="<?php echo $user['name']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="email" value="<?php echo $user['email']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Upload" class="col-sm-2 col-form-label">Choose File</label>
        <div class="col-sm-10">
            <input class="form-control"  accept="image/*" type="file" id="formFile" name="avatar">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2"></label>
        <div class="col-sm-1">
           <button type="Submit" class="btn btn-success">Upload</button>
        </div>
    </div>
</form></div>
</body>
</html>

