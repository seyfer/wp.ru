<? /*
  ������ ����� ������
  =======================
  $article - ������ ������

  ������:
  id_article - �������������
  title - ��������
  content - �����
 */ ?>


<ul>	

    <? if ($_GET['id']) : ?>
        <p><?= $article['title'] ?></p>
        <?= $article['content'] ?>
        <br>                       
    <? endif ?>
</ul>