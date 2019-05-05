<ul class="nav nav-pills nav-justified">
    <li <?= ($_GET['page']==1)? "class='active'": "" ?>><a href="/index.php?page=1">ADD</a><li>
    <li <?= ($_GET['page']==2)? "class='active'": "" ?>><a href="/index.php?page=2">Delete</a><li>
    <li <?= ($_GET['page']==3)? "class='active'": "" ?>><a href="/index.php?page=3">Show All</a><li>
</ul>