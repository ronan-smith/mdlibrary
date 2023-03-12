<section class="container">
  <div id="search">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="text" onkeyup="filterList()" placeholder="Search Folder..."/>
  </div>
  <ul id="results">
    <?php foreach ($folders as $folder): ?>
    <li>
      <a href="<?=$folder?>"><?=formatDisplayText($folder)?></a>
      <i class="fa-solid fa-folder-open"></i>
    </li>
    <?php endforeach; ?>
    <?php foreach ($documents as $document): ?>
    <li>
      <a href="<?=$document?>"><?=formatDisplayText($document)?></a>
      <i class="fa-solid fa-file"></i>
    </li>
    <?php endforeach; ?>
  </ul>
</section>
