<!DOCTYPE HTML>
<html>
<head>
<meta content="text/html; charset=windows-1251">
<title>Документ без названия</title>
</head>

<body>
<?
if ($_POST['pol'] == Man){
echo <<<END

<div class="treeview" style="padding:-40px;">
  <ul>
        <li>
            <div><p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">Одежда</a></p></div>
			<ul>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Выше пояса</a>
                  </p></div>
                    <ul>
                        <li><div id=""><p>
                                    <a href="#">Рубашка(длинный рукав, муж.)</a>
                      </p></div></li>
                        <li><div id=""><p>
                                    <a href="#">Рубашка(короткий рукав, муж.)</a>
                        </p></div></li>
                        <li><div id=""><p>
                                    <a href="#">Свитер(муж.)</a>
                        </p></div></li>
                        

                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Ниже пояса</a>
                    </p></div>
                    <ul>
                        <li id=""><div><p>
                                    <a href="#">Джинсы (муж.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Брюки повседневные (муж.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Шорты (муж.)</a>
                        </p></div></li>
                    </ul>
                </li>
                
				<li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Верхняя демисезонная</a>
                    </p></div>
                    <ul>
                        <li id="" class="W"><div><p>
                                    <a href="#">Куртка (муж.)</a>
                        </p></div></li>
                        <li id="" class="W"><div><p>
                                    <a href="#">Плащ (муж.)</a>
                        </p></div></li>
                    </ul>
                </li>
				<li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Верхняя зимняя</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Пуховик (муж.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Куртка (муж.)</a>
                        </p></div></li>
                    </ul>
                </li>
				<li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Пляжная</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Плавки</a>
                        </p></div></li>
                    </ul>
                </li>
        	</ul>
		</li>
		<li>
            <div><p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">Обувь</a></p></div>
            <ul>
                
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Мужская обувь</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Туфли</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Красовки</a>
                         </p></div></li>
                    </ul>
                </li>
            </ul>
        </li>
		<li>
            <div><p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">Нижнее белье</a></p></div>
            <ul>
                
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Мужское бельё</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Боксерки</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Плавки</a>
                         </p></div></li>
                    </ul>
                </li>
            </ul>
        </li>
        
        
    
        <li>
            <div><p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">Головные уборы</a></p></div>
            <ul>
                
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Мужские головные уборы</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Кепка, бейсболка</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Шапка меховая</a>
                         </p></div></li>
                        <li><div><p>
                                    <a href="#">Шапка-ушанка</a>
                        </p></div></li>
                    </ul>
                </li>
            </ul>
        </li>
        
        
        <li>
            <div><p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">Аксессуары</a></p></div>
            <ul>
                <li class="cl">
                    <div>
                        <p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">На голове</a>
                        </p>

                    </div>
                    <ul>
                        <li><div><p>
                                    <a href="#">шапки</a>
                        </p></div></li>
                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">На шее</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Шарф тёплый</a>
                         </p></div></li>
                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">На Руках</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Варежки</a>
                        </p></div></li>
                         <li><div><p>
                                    <a href="#">Кольца</a>
                        </p></div></li>
                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">На теле</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Пояс</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Ремень</a>
                         </p></div></li>
                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">С собой</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Кошелёк, портмоне</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Чехлы, сумочка для телефона</a>
                         </p></div></li>
                    </ul>
                </li>
                

          </ul>
        </li>
        
    </ul>
</div>
END;
}
?>
</body>
</html>