<?php

include "db.php";
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $book = $_POST["book"];
    $author = $_POST["author"];
    $cat = $_POST["cat"];
    $price = $_POST["price"];
    $quan = $_POST["quan"];

        $sql = $conn->prepare("insert into books(book_title,author,category,price,quantity) values(?,?,?,?,?)") ;
        $sql->bind_param("sssii",$book,$author,$cat,$price,$quan);
        if($sql->execute()){
            
            header("Location:dashboard.php");
        }
        else{
            echo "<script> alert('data not inserted'); </script>";
        }
    }

?>



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
            <div
                class="container"
            >
                <div
                    class="container"
                >
                <h2>Insert data</h2>
                </div>

                
            </div>
            <div
                class="container col-5 shadow border rounded py-4"
            >
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Book title :</label>
                        <input
                            type="text"
                            class="form-control"
                            name="book"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Autor :</label>
                        <input
                            type="text"
                            class="form-control"
                            name="author"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Category :</label>
                        <input
                            type="text"
                            class="form-control"
                            name="cat"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Price :</label>
                        <input
                            type="number"
                            class="form-control"
                            name="price"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Quantity :</label>
                        <input
                            type="number"
                            class="form-control"
                            name="quan"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                    
                    
                    
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

