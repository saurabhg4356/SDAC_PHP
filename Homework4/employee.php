<?php
                        include "db.php";
                        $result = $conn->query("select * from employee_detail");
                        
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
    
    <style>
        
    </style>
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
                class="row justify-content-center align-items-center g-2"
            >
                <div class="col-6 mt-5" ><div
                class="container my-5 text-center"
            >
                <h2>Insert the Employee data</h2>
            </div>
            
            <div
                class="container shadow border py-4 "
                style="background-color:aqua; "
                
            >
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Employee Name</label>
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
                        <label for="" class="form-label">Department</label>
                        <select
                            class="form-select form-select-lg"
                            name="depart"
                            id=""
                        >
                            <option selected value="IT">IT</option>
                            <option value="Sale">Sale</option>
                            <option value="HR">Hr</option>
                            <option value="Marketing">Marketing</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Designation</label>
                        <input
                            type="text"
                            class="form-control"
                            name="design"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Salary</label>
                        <input
                            type="text"
                            class="form-control"
                            name="sal"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Joining Date</label>
                        <input
                            type="text"
                            class="form-control"
                            name="join"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="text"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div
                        class="container text-center"
                    >
                        <button
                        type="submit"
                        class="btn btn-primary "
                    >
                        Submit
                    </button>
                    </div>
                    
                    
                    
                    
                </form>
            </div></div>
                <div class="col-6   "
                >
                <div
                    class="container d-flex justify-content-center"
                    
                >
                    <h4>Dowload the data in CSV or PDF format : </h4> 
                    &nbsp;&nbsp;
                    &nbsp;
                    <button
                        type="button"
                        class="btn btn-primary"
                        onclick="window.location.href='CSV_File.php'"
                    >
                        CSV
                    </button>
                    &nbsp;&nbsp;
                    &nbsp;
                     <button
                        type="button"
                        class="btn btn-primary"
                    >
                        PDF
                    </button>

                    
                </div>
                <br><br> <br>
                <div
                    class="container text-center"
                >
                    <h2>Employee Detail Table</h2> <br>
                    
                    <table cellpadding="10px" style="background-color:antiquewhite; font-size: 18px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; box-shadow: 4px 7px 7px violet; border-radius: 20px;">
                        <tr style="border: 3px solid black; font-weight: 700; font-style: oblique; background-color: blueviolet; ">
        <td>Employee ID</td>
        <td>Employee Name</td>
        <td>Department</td>
        <td>Designation</td>
        <td>Salary</td>
        <td>Joining Date</td>
        <td>Email</td>
    </tr>
    <?php
    while ($row=$result->fetch_assoc()) {?>
        <tr style="border: 3px solid black;">
            <td><?php echo $row["employee_id"] ?></td>
            <td><?php echo $row["employee_name"] ?></td>
            <td><?php echo $row["department"] ?></td>
            <td><?php echo $row["designation"] ?></td>
            <td><?php echo $row["salary"] ?></td>
            <td><?php echo $row["joining_date"] ?></td>
            <td><?php echo $row["email"] ?></td>
        </tr>
    <?php  }
    ?>
                    </table>
                </div>
                
                
                    
                    
                </div>
                
            </div>
            
                
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
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $depart = $_POST["depart"];
    $design = $_POST["design"];
    $sal = $_POST["sal"];
    $join = $_POST["join"];
    $email = $_POST["email"];

    $sql = $conn->prepare("insert into Employee_detail(employee_name,department,designation,salary,joining_date,email) values(?,?,?,?,?,?)");
    $sql->bind_param("sssiss",$name,$depart,$design,$sal,$join,$email);
    if(empty($name) || empty($depart) || empty($design) || empty($sal) ||
    empty($join) || empty($email)){
        echo "<script>alert('Feild is required')</script>";
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Email is Invalid')</script>";
    }
    else{
        $sql = $conn->prepare("insert into Employee_detail(employee_name,department,designation,salary,joining_date,email) values(?,?,?,?,?,?)");
    $sql->bind_param("sssiss",$name,$depart,$design,$sal,$join,$email);
    if($sql->execute()){
        echo "<script>alert('Data inserted successfully')</script>";
    }
    }
    
}
?>