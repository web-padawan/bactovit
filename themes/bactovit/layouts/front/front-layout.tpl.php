<div<?php print $attributes; ?>>

  <header class="header">
    <div class="header__inner">

      <div class="header__flag flag">&nbsp;</div>

      <ul class="header__nav">
        <li class="header__item">
          <a class="header__navlink" href="#about">БактоВіт - це...</a>
        </li>
        <li class="header__item">
          <a class="header__navlink" href="#why">Чому саме БактоВіт?</a>
        </li>
        <li class="header__item">
          <a class="header__navlink" href="#capsule">Склад</a>
        </li>
        <li class="header__item header__item--last">
          <a class="header__navlink" href="#usage">Спосіб вживання</a>
        </li>
      </ul>

      <hgroup class="header__text">
        <h1 class="header__title"><span class="header__caps">Б</span>акто<span class="header__caps">В</span>іт</h1>
        <h2 class="header__slogan">Надійний захисник вашого імунітету</h2>
      </hgroup>

      <div class="header__contact">
        <div class="header__phone">+38 (097) 256 23 25</div>
        <div class="header__social">
          <a class="header__icon header__icon--facebook" href="#">&nbsp;</a>
          <a class="header__icon header__icon--vkontakte" href="#">&nbsp;</a>
        </div>
      </div>

      <a id="buy" class="header__buy" href="#">Де купити</a>

      <a id="down" class="header__down" href="#">&nbsp;</a>
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
