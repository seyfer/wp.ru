<?php

// Список всех статей
//
function articles_all() {

    include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PSWD);
        $pdo->exec("SET CHARACTER SET utf8");
        $pdo->exec("SET NAMES utf-8");

        $query = "SELECT * FROM pro_articles ORDER BY id_article DESC";
        $stmt = $pdo->query($query);

        $articles = array();
        while ($row = $stmt->fetch()) {
            $articles[] = $row;
        }

        $pdo = null;
        return $articles;
    } catch (PDOException $e) {
        echo "ошибка выборки статей " . $e;
        $pdo = null;
        return false;
    }
}

//
// Конкретная статья
//
function articles_get($id_article) {

    // 
    // Запрос.

    include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PSWD);
        $pdo->exec("SET CHARACTER SET utf8");
        $pdo->exec("SET NAMES utf-8");

        $t = "SELECT * FROM pro_articles 
            WHERE id_article = '%d'";

        $query = sprintf($t, $id_article);
        $stmt = $pdo->query($query);

        $article = $stmt->fetch();

        $pdo = null;
        return $article;
    } catch (PDOException $e) {
        echo "ошибка выборки статьи " . $e;
        $pdo = null;
        return false;
    }
}

//
// Добавить статью
//
function articles_new($title, $content) {

    include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PSWD);
        $pdo->exec("SET CHARACTER SET utf8");
        $pdo->exec("SET NAMES utf-8");

        // Подготовка.
        $title = trim($title);
        $content = trim($content);

        // Проверка.
        if ($title == '')
            return false;

        // Запрос.
        $query = "INSERT INTO pro_articles (title, content) VALUES ('$title', '$content')";

        $pdo->exec($query);

        $pdo = null;

        return true;
    } catch (Exception $e) {
        echo "ошибка удаления статьи " . $e->getMessage();
        $pdo = null;
        return false;
    }
}

//
// Изменить статью
//
function articles_edit($id_article, $title, $content) {
    // TODO

    include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PSWD);
        $pdo->exec("SET CHARACTER SET utf8");
        $pdo->exec("SET NAMES utf-8");

        $query = "UPDATE pro_articles SET title = '$title', content = '$content' 
        WHERE id_article = '$id_article'";

        $pdo->exec($query);

        $pdo = null;

        return true;
    } catch (Exception $e) {
        echo "ошибка удаления статьи " . $e->getMessage();
        $pdo = null;
        return false;
    }
}

//
// Удалить статью
//
function articles_delete($id_article) {
    // TODO

    include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PSWD);
        $pdo->exec("SET CHARACTER SET utf8");
        $pdo->exec("SET NAMES utf-8");

        $query = "DELETE FROM pro_articles WHERE id_article = $id_article";
        if ($pdo->exec($query)) {

            $pdo = null;
            header("Location: editor.php");
            exit;
        } else {
            throw new PDOException ();
        }
    } catch (PDOException $e) {
        echo "ошибка удаления статьи " . $e;
        $pdo = null;
        return false;
    }
}

//
// Короткое описание статьи
//
function articles_intro($article) {

    // $article - это ассоциативный массив, представляющий статью


    $intros = array();
    $anonse = 90;

    include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PSWD);
        $pdo->exec("SET CHARACTER SET utf8");
        $pdo->exec("SET NAMES utf-8");

        foreach ($article as $intro) {
            // Запрос. выбираем текст слева = анонсу
            $query = "SELECT LEFT(content, $anonse) as content, id_article FROM pro_articles 
            WHERE id_article = '" . $intro['id_article'] . "' 
                ORDER BY id_article DESC";

            $stmt = $pdo->query($query);

            $row = $stmt->fetch();
            $row['content'] = $row['content'] . "...";
            $intros[$row['id_article']] = $row['content'];
        }

        return $intros;
    } catch (PDOException $e) {
        echo "ошибка выборки интро " . $e;
        return false;
    }

    $pdo = null;
}

?>