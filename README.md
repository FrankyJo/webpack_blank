need fix problem with runtime ( js crash if use async await ) https://stackoverflow.com/questions/33527653/babel-6-regeneratorruntime-is-not-defined<br>
<h2>Использование</h2>
<p>Для использования данной шаблона, необходимо скачать его и установить все нужные пакеты. Для сборки файлов используйте только команду <code>npm run watch</code>, т.к. она не минимизирует файлы</p>
<h2> Моменты на которые стоит обратить внимание при выливке </h2>
<ul>
  <li><span>ОБЯЗАТЕЛЬНО!!! На проде должен быть подключен скрипт <a href="https://cdn101.t.uk/resource/global/js/params_store.js">param-store.js </a>  </span></li>
  <li>Для попапа opt-out обязательно нужно подключить файл ajax.php ( он глобальный )</li>
  <li>Вместо названия сайта по текста ( напрмер: site.co.ul) должно быть переменна - {site_text}, которая добавляется в Feed Variables</li>
</ul>

<h2>Какие могут быть ошибки при установке шаблона</h2>
<h3>This version of npm is compatible with lockfileVersion@1, but package-lock.json was generated for lockfileVersion@0. I'll try to do my best with it!</h3>
<p>if  you have problem with <code>npm install</code> and error <code>This version of npm is compatible with lockfileVersion@1, but package-lock.json was generated for lockfileVersion@0. I'll try to do my best with it!</code> use this command <code>sudo rm -rf node_modules package-lock.json && npm install</code>
<p>
<h2>Создатели</h2>
<ul>
  <li><a href="https://github.com/FrankyJo">Denis Popov</a></li>
  <li><a href="https://github.com/DmytroArtemov">Dmytro Artemov</a></li>
</ul>

