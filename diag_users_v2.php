<?php
$c = mysqli_connect('127.0.0.1', 'root', '', 'pidev');
if (!$c) die("Connection failed: " . mysqli_connect_error());

$res = mysqli_query($c, "SELECT id, email, role, is_verified FROM user");
$output = "";
while($row = mysqli_fetch_assoc($res)) {
    $is_v = ($row['is_verified'] === null) ? "NULL" : ($row['is_verified'] ? "YES" : "NO");
    $output .= "ID: {$row['id']} | Email: {$row['email']} | Role: {$row['role']} | Verified: {$is_v}\n";
}
file_put_contents('user_diag.txt', $output);
echo "Done\n";
?>
