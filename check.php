<?php
require_once('/var/www/html/wp-config.php');

$data = array(
  'mysql' => true,
  'error' => false,
  'content' => false
);

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    $data['mysql'] = false;
    $data['error'] = $conn->connect_error;
}

$sql = 'SELECT * FROM wp_posts WHERE post_type = "post"';

if (!($posts = mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC))) {
    $data['mysql'] = false;
    $data['error'] = mysqli_error($conn);
}

if (count($posts) > 1 || $posts[0]["ID"] != 1) {
    $data['content'] = true;
}

header('Content-Type: application/json');
echo json_encode($data);
