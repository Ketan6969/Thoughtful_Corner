

    <?php
    //Function for quote by category
    function fetch_quotes($category) {
    include("conn.php");

    // Query to retrieve all quotes from the specified category
    $query = "SELECT * FROM quotes_mst WHERE cate = '$category'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch all quotes as an array of associative arrays
        $quotes = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Check if quotes are found
        if ($quotes) {
            // Return the quotes
            return $quotes;
        } else {
            // No quotes found for the specified category
            return false;
            echo "NOTHING TO RETURN!";
        }
    } else {
        // Query failed
        die("Database query failed.");
    }
}

?>


