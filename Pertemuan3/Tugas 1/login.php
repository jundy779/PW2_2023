<?php  include('header.php')  ?>
<div class="container my-5">
    <h1 class="text-center mb-4">Sign IN</h1>
    <form class="form-horizontal w-75 mt-5 mx-auto p-5 border shadow-sm">
        <div class="m-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" id="username" type="username" placeholder="Username"
                data-sb-validations="required" />
        </div>
        <div class="m-3">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" id="password" type="password" placeholder="Password"
                data-sb-validations="required" />
        </div>
        <div class="mt-3">
            <center>
                <a href="home.php"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                        type="submit">Submit</button></a>
            </center>
        </div>
    </form>
</div>
<?php include('footer.php') ?>