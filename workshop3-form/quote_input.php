<?php

// Error handling first
if (!isset($_POST['submit'])) {
    echo 'Did not send';
} else {
    // Store each piece of information as a variable
    $quote = $_POST['quote'];
    $source = $_POST['source'];
    $dob_dod = $_POST['dob-dod'];
    $wp_link = $_POST['wp-link'];
    $wp_img = $_POST['wp-img'];
    $category = $_POST['category'];

    // Create a string of the submitted information using a pipeline to seperate them.
    $form_string = $quote . ' | ' . $source . ' | ' . $dob_dod . ' | ' . $wp_link . ' | ' . $wp_img . ' | ' . $category;

    // PHP_EOL makes sure that each submission is added to a new line in the 'quotes.dat' file.
    file_put_contents('quotes.dat', trim($form_string) . PHP_EOL, FILE_APPEND);

    // Redirect back to the form page
    echo "<p>Thanks for the quote, it's been submitted! :)</p>";
    echo   '<button type="submit"><a href="quote_input.html">Return</a></button>';
}
