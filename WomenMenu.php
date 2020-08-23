<!DOCTYPE HTML>
<html>
<head>
<meta content="text/html; charset=windows-1251">
<title>Документ без названия</title>
</head>

<body>
<?
if ($_POST['pol'] == Woman){
echo <<<END

<div class="treeview" style="padding:-40px;">
  <ul>
        <li>
            <div>
            	<p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">Одежда</a></p></div>
            <ul>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Выше пояса</a>
                  </p></div>
                    <ul>                   
                        <li><div><p>
                                    <a href="#">Рубашка(длинный рукав, жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Рубашка(короткий рукав, жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Жилет классический (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Джинсовая куртка (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Блузка (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Топ (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Пиджак, жакет (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Кардиган (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Туника (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Футболка (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Свитер (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Водолазка, бодлон (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Топ на бретельках (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Жилет стёганый (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Болеро (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Кофта (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Пуловер (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Джемпер (жен.)</a>
                        </p></div></li>


                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Ниже пояса</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Юбка (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Шорты (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Джинсы (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Брюки повседневные (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Шорты (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Леггинсы, лосины (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Капри (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Бриджи (жен.)</a>
                        </p></div></li>
                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">На всё тело</a>
                    </p></div>
                    <ul>
                        <li id="" class="W"><div><p>
                                    <a href="#">Платье повседневное (жен.)</a>
                        </p></div></li>
                        <li id="" class="W"><div><p>
                                    <a href="#">Платье вечернее (жен.)</a>
                        </p></div></li>
                        <li id="" class="W"><div><p>
                                    <a href="#">Комбинезон (жен.)</a>
                        </p></div></li>
                        <li id="" class="W"><div><p>
                                    <a href="#">Платье летнее (жен.)</a>
                        </p></div></li>
                        <li id="" class="W"><div><p>
                                    <a href="#">Платье деловое (жен.)</a>
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
                                    <a href="#">Куртка (жен.)</a>
                        </p></div></li>
                        <li id="" class="W"><div><p>
                                    <a href="#">Плащ (жен.)</a>
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
                                    <a href="#">Пуховик (жен.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Куртка (жен.)</a>
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
                                    <a href="#">Купальник слитный</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Бикини</a>
                        </p></div></li>
                    </ul>
                </li>
          </ul>
    </li>

    
      <li>
            <div><p><a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">Обувь</a></p></div>
            <ul>
                <li class="cl">
                    <div>
                        <p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Женская обувь</a>
                        </p>
                    </div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Сандали, Босоножки</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Модельный туфли</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Ботинки</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Демисезонные сапоги</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Домашние тапочки</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Батильоны</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Балетки</a>
                        </p></div></li>
                    </ul>
                </li>
            </ul>
        </li>
     <li>
            <div><p><a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">Нижнее белье</a></p></div>
            <ul>
                <li class="cl">
                    <div>
                        <p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Женская бельё</a>
                        </p>
                    </div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Пижима</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Ночная сорочка</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Стринги</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Бюсгалтер</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Трусы-шорты</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Трусы</a>
                        </p></div></li>
                    </ul>
                </li>
            </ul>
        </li>
        
        
    
        <li>
            <div><p><a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">Головные уборы</a></p></div>
            <ul>
                <li class="cl">
                    <div>
                        <p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Женские головные уборы</a>
                        </p>
                    </div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Кепка, бейсболка</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Шапка меховая</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Шапка вязаная</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Матерчатая,соломенная</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Кружевная шапочка</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Шапка-ушанка</a>
                        </p></div></li>
                    </ul>
                </li>
            </ul>
        </li>
        
        
        <li>
            <div><p><a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
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
                                    <a href="#">Серьги</a>
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
                                    <a href="#">Шарф декоративный</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">Шарф тёплый</a>
                         </p></div></li>
                        <li><div><p>
                                    <a href="#">Бусы</a>
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
                                    <a href="#">Браслеты</a>
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
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">Сумки</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">Сумка женская</a>
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