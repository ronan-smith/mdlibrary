<main>

<input type="text" id="search" onkeyup="myFunction()" placeholder="Search folder..."/>

<section>
  <ul id="results">
    <?php foreach ($folders as $folder): ?>
    <li><a href="<?=strtolower($folder)?>"><?=trim(basename($folder), '/')?></a></li>
    <?php endforeach; ?>
    <?php foreach ($documents as $document): ?>
    <li><a href="<?=strtolower($document)?>"><?=$document?></a></li>
    <?php endforeach; ?>
  </ul>
</section>

</main>
