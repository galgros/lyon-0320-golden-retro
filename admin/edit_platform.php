<?php
require_once '../connec.php';
$pdo = new \PDO(DNS, USER, PASS);

$query = 'SELECT * FROM platforms WHERE id=:id';
$statement = $pdo->prepare($query);
$statement->bindValue(':id', $_GET['id']);
$statement->execute();

$platforms = $statement->fetchAll(PDO::FETCH_ASSOC);

$errorsArray = [];

if (!empty($_POST)) {

    $constructor = trim($_POST['constructor']);
    $name = trim($_POST['name']);
    $year = trim($_POST['year']);
    $imagePath = trim($_POST['image_path']);
    if (isset($_POST['is_visible']))
        $isVisible = 1;
    else
        $isVisible = 0;

    if (empty($constructor) || empty($name) || empty($year) || empty($imagePath))
        $errorsArray['empty'] = "Cannot be empty";


    if (empty($errorsArray)) {

        $query = 'UPDATE platforms SET constructor=:constructor, name=:name, year=:year, image_path=:image_path, is_visible=:is_visible WHERE id=:id';
        $statement = $pdo->prepare($query);
        $statement->bindValue(':constructor', $constructor);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':year', $year);
        $statement->bindValue(':image_path', $imagePath);
        $statement->bindValue(':is_visible', $isVisible);
        $statement->bindValue('id', $_GET['id']);
        $statement->execute();
        header('Location: items_platform.php');
    }
}
?>

<?php include '../php/_header.php'; ?>
<?php include '_backofficeHeader.php'; ?>

<main class="backoffice">
    <form action="" method="POST">
        <div style="font-weight: bold">ADD PLATFORM</div>
        <div>
            <label for="constructor">Constructor</label>
            <input type="text" name="constructor" id="constructor" value="<?= $platforms[0]['constructor']?>" placeholder="Constructor">
            <?php if (isset($errorsArray['empty'])) echo $errorsArray['empty']?>
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $platforms[0]['name']?>" placeholder="Name">
            <?php if (isset($errorsArray['empty'])) echo $errorsArray['empty']?>
        </div>
        <div>
            <label for="year">Year</label>
            <input type="text" name="year" id="year" value="<?= $platforms[0]['year']?>" placeholder="Year">
            <?php if (isset($errorsArray['empty'])) echo $errorsArray['empty']?>
        </div>
        <div>
            <label for="image_path">Image path</label>
            <input type="text" name="image_path" id="image_path" value="<?= $platforms[0]['image_path']?>" placeholder="Image path">
            <?php if (isset($errorsArray['empty'])) echo $errorsArray['empty']?>
        </div>
        <div>
            <label for="is_visible">Is visible</label>
            <input type="checkbox" name="is_visible" id="is_visible">
        </div>
        <div>
            <button type="submit">Add</button>
        </div>
    </form>
</main>

<?php include "../php/_footer.php"; ?>
