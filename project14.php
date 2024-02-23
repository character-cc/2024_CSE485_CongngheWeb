<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Liên kết với thư viện FontAwesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/project14.css">
    <script type="text/javascript" src="./tinymce/tinymce.min.js"></script>
</head>
<body>
<?php
$countries = array (
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);
$genders = array(
    "Male","Female","XXX","ZZZ"
);
$preferred_shift = array(
    'Regular','Gravy Yard'
);
?>
<form class="main_container">
    <h3>Basic Info</h3>
    <div class="section_container">
        <div class="form_field">
            <label>Employee ID</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>Last Name</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>First Name</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>Gender</label>
            <div>
                <?php
                foreach ($genders as $item){
                    echo '<input  type="radio" name="gender" >'.$item.'<br>';
                }
                ?>
            </div>
        </div>
        <div class="form_field">
            <label>Title</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>Suffix</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>BirthDate</label>
            <input class="standard_input" type="date">
        </div>
        <div class="form_field">
            <label>HireDate</label>
            <input class="standard_input" type="date">
        </div>
        <div class="form_field">
            <label>SSN # (if applicable)</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>Report To</label>
            <select>
                <option value="Buchanan">Buchanan</option>
            </select>
        </div>
    </div>

    <h3>Contact Info</h3>
    <div class="section_container">
        <div class="form_field">
            <label>Email</label>
            <input class="standard_input" type="email">
        </div>
        <div class="form_field">
            <label>Address</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>City</label>
            <input class="standard_input" type="email">
        </div>
        <div class="form_field">
            <label>Region</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>Postal Code</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>Country</label>
            <?php
            echo '<select>';
            foreach ($countries as $country){
                echo '<option value="'.$country.'">'.$country.'</option>';
            }
            echo '</select>';
            ?>
        </div>
        <div class="form_field">
            <label>US Home Phone</label>
            <input class="standard_input" type="text">
        </div>
        <div class="form_field">
            <label>Photo</label>
            <input class="standard_input" type="text">
        </div>
    </div>
    <h3>Optional Info</h3>
    <div class="section_container">
        <div class="form_field">
            <label>Note</label>
            <form method="post">
                <textarea id="mytextarea">Hello, World!</textarea>
            </form>
        </div>
        <div class="form_field">
            <label>Gender</label>
            <div>
                <?php
                 foreach ($preferred_shift as $tmp){
                    echo '<input  type="radio" name="gender" >'.$tmp.'<br>';
                }
                ?>
            </div>
        </div>
        <div class="form_field">
            <label>Active</label>
            <input type="checkbox" name="Active">
        </div>
        <div class="form_field">
            <button>Submit</button>
            <button>Cancel</button>
        </div>
    </div>
    <div>



</form>

</body>
</html>
