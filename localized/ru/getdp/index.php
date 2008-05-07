  <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    include_once("$DOCUMENT_ROOT/ru/includes/common.inc");
    print_header('Get DarwinPorts', 'utf-8');
  ?>

    <div id="content">
      <h2 class="hdr">Получить DarwinPorts</h2>

      <p>Для того, что-бы получить дистрибутив DarwinPorts, сначала необходимо
      сделать &#8220;checked out&#8221; из CVS репозитария проекта OpenDarwin.</p>

      <p>Пожалуйста, имейте ввиду, что для получения и установки DarwinPorts на
      систему Mac OS X, у Вас должны быть установлены Mac OS X Developer Tools (
      для систем, версий 10.2.x), или XCode (для систем 10.3.x).</p>

	  <p>Если Вы желаете установить и использовать DarwinPorts на системах,
	  отличных от Mac OS X, пожалуйста установите следующее необходимое
	  програмное обеспечение (мы подразумеваем, что базовое ПО, такое как gcc
	  уже имеется):</p>
	  <ul>
	  	<li>TCL (8.3 или 8.4)</li>
		<li>curl</li>
		<li>OpenSSL или libmd</li>
	  </ul>

      <p>Используйте следующие команды, что-бы получить файлы проекта из CVS репозитария:</p>

<pre>
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od login
cvs -d :pserver:anonymous@anoncvs.opendarwin.org:/Volumes/src/cvs/od co -P darwinports
</pre>

      <p>Когда сервер спросит у Вас пароль - просто нажмите <kbd>return</kbd> &mdash; пароль не используется.</p>

      <p>Если Вы не хотите использовать CVS, Вы можете скачать обновляемый каждую ночь
      <a href="http://darwinports.opendarwin.org/darwinports-nightly-cvs-snapshot.tar.gz">CVS-snapshot</a>.
      И, получив его один раз, Вы можете получать изменения из CVS с помощью 
      специальных команд.</p>

      <p>Если Вы желаете лишь посмотреть данные из CVS репозитария - пожалуйста,
      воспользуйтесь интерфейсом <a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/darwinports/">CVSweb</a>.</p>

      <h5 class="subhdr">Установка</h5>

      <p>После того, как Вы получили DarwinPorts, необходимо дополнительно
      проделать несколько операций, прежде чем Вы сможете устанавливать порты.</p>
	
      <p>Инструкцию по установке пожалуйста смотрите в файле <tt>README_ru</tt>
      в той директории, где Вы делали CVS checkout. Так же есть 
      <a href="http://darwinports.opendarwin.org/docs/ch01s03.html">глава</a>
      в <a href="http://darwinports.opendarwin.org/docs/">Описании DarwinPorts</a> в
      которой описаны установка и правила по использованию системы DarwinPorts. (возможно на англ. языке)</p> 

      <p><a href="/ru/help/">Помощь</a> так же доступна в случае необходимости.</p>
    </div>
  </div>

<?php print_footer(); ?>

