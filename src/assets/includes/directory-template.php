<section class="container">
  <div id="search">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="text" onkeyup="filterList()" placeholder="Search Folder..."/>
  </div>
  <ul id="results">
    <?php foreach ($folders as $folder): ?>
    <li class="folder">
      <a href="<?=$folder?>"><?=formatDisplayText($folder)?>
        <i class="fa-solid fa-folder-open"></i>
      </a>
    </li>
    <?php endforeach; ?>
    <?php foreach ($documents as $document): ?>
    <li>
      <a href="<?=$document?>"><?=formatDisplayText($document)?>
        <i class="fa-solid fa-file"></i>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
  <span id="resultless">No results found in current folder</span>
</section>
