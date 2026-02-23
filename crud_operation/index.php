<?php include('header.php')?>
<?php include('dbcon.php')?>
<div class="box1">
<h2>ALL STUDENTS</h2>
<button class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#adrianDiaz">ADD STUDENTS</button>
</div>

       <table class="table table-hove table-bordered table-striped">
          <thead>
             <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
             </tr>
          </thead>
          <tbody>
             <?php
              $query = "select * from `students1`";
              $result = mysqli_query($connection,$query);

              if(!$result){
               die("Haga bien la consulta ala base de datos soroco");
              }else{
               // print_r($result);
               while($row = mysqli_fetch_assoc($result) ){ ?>
                 <tr>
                  <td> <?php echo $row['id documento']; ?></td>
                  <td> <?php echo $row['first name']; ?></td>
                  <td> <?php echo $row['last name']; ?></td>
                  <td> <?php echo $row['age']; ?></td>
                  
                 </tr>
               
            <?php 
               }

              }
             ?>
             <!-- <tr>
                <td>3</td>
                <td>Julian</td>
                <td>Rivera</td>
                <td>23</td>
             </tr>
             <tr>
                <td>4</td>
                <td>Jovi</td>
                <td>Carrero</td>
                <td>24</td>
             </tr>  -->
          </tbody>
       </table>
      <!-- Modal -->
   <form action="insert_data.php" method="post">
      <div class="modal fade" id="adrianDiaz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal of the Students</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="form-group">
               <label for="">id documento</label>
               <input type=text name="i_documento" class="form-control">
               <label for="">first Name</label>
               <input type=text name="f_name" class="form-control">
               <label for="">last Name</label>
               <input type=text name="l_name" class="form-control">
               <label for="">Age</label>
               <input type=text name="age" class="form-control">
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-success" name= "add_students" value="ADD">
            </div>
         </div>
      </div>
      </div>
   </form>
<?php include('footer.php')?> 