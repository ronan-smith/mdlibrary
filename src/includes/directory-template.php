<main>

<section>
  <ul>
    <?php foreach ($folders as $folder): ?>
    <li><a href="<?=$folder?>"><?=$folder?></a></li>
    <?php endforeach; ?>
    <?php foreach ($documents as $document): ?>
    <li><a href="<?=$document?>"><?=$document?></a></li>
    <?php endforeach; ?>
  </ul>
</section>

</main>
