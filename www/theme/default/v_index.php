<? /*
  ������ ������� ��������
  =======================
  $articles - ������ ������

  ������:
  id_article - �������������
  title - ��������
  content - �����
 */ ?>


<ul>
    
        <? foreach ($articles as $article): ?>
            <li>
                <a href="article.php?id=<?= $article['id_article'] ?>">
                    <?= $article['title'] ?>
                </a>
                <p>
                    <? $art = $article['id_article']; ?>
                    <?= $intros[$art] ?>
                </p>

            </li>
        <? endforeach ?>
   
   
</ul>
