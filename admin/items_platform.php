<?php
require_once '../connec.php';
$pdo = new \PDO(DNS, USER, PASS);

$query = 'SELECT * FROM platforms';
$statement = $pdo->prepare($query);
$statement->execute();

$platforms = $statement->fetchAll(PDO::FETCH_ASSOC);

if (!empty($_POST)) {
    $query = 'UPDATE platforms SET is_visible=:is_visible WHERE id=:id';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    if ($_GET['is_visible'] == 0)
        $statement->bindValue(':is_visible', 1, PDO::PARAM_INT);
    else
        $statement->bindValue(':is_visible', O, PDO::PARAM_INT);

    $statement->execute();
    header('Location: items_platform.php');
}
?>


<?php include '../php/_header.php'; ?>
<?php include '_backofficeHeader.php'; ?>

<main class="backoffice">
    <div>
        <form action="add_platform.php" method="GET">
            <button>Add platform</button>
        </form>
    </div>
    <table>
        <thead>
        <tr>
            <th>| id</th>
            <th>| constructor</th>
            <th>| name</th>
            <th>| year</th>
            <th>| image_path</th>
            <th>| is_visible</th>
            <th>| nb_of_game</th>
            <th>| toggle_visibility</th>
            <th>| edit_platform</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($platforms as $platform):?>
            <tr>
                <td><?= $platform['id']?></td>
                <td><?= $platform['constructor']?></td>
                <td><?= $platform['name']?></td>
                <td><?= $platform['year']?></td>
                <td><?= $platform['image_path']?></td>
                <td><?= $platform['is_visible'] == 0 ? 'no' : 'yes' ?></td>
                <td><?= $platform['nb_of_games']?></td>
                <td>
                    <form action="items_platform.php?id=<?= $platform['id'] ?>&is_visible=<?= $platform['is_visible'] ?>" method="POST">
                        <input type="hidden" name="toggle_visibility" id="toggle_visibility">
                        <button type="submit">
                            <?= $platform['is_visible'] == 0 ? 'on' : 'off' ?>
                        </button>
                    </form>
                </td>
                <td>
                    <form action="edit_platform.php?id=<?= $platform['id'] ?>" method="POST">
                        <button type="submit">edit</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr>
</main>

<?php include "../php/_footer.php"; ?>
