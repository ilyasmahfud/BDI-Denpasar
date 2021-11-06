<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="profile.css">
    <title>My Profile</title>
</head>
<body>
    <div class="container mt-5 card">
        <div class="row">
            <div class="col-md-6" align="center">
                <img class="img-tumbnail m-5" src="
                    <?php
                        echo $link_foto;
                    ?>
                " alt="">
            </div>
            <div class="col-md-6">
                <table class="table">
                    <h1>Your Profile</h1>
                    <!-- <thead class="thead-light">
                        <tr>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td>Name</td>
                            <td>
                                <?php
                                    echo $name;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>NIK</td>
                            <td>
                                <?php 
                                    echo $NIK;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <?php
                                    echo $gender;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>
                                <?php
                                    echo $address;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Mobile Phone</td>
                            <td>
                                <?php
                                    echo $mobilePhone;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <?php
                                    echo $email;
                                ?>
                            </td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>