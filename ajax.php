<!--ajax php-->
<?php
session_start();
    //Including Database configuration file.
    include ('config.php');
    //Getting value of "search" variable from "script.js".
    if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
       $Name = $_POST['search'];
    //Search query.
    $sql = "SELECT search_name,search_id FROM search WHERE search_name LIKE '%$Name%' LIMIT 5";
    //Query execution
    $res=$db->query($sql);
    //Creating unordered list to display result.
       echo '
    <ul>
       ';
       //Fetching result from database.
       while($row=$res->fetch_assoc()) {
           ?>
       <!-- Creating unordered list items.
            Calling javascript function named as "fill" found in "script.js" file.
            By passing fetched result as parameter. -->
       <li onclick='fill("<?php echo $row['search_name']; ?>")'>
       <a href="detail.php?id=<?php echo $row['search_id']; ?>">
       <!-- Assigning searched result in "Search box" in "search.php" file. -->
           <?php echo $row['search_name']; ?>
       </li></a>
       <!-- Below php code is just for closing parenthesis. Don't be confused. -->
       <?php
    }}
    ?>
    </ul>

<!--ajax php end-->