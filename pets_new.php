<?php
require 'layout/header.php';
?>
<?php require 'lib/functions.php'?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ?>
    <?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = '';
    }
    if (isset($_POST['breed'])) {
        $breed = $_POST['breed'];
    } else {
        $breed = '';
    }
    if (isset($_POST['weight'])) {
        $weight = $_POST['weight'];
    } else {
        $weight = '';
    }
    if (isset($_POST['bio'])) {
        $bio = $_POST['bio'];
    } else {
        $bio = '';
    }
    $pets = get_pets();
    $newPet = array(
        'name' => $name,
        'breed' => $breed,
        'weight' => $weight,
        'bio' => $bio,
        'age' => '',
        'image' => '',
    );
    $pets[] = $newPet;

    save_pets($pets);

    header('Location: /start');
    die();



}


?>
<div class="container">
    <div class="col-xs-6"></div>
    <h1>Add your Pet! Squirrel!</h1>
    <form action="pets_new.php" method="POST">
        <div class="form-group">
            <label for="pet-name" class="control-label">Pet Name</label>
            <input type="text" name="name" id="pet-name" class="form-control">
        </div>
        <div class="form-group">
            <label for="pet-breed" class="control-label">Pet Breed</label>
            <input type="text" name="breed" id="pet-breed" class="form-control">
        </div>
        <div class="form-group">
            <label for="pet-weight" class="control-label">Pet Weight(lbs)</label>
            <input type="text" name="weight" id="pet-weight" class="form-control">
        </div>
        <div class="form-group">
            <label for="pet-bio" class="control-label">Pet Bio</label>
            <input type="text" name="bio" id="pet-bio" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-heart"></span>
            Add
        </button>
    </form>
</div>
<?php require 'layout/footer.php'; ?>
