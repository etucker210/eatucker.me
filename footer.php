<?php
/**
 * This is the footer for the EATucker theme.
 *
 * This will display all the <footer> section and close.
 *
 * @package eatucker-me
 * @since eatucker-me 0.0.1
 */
 /*
 EATucker.me WordPress Theme Copyright (C) 2021. E.A. Tucker
 This program comes with ABSOLUTELY NO WARRANTY;
 This is free software, and you are welcome to redistribute it under certain
 conditions; see https://www.gnu.org/licenses/gpl-3.0.html for mor details.
 */
 ?>

  <div class="footer">
    WordPress Theme EATucker (C) 2021 <?php if (date("Y") != 2021) {
      echo " - " . date("Y");} ?> <a href="https://www.elijahatucker.me"> E. A. Tucker</a>
  </div>
 <?php wp_footer(); ?>

</body>

</html>
