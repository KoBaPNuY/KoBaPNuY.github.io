<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Мой первый блог!</h1>
    <div>
        <form method="post" action="index.php?action=?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label>
                Название
                <input type="text" name="title" value="<?=$article['title']?>" class ="form-item" required>
            </label>
            <label>
                Дата
                <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
            </label>
            <label>
                Содержание
                <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
            </label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
    <footer>
        <p>Мой Первый Блог <br>Copyright &copy;2016</p>
    </footer>
</div>

</body>
</html>
    