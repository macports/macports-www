  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/ru/includes/common.inc");
    include_once("$DOCUMENT_ROOT/ru/includes/functions.inc");
    print_header('DarwinPorts Home', 'utf-8');
  ?>

    <div id="content">
      <h2 class="hdr">Введение в проект DarwinPorts</h2>

      <p>Главная задача проекта DarwinPorts - предоставить простой механизм
      установки различного свободно-распостраняемого програмного обеспечения
      в системах Darwin, Mac OS X, FreeBSD, или Linux.</p>

      <p>На данный момент доступны несколько сотен законченных и готовых для
      использования <a href="/ports/">портов</a>, которые постоянно добавляются.
      Вы можете отслеживать добавляемые порты, подписавшись на список рассылки
      <a href="http://www.opendarwin.org/mailman/listinfo/cvs-darwinports-all">cvs-darwinports-all</a></p>
	
      <p>Для дополнительной информации о получении и установки DarwinPorts,
      пожалуйста обратитесь к разделу <a href="/getdp/">получить DarwinPorts</a>.
      Так же, пожалуйста, обратите внимание на <a href="/docs/">документацию</a>.
      Если у Вас возникли вопросы или Вы нуждаетесь в помощи посетите раздел 
      <a href="/help/">получить помощь</a>.</p>

      <p>Сообщения об ошибках, предложения о новом функционале, а так же новые
      порты должны посылаться через интерфейс <a href="http://www.opendarwin.org/bugzilla/">Bugzilla</a>.</p>

      <div id="news">
	<h2 class="hdr">Новости проекта</h2>

	<?php print_headlines(); ?>
      </div>
    </div>
  </div>

<?php print_footer(); ?>

