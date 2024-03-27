<?php
include("conn.php");
session_start();

if (isset($_SESSION['user_id']) && isset($_POST['quote_id'])) {
    $user_id = $_SESSION['user_id'];
    $quote_id = $_POST['quote_id'];

    // Sanitize inputs to prevent SQL injection
    $user_id = mysqli_real_escape_string($conn, $user_id);
    $quote_id = mysqli_real_escape_string($conn, $quote_id);

    // Check if the user has already liked the quote
    $checkLikedQuery = "SELECT * FROM like_mst WHERE quote_id = $quote_id AND user_id = $user_id";
    $checkLikedResult = mysqli_query($conn, $checkLikedQuery);

    if ($checkLikedResult) {
        if (mysqli_num_rows($checkLikedResult) == 0) {
            // User has not liked the quote, insert a new like
            $insertLikeQuery = "INSERT INTO like_mst (quote_id, user_id) VALUES ($quote_id, $user_id)";
            $insertLikeResult = mysqli_query($conn, $insertLikeQuery);

            if ($insertLikeResult) {
                echo "liked";
            } else {
                echo "Error liking the quote: " . mysqli_error($conn);
            }
        } else {
            // User already liked the quote, remove the like
            $deleteLikeQuery = "DELETE FROM like_mst WHERE quote_id = $quote_id AND user_id = $user_id";
            $deleteLikeResult = mysqli_query($conn, $deleteLikeQuery);

            if ($deleteLikeResult) {
                echo "unliked";
            } else {
                echo "Error unliking the quote: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Error checking if the quote is liked: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request! user_id: " . $_SESSION['user_id'] . ", quote_id: " . $_POST['quote_id'];
}

mysqli_close($conn);
?>
