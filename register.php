<?php
include_once("header.php");
?>
<br>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 p-4" style="background-color: white;">
        <h3 style="text-align: center;">Register</h3>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="name1" class="form-label">Fullname:</label>
                <input type="text" class="form-control" id="name1" placeholder="Enter name" name="fullname">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="mb-3">
                <label for="cpwd" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="cpswd">
            </div>
            <div class="mb-3">
                <label for="mn1" class="form-label">Mobile Number:</label>
                <input type="number" class="form-control" id="mn1" placeholder="Enter Mobile number" name="mobile">
            </div>

            <button type="submit" class="btn form-control text-white" style="background-color:#9E4D40;">Submit</button>
        </form>
    </div>
</div>
<?php
include_once("footer.php");
