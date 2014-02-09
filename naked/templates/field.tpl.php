<?php if(count($items) > 1): ?>
<?php foreach ($items as $delta => $item): ?>
  <div class="item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
<?php endforeach; ?>
<?php else: ?>
  <?php print render($items[0]); ?>
<?php endif; ?>