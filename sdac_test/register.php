<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="text-center">Register Page</h2>
            <div
                class="container col-5 shadow border py-4"
            >
                <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Full Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email :</label>
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                   
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phone Number :</label>
                    <input
                        type="text"
                        class="form-control"
                        name="num"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="text"
                        class="form-control"
                        name="pass"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <button type="submit" class="text-center" style="text-align:center">Submit</button>
                
                
                
            </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

<?php

include "db.php";
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $num = $_POST["num"];
    $pass = password_hash($_POST["pass"],PASSWORD_DEFAULT);

    if(empty($name) || !filter_var($email,FILTER_VALIDATE_EMAIL) || empty($num) || empty($pass) ){
        echo "<script> alert('validation ERROR'); </script>";
    }
    else{
        $sql = $conn->prepare("insert into users(full_name,email,phone,password_hash) values(?,?,?,?)") ;
        $sql->bind_param("ssss",$name,$email,$num,$pass);
        if($sql->execute()){

            header("Location:login.php");
        }
        else{
            echo "<script> alert('data not inserted'); </script>";
        }
    }
}
?>