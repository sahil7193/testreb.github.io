<?php
include '_dbConnect.php';

// session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
    header('location: index.php');
}
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .container {
        margin-top: 5rem;
        margin-bottom: 5rem;
        padding: 5rem;
        box-shadow: 10px 0 30px rgba(0, 0, 0, 0.3);
    }

    body {
        font-size: 1.6rem !important;
        background: #03a8f44f;
    }
    form{
        background-color: #fff;
    }

    textarea {
        resize: none;
        font-size: 1.5rem !important;
    }

    input {
        font-size: 1.7rem !important;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    fieldset fieldset {
        margin-left: 3rem;
    }

    fieldset fieldset legend {
        font-style: italic;
    }

    .btn-primary {
        padding: 1rem 1.5rem;
        font-size: 1.5rem !important;
    }
    .model{
        text-align: center;
        margin-bottom: 5rem;
    }
    .model h2{
        font-size: 3rem;
        font-style: italic;
        font-weight: bold;
        letter-spacing: 1px;

    }
</style>
<?php
echo '

          <form class="container p-5" method="post" action="submitData.php">
          <div class="model"><h2>Survey Form</h2></div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4"> First name</label>
            <input type="text" class="form-control" name="fName" id="inputEmail4" placeholder="First Name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4"> Last name</label>
            <input type="text" class="form-control" name="lName" id="inputEmail4" placeholder="Last Name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="class">Class</label>
            <select class="form-select form-select-lg mb-2" name="class" aria-label=".form-select-lg example" required>
                <option selected>Select class</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
                <option value="9">9th</option>
                <option value="10">10th</option>
                <option value="11">11th</option>
                <option value="12">12th</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="class">Section</label>
            <select class="form-select form-select-lg mb-2" name="section" aria-label=".form-select-lg example" required>
                <option selected>Select section</option>
                <option value="A">A</option>
                <option value="B">B</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-row col-md-6">
            <div class="form-group">
                <label for="inputCity">Roll Number</label>
                <input type="number" name="rollno" class="form-control" id="Roll number" required>
            </div>
        </div>
        <div class="form-group  col-md-6">
            <label for="inputAddress2">Date of Birth</label>
            <input type="date" name="dob" class="form-control" id="inputAddress2" required>
        </div>
    </div>


    <div class="form-group">
        <label for="inputAddress">Address</label>
        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="5" required>
        </textarea>
    </div>
    <div class="form-group">
        <label for="class">How long have you been a student here ?</label>
        <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
            <option selected>Select your Time period</option>
            <option value="A">less than a month</option>
            <option value="B">1-6 months</option>
            <option value="B">6 months to 1 year</option>
            <option value="B">More than 1 year</option>
            <option value="B">1-3 years</option>
            <option value="B">More than 3 years</option>
        </select>
    </div>';

            $q2 = "SELECT * FROM questions";
            $result2 = mysqli_query($conn,$q2);
            $exist2 = mysqli_num_rows($result2);
            if($exist2 > 0){
                $track;
                while($row2 = mysqli_fetch_assoc($result2)){
                    echo '<fieldset class="form-group">';
                    echo  '<legend>'; echo $row2['qns']; echo '</legend>';
                    $q3 = "SELECT * FROM myoptions";
                    $result3 = mysqli_query($conn,$q3);
                    $exist3 = mysqli_num_rows($result3);
                    if($exist3 > 0){
                        $choice = 1;
                        while($row3 = mysqli_fetch_assoc($result3)){
                            echo '
                               <div class="form-check single-checks">
                                    <input class="form-check-input" name="'; echo $choice; echo '" type="radio" value=';echo $row3['optiont'];echo' id="flexRadioDefault4" required>
                                    <label class="form-check-label" for="flexRadioDefault4">';
                                      echo $row3['optiont'];
                                        echo '
                                    </label>
                                </div>
                            '; 
                        }
                        $choice++;
                    }
                    echo '</fieldset>';
                }
            }
            echo '</fieldset>';

    echo '
    </fieldset>
    <fieldset class="form-group">
        <legend>What do you like about Sunshine school ?</legend>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Classes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Teachers
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Culture
            </label>
        </div>
    </fieldset>
    <fieldset class="form-group">
        <legend>How likely are you to recommend our school t friend or colleague ?</legend>
        <div class="form-check">
            <input class="form-check-input" name="flexRadioDefault" type="radio" value="disagree"
                id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Very likely
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="flexRadioDefault" type="radio" value="neutral" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Somewhat likely
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="flexRadioDefault" type="radio" value="agree" id="flexRadioDefault3">
            <label class="form-check-label" for="flexRadioDefault3">
                Unsure
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="flexRadioDefault" type="radio" value="Strongly agree"
                id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">
                Not very likely
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="flexRadioDefault" type="radio" value="Strongly agree"
                id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">
                Not likely
            </label>
        </div>
    </fieldset>
    <div class="form-group">
        <label for="inputAddress">What could be do to increase your level of satisfaction</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

          ';
?>

<?php
echo "<footer>
        
    </footer>";
?>

<?php echo '<script src="script.js"></script>'?>;
