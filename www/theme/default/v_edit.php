<? /*
  ������ ������� ��������
  =======================
  $title - ���������
  $content - ����������
 */ ?>


<h1>������������� ������</h1>

<? if ($success) : ?>
    <b>������� ���������</b>
<? endif; ?>

<form method="post" action="edit.php?id=<?= $id ?>">
    ��������:
    <br/>
    <input type="text" name="title" value="<?= $ar_title ?>" />
    <br/>
    <br/>
    ����������:
    <br/>
    <textarea name="content"><?= $ar_content ?></textarea>
    <br/>
    <input type="hidden" name="id" value="<?= $id ?>" />
    <input type="submit" name ="edit" value="���������" />
    <input type="submit" name ="delete" value="�������" style="margin-left: 40px;"/>
</form>

