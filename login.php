<?php
include_once("header.php");
?>
<br>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 p-4" style="background-color: white;">
        <h3 style="text-align: center;">Login</h3>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn form-control text-white" style="background-color:#9E4D40;">Submit</button>
        </form>
    </div>
</div>
<?php
include_once("footer.php");
