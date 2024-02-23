
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
            width: 80% ;
            margin: 0 100px 0 100px;
            display: flex;
            justify-content: center;
        }
       .main_container{
           display: flex;
           flex-direction: column;
           width: 70%;
           padding: 10px;
           border: 10px silver solid;
       }
       .main_container-Compo{
           display: flex;
           flex-direction: column;
           margin: 0 20px 0 20px;

       }
       h3{
           border-bottom:2px silver solid ;
       }
       .basic_info{
           display: flex;
       }
        label{
           min-width: 140px;
       }
      .main_container-Compo .normal_input{
          flex:1;
          height: 25px;
      }
        .main_container-Footer{
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
        .normal_input{
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
<form class="main_container">
    <h3>Basic Info</h3>
    <div class="main_container-Compo basic_info">
        <div class="basic_info">
            <label>Employee ID </label>
            <input class="normal_input" type="text">
        </div>
        <div class="basic_info">
            <label>Last Name</label>
            <input class="normal_input" type="text">
        </div>
        <div class="basic_info">
            <label>First Name</label>
            <input class="normal_input" type="text" >
        </div>
        <div class="basic_info">
            <label>Gender</label>
            <div>
            <?php
            foreach ($genders as $item){
                echo '<input  type="radio" name="gender" >'.$item.'<br>';
            }
            ?>
            </div>
        </div>
        <div class="basic_info">
            <label>Title</label>
            <input class="normal_input" type="text" >
        </div>
        <div class="basic_info">
            <label>Suffix</label>
            <input class="normal_input" type="text">
        </div>
        <div class="basic_info">
            <label>BirthDate</label>
            <input class="normal_input" type="date">
        </div>
        <div class="basic_info">
            <label>HireDate</label>
            <input class="normal_input" type="date">
        </div>
        <div class="basic_info">
            <label>SSN # (if applicable)</label>
            <input class="normal_input" type="text">
        </div>
        <div class="basic_info">
            <label>Report To</label>
            <select>
                <option value="Buchanan">Buchanan</option>
            </select>
        </div>
    </div>
    <h3>Contact Info</h3>
    <div class="main_container-Compo">
        <div class="basic_info">
            <label>Email</label>
            <input class="normal_input" type="email">
        </div>
        <div class="basic_info">
            <label>Address</label>
            <input class="normal_input" type="text">
        </div>
        <div class="basic_info">
            <label>City</label>
            <input class="normal_input" type="text">
        </div>
        <div class="basic_info">
            <label>Region</label>
            <input class="normal_input" type="text">
        </div>
        <div class="basic_info">
            <label>PostalCode</label>
            <input class="normal_input" type="text">
        </div>
        <div class="basic_info">
            <label>Country</label>
            <?php
            echo '<select>';
            foreach ($countries as $country){
                echo '<option value="'.$country.'">'.$country.'</option>';
            }
            echo '</select>';
            ?>
        </div>
        <div class="basic_info">
            <label>US Home Phone</label>
            <input class="normal_input" type="text">
        </div>
        <div class="basic_info">
            <label>Photo</label>
            <input class="normal_input" type="text">
        </div>
    </div>
    <h3>Optional Info</h3>
    <div class="main_container-Compo">
        <div class="basic_info">
            <label>Notes</label>
            <form method="post">
                <textarea id="mytextarea">Hello, World!</textarea>
            </form>
        </div>
        <div class="basic_info">

            <label>Preferred Shift</label>
            <div>
            <?php
            foreach ($preferred_shift as $value){
                echo '<input type="checkbox" value="'.$value.'">'.$value.'<br>';
            }
            ?>
            </div>
        </div>
        <div class="basic_info">
            <label>Active?</label>
            <input type="checkbox" name="Active">
        </div>
        <div class="basic_info">
            <label>Are you human?</label>
            <input type="text" name="Captcha">
        </div>

        <div class="main_container-Footer">
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
