<?phpinclude 'models/m_PdoDB.php';class Articles {// Список всех статей//    function articles_all() {               try {            $query = "SELECT * FROM pro_articles ORDER BY id_article DESC";            $stmt = PdoDB::query($query);            $articles = array();            while ($row = $stmt->fetch()) {                $articles[] = $row;            }            return $articles;        } catch (PDOException $e) {            echo "ошибка выборки статей " . $e;            return false;        }    }//// Конкретная статья//    function articles_get($id_article) {        // Запрос.        try {            $query = "SELECT * FROM pro_articles             WHERE id_article = :d";            $stmt = PdoDB::prepare($query);            $stmt->bindParam(':d', $id_article, PDO::PARAM_INT);            if (!$stmt->execute()) {                $err = $stmt->errorInfo();                throw new PDOException($err[2]);            }            $article = $stmt->fetch();            return $article;        } catch (PDOException $e) {            echo "ошибка выборки статьи " . $e;            return false;        }    }//// Добавить статью//    function articles_new($title, $content) {        try {            // Подготовка.            $title = trim($title);            $content = trim($content);            // Проверка.            if ($title == '')                return false;            // Запрос.            $query = "INSERT INTO pro_articles (title, content) VALUES (:title, :content)";            $stmt = PdoDB::prepare($query);            $stmt->bindParam(':title', $title, PDO::PARAM_STR);            $stmt->bindParam(':content', $content, PDO::PARAM_STR);            if (!$stmt->execute()) {                $err = $stmt->errorInfo();                throw new PDOException($err[2]);            }            return true;        } catch (PDOException $e) {            echo "ошибка добавления статьи " . $e;            return false;        }    }//// Изменить статью//    function articles_edit($id_article, $title, $content) {        try {            $query = "UPDATE pro_articles SET title = :title, content = :content         WHERE id_article = :id_article";            $stmt = PdoDB::prepare($query);            $stmt->bindParam(':title', $title, PDO::PARAM_STR);            $stmt->bindParam(':content', $content, PDO::PARAM_STR);            $stmt->bindParam(':id_article', $id_article, PDO::PARAM_INT);            if (!$stmt->execute()) {                $err = $stmt->errorInfo();                throw new PDOException($err[2]);            }            return true;        } catch (PDOException $e) {            echo "ошибка редактирования статьи " . $e;            return false;        }    }//// Удалить статью//    function articles_delete($id_article) {        try {            $query = "DELETE FROM pro_articles WHERE id_article = :id";            $stmt = PdoDB::prepare($query);            $stmt->bindParam(':id', $id_article, PDO::PARAM_INT);            $stmt->execute();            if ($stmt->execute()) {                header("Location: editor.php");                exit;            } else {                echo "не удалено";                return false;            }        } catch (PDOException $e) {            echo "ошибка удаления статьи " . $e;            return false;        }    }//// Короткое описание статьи//    function articles_intro($article) {        // $article - это ассоциативный массив, представляющий статью        $intros = array();        $anonse = 90;        try {            foreach ($article as $intro) {                // Запрос. выбираем текст слева = анонсу                $id_intro = (int) $intro['id_article'];                $query = "SELECT LEFT(content, $anonse) as intro, id_article             FROM pro_articles             WHERE id_article = '$id_intro'                 ORDER BY id_article DESC";                $stmt = PdoDB::query($query);                $row = $stmt->fetch();                $row['intro'] = $row['intro'] . "...";                $intros[$row['id_article']] = $row['intro'];            }            return $intros;        } catch (PDOException $e) {            echo "ошибка выборки интро " . $e;            return false;        }    }}?>