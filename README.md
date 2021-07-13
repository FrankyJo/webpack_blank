need fix problem with runtime ( js crash if use async await ) https://stackoverflow.com/questions/33527653/babel-6-regeneratorruntime-is-not-defined<br>



<h2> Моменты на которые стоит обратить внимание при выливке </h2>
<ul>
  <li>Для попапа opt-out обязательно нужно подключить файл ajax.php ( он глобальный )</li>
</ul>

<h2>Какие могут быть ошибки при установке шаблона</h2>
<h3>This version of npm is compatible with lockfileVersion@1, but package-lock.json was generated for lockfileVersion@0. I'll try to do my best with it!</h3
<p>if  you have problem with <em>npm install</em> and error <code>This version of npm is compatible with lockfileVersion@1, but package-lock.json was generated for lockfileVersion@0. I'll try to do my best with it!</code> use this command <em>sudo rm -rf node_modules package-lock.json && npm install</code>
<p>
