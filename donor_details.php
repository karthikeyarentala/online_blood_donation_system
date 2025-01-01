<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <link rel="stylesheet" href="donor_details_style.css">
</head>
<body>
    <form action="donor_details.php" method="post">
        <div>
            <h2>Personal Details</h2>
            <div>
                <label for="countries">Country:</label>
                <select name="country" id="countries">
                    <option value="">--Select a Country--</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                    <option value="Congo (Kinshasa)">Congo (Kinshasa)</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Greece">Greece</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="North Korea">North Korea</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia">Micronesia</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts</option>
                </select>
            </div>
            <br>
            <div>
                <label for="state">State:</label>
                <input type="text" placeholder="Enter your state" name="state" required>
            </div>
            <br>
            <div>
                <label for="city">City:</label>
                <input type="text" placeholder="Enter your city" name="city" required>
            </div>
            <br>
            <div>
                <label for="address">Address</label>
                <br><textarea name="address" rows="6" cols="74" placeholder="write your address here...."></textarea>
            </div>
            <br>
            <div>
                <label for="gender">Gender?</label><br>
                <input type="radio" name="gender" value="Male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender" value="Female">
                <label for="female">Female</label><br>
            </div>
            <br>
            <div>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="18" max="65">
            </div>
            <br>
            <div>
                <label for="weight">Weight:</label>
                <input type="number" name="weight" min="50" max="105">
            </div>
            <br>
            <div>
                <label for="general health">Any general health issues like fever, cold, cough in recent days?</label><br>
                <input type="radio" name="gh" value="fever">
                <label for="fever">Fever</label><br>
                <input type="radio" name="gh" value="cold">
                <label for="cold">Cold</label><br>
                <input type="radio" name="gh" value="cough">
                <label for="cough">Cough</label><br>
                <input type="radio" name="gh" value="none">
                <label for="none">None</label><br>
            </div>
            <br>
            <div>
                <label for="bad">Any bad habits?</label><br>
                <input type="radio" id="smoking" name="bad" value="Smoking">
                <label for="smoking">Smoking</label><br>
                <input type="radio" id="drinking" name="bad" value="Alcohol consumption">
                <label for="drinking">Alcohol consumption</label><br>
                <input type="radio" id="drugs" name="bad" value="Drugs intake">
                <label for="drugs">Drugs intake</label><br>
                <input type="radio" id="none" name="bad" value="None">
                <label for="none">None</label><br>
            </div>
            <br>
            <div>
                <label for="bp">Blood pressure?</label><br>
                <label for="sp">Systolic pressure:</label>
                <input type="number" name="sp" min="90" max="180"><br>
                <label for="dp">Diastolic pressure:</label>
                <input type="number" name="dp" min="50" max="100"><br>    
            </div>
            <br>
            <div>
                <label for="rs&mi">Recent surgery or major illness ?</label><br>
                <input type="radio" name="rsmi" value="yes">
                <label for="ms">Yes</label><br>
                <input type="radio" name="rsmi" value="no">
                <label for="ms">No</label><br>
            </div>
            <br>
            <div>
                <label for="time">Time between recent donations ?</label><br>
                <input type="radio" id="3" name="time" value="3 months">
                <label for="time">3 months</label><br>
                <input type="radio" id="6" name="time" value="6 months">
                <label for="time">6 months</label><br>
                <input type="radio" id="9" name="time" value="9 months">
                <label for="time">9 months</label><br>
                <input type="radio" id="12" name="time" value="12 months">
                <label for="time">12 months</label><br>
                <input type="radio" id=">12" name="time" value=">12 months">
                <label for="time"> > 12 months</label><br>
            </div>
            <br>
            <div>
                <label for="pd">Permenant diseases like HIV, AIDS, Cancer etc...</label><br>
                <input type="radio" name="pd" value="HIV">
                <label for="hiv">HIV</label>
                <input type="radio" name="pd" value="AIDS">
                <label for="aids">AIDS</label>
                <input type="radio" name="pd" value="Cancer">
                <label for="cancer">Cancer</label>
                <input type="radio" name="pd" value="None">
                <label for="none">None</label>
            </div>
            <br>
            <div>
                <input type="submit" name="submit" value="Submit">
            </div>
        </div>
        </div>
    </form>
</body>
</html>

<?php
    $db_hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "blood_donation";
    $conn = new mysqli($db_hostname,$db_username,$db_password,$db_name);

    if(empty($_POST['country']) && empty($_POST['state']) && empty($_POST['city']) && empty($_POST['address'])){
        echo "";
    }
    else{
        $c = $_POST['country'];
        $s = $_POST['state'];
        $ci = $_POST['city'];
        $a = $_POST['address'];

        $sql = "INSERT INTO personal_details(country, state, city, address)
                VALUES('$c','$s', '$ci', '$a');";
        $res = $conn->query($sql);
    }
?>