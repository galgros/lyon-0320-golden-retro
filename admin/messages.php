<?php
require_once '../connec.php';
$pdo = new \PDO(DNS, USER, PASS);

$query = 'SELECT * FROM contact';
$statement = $pdo->prepare($query);
$statement->execute();

$messages = $statement->fetchAll(PDO::FETCH_ASSOC);
if (!empty($_POST)) {

    if ($_POST['onQueue'] == 'setDone') {
        $query = 'UPDATE contact SET is_done=1 WHERE id=:id';
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $_GET['id']);
        $statement->execute();
        header('Location: messages.php');
    }
    if ($_POST['onQueue'] == 'setOnQueue') {
        $query = 'UPDATE contact SET is_done=0 WHERE id=:id';
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $_GET['id']);
        $statement->execute();
        header('Location: messages.php');
    }
}

?>

<?php include '../php/_header.php'; ?>
<?php include '_backofficeHeader.php'; ?>

<main class="backoffice">
    <div class="messages">
        <?php foreach ($messages as $message) : ?>
            <div>
                <div style="font-weight: bold"><?= $message['user_name'];?></div>
                <div><?= $message['mail'];?></div>
                <div><?= $message['message'];?></div>
                <div>id = <?= $message['id'];?></div>

                <?php if($message['is_done'] == 0): ?>
                    <div>
                        <div style="color: red">Status : On queue</div>
                        <form action="messages.php?id=<?= $message['id'] ?>" method="POST">
                            <input type="hidden" name="onQueue" value="setDone">
                            <button>Set done</button>
                        </form>
                    </div>
                <?php else: ?>
                    <div>
                        <div>Status : Done</div>
                        <form action="messages.php?id=<?= $message['id'] ?>" method="POST">
                            <input type="hidden" name="onQueue" value="setOnQueue">
                            <button>Set on queue</button>
                        </form>
                    </div>
                <?php endif; ?>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include "../php/_footer.php"; ?>
