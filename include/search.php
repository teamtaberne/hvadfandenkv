<div class="search">
    <form name="search" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="search-input">
          <input type="text" name="search"/>
        </div>
        <div class="search-btn">
          <input type="submit" value="Search" />
        </div>
      </form>
</div>

<?php echo $output; ?>
<?php echo "<div class='searchstyle'><a href='" . $url . "'>" . $polname . ' ' . $party . "</a></div>"; ?>
