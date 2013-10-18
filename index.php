<?php

// include the menu configuration
include('config.php');

?>
<Response>
    <Gather action="gather.php" numDigits="1">
        <Say voice="man">Hi there, Neal's unavailable, but perhaps I can help you.</Say>
      	<?php
          //$count = 0;
          foreach ($menu as $option) {
        	?>
            <Say voice="man"><?php echo $option['say']; ?></Say>
            <?php
            //$count++;
          } ?>
    </Gather>
</Response>