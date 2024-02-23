<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <script type="text/javascript" src="./tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            language: 'sv',
            language_url: '/js/sv.js',
            plugins: 'myplugin',
            external_plugins: {
                'myplugin': '/js/myplugin/plugin.min.js'
            }
        });

    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
        html,body{
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }
        .form-container{
            display: flex;
            flex-direction: column;
            width: 70%;
            padding: 10px;
            border: 10px silver solid;
        }
        .form-section{
            display: flex;
            flex-direction: column;
            margin: 0 20px;
        }
        h3{
            border-bottom: 2px silver solid;
        }
        .input-container{
            display: flex;
            align-items: center;
        }
        label{
            min-width: 140px;
        }
        .input-container .input-field{
            flex: 1;
            height: 25px;
        }
        .footer-section{
            display: flex;
            justify-content: space-between;
            border-top: 5px silver solid;
            margin-top: 20px;
        }
        button{
            color: slategray;
            margin: 10px;
        }
        select{
            height: 35px;
            width: fit-content;
        }
        .input-field{
            flex: fit-content;
        }
        @media only screen and (max-width: 46.1875em) {
        }

        @media only screen and (min-width: 46.25em) and (max-width: 63.9375em){

        }
    </style>
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
<form class="form-container">
    <h3>Basic Info</h3>
    <div class="form-section">
        <div class="input-container">
            <label>Employee ID </label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>Last Name</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>First Name</label>
            <input class="input-field" type="text" >
        </div>
        <div class="input-container">
            <label>Gender</label>
            <div>
                <?php
                foreach ($genders as $item){
                    echo '<input  type="radio" name="gender" >'.$item.'<br>';
                }
                ?>
            </div>
        </div>
        <div class="input-container">
            <label>Title</label>
            <input class="input-field" type="text" >
        </div>
        <div class="input-container">
            <label>Suffix</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>BirthDate</label>
            <input class="input-field" type="date">
        </div>
        <div class="input-container">
            <label>HireDate</label>
            <input class="input-field" type="date">
        </div>
        <div class="input-container">
            <label>SSN # (if applicable)</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>Report To</label>
            <select>
                <option value="Buchanan">Buchanan</option>
            </select>
        </div>
    </div>
    <h3>Contact Info</h3>
    <div class="form-section">
        <div class="input-container">
            <label>Email</label>
            <input class="input-field" type="email">
        </div>
        <div class="input-container">
            <label>Address</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>City</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>Region</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>PostalCode</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>Country</label>
            <?php
            echo '<select>';
            foreach ($countries as $country){
                echo '<option value="'.$country.'">'.$country.'</option>';
            }
            echo '</select>';
            ?>
        </div>
        <div class="input-container">
            <label>US Home Phone</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>Photo</label>
            <input class="input-field" type="text">
        </div>
    </div>
    <h3>Optional Info</h3>
    <div class="form-section">
        <div class="input-container">
            <label>Notes</label>
            <form method="post">
                <textarea id="mytextarea">Hello, World!</textarea>
            </form>
        </div>
        <div class="input-container">
            <label>Preferred Shift</label>
            <div>
                <?php
                foreach ($preferred_shift as $value){
                    echo '<input type="checkbox" value="'.$value.'">'.$value.'<br>';
                }
                ?>
            </div>
        </div>
        <div class="input-container">
            <label>Active?</label>
            <input type="checkbox" name="Active">
        </div>
        <div class="input-container">
            <label>Are you human?</label>
            <input type="text" name="Captcha">
        </div>
        <div class="footer-section">
            <div>
                <button type="button"><=</button>
                <button type="button">=></button>
            </div>
            <div>
                <button type="submit">Submit</button>
                <button type="reset">Cancel</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>
