<section>
  <div>
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="text" id="search" onkeyup="filterList()" placeholder="Search folder..."/>
  </div>
  <ul id="results">
    <?php foreach ($folders as $folder): ?>
    <li><a href="<?=$folder?>"><?=formatDisplayText($folder)?></a></li>
    <?php endforeach; ?>
    <?php foreach ($documents as $document): ?>
    <li><a href="<?=$document?>"><?=formatDisplayText($document)?></a></li>
    <?php endforeach; ?>
  </ul>
</section>
