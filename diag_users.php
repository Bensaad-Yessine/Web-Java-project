<?php
require 'vendor/autoload.php';
use Symfony\Component\Dotenv\Dotenv;

(new Dotenv())->load(__DIR__.'/.env');

$c = mysqli_connect(
    explode(':', explode('@', $_ENV['DATABASE_URL'])[1])[0],
    explode(':', explode('//', $_ENV['DATABASE_URL'])[1])[0],
    explode('@', explode(':', $_ENV['DATABASE_URL'])[2])[0],
    explode('/', $_ENV['DATABASE_URL'])[3]
);

// Simpler connection if above fails
$c = mysqli_connect('127.0.0.1', 'root', '', 'pidev');

$res = mysqli_query($c, "SELECT id, email, role, is_verified FROM user");
$output = "";
while($row = mysqli_fetch_assoc($res)) {
    $output .= "ID: {$row['id']} | Email: {$row['email']} | Role: {$row['role']} | Verified: {$row['is_verified']}\n";
}
file_put_contents('user_diag.txt', $output);
?>
