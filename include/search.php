<div class="search_1">
    <div class="col-1-1 mobile-col-1-1">
      <form name="search" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="col-10-12">
            Søg:  <input type="text" name="search"/>
          </div>
          <div class="col-2-12">
            <input type="submit" value="Search" />
          </div>
        </form>
    </div>
</div>

<?php echo $output; ?>
<?php echo "<div class='searchstyle'><a href='" . $url . "'>" . $polname . ' ' . $party . "</a></div>"; ?>
