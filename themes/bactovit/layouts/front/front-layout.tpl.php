<div<?php print $attributes; ?>>

  <header class="header">
    <div class="header__inner">

    </div>
  </header>

  <div class="contact">
    <div class="contact__inner">

      <h3 class="contact__title">
        <div class="contact__small">Виникли</div>
        <div class="contact__large">питання?</div>
      </h3>

      <a id="question" class="contact__button" href="javascript:void(0);">Задати питання</a>

      <div class="contact__form">
        <?php
          $block = module_invoke('webform', 'block_view', 'client-block-2');
          print render($block['content']);
        ?>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="footer__inner">

    </div>
  </footer>

  <!--noindex-->
  <?php if (!empty($messages)): ?>
    <div class="jqmWindow" id="popup-messages">
      <div class="jqmContentWrapper">
        <div class="jqmContent clearfix">
          <?php print $messages; ?>
        </div>
        <a href="javascript:void(0);" class="jqmClose" title="Закрыть окно"></a>
      </div>
    </div>
  <?php endif ?>
  <!--/noindex-->
