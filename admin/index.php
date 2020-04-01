<?php
require_once '../connec.php';
$pdo = new \PDO(DNS, USER, PASS);

$query = 'SELECT * FROM contact';
$statement = $pdo->prepare($query);
$statement->execute();

$messages = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include '../php/_header.php'; ?>
<?php include '_backofficeHeader.php'; ?>

<main class="backoffice">

</main>
<?php include "../php/_footer.php"; ?>