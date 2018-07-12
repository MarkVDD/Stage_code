<?php 
include ("config.php");

$errors = array();      // array om errors in te houden
$data = array();      // array om de data terug te geven

    if (empty($_POST['p_title']))
        $errors['p_title'] = 'Post titel is nodig.';

    if (empty($_POST['p_author']))
        $errors['p_author'] = 'Naam schrijver is nodig.';

    if (empty($_POST['p_content']))
        $errors['p_content'] = 'Post content is nodig.';

    if ( ! empty($errors)) {

        // Als er errors zitten in de errors array;
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        // Als er geen errors zijn doe dit;
    $p_title= $_POST["p_title"];
    $p_author= $_POST["p_author"];
    $p_content= $_POST["p_content"];


    $stmt = $con->prepare("INSERT INTO posts(p_title, p_author, p_content, upload_date) VALUES (:p_title, :p_author, :p_content, NOW())");
    $stmt-> bindValue(':p_title', $p_title);
    $stmt-> bindValue(':p_author', $p_author);
    $stmt-> bindValue(':p_content', $p_content);
    $stmt->execute();
 
    $data['success'] = true;
    $data['message'] = 'Success!';
    }

    // Alle data terug geven met behulp van een AJAX call
    echo json_encode($data);
?>