<!DOCTYPE HTML>
<html>
<head>
<meta content="text/html; charset=windows-1251">
<title>�������� ��� ��������</title>
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
                <a href="#">������</a></p></div>
			<ul>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">���� �����</a>
                  </p></div>
                    <ul>
                        <li><div id=""><p>
                                    <a href="#">�������(������� �����, ���.)</a>
                      </p></div></li>
                        <li><div id=""><p>
                                    <a href="#">�������(�������� �����, ���.)</a>
                        </p></div></li>
                        <li><div id=""><p>
                                    <a href="#">������(���.)</a>
                        </p></div></li>
                        

                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">���� �����</a>
                    </p></div>
                    <ul>
                        <li id=""><div><p>
                                    <a href="#">������ (���.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">����� ������������ (���.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">����� (���.)</a>
                        </p></div></li>
                    </ul>
                </li>
                
				<li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">������� ������������</a>
                    </p></div>
                    <ul>
                        <li id="" class="W"><div><p>
                                    <a href="#">������ (���.)</a>
                        </p></div></li>
                        <li id="" class="W"><div><p>
                                    <a href="#">���� (���.)</a>
                        </p></div></li>
                    </ul>
                </li>
				<li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">������� ������</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">������� (���.)</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">������ (���.)</a>
                        </p></div></li>
                    </ul>
                </li>
				<li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">�������</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">������</a>
                        </p></div></li>
                    </ul>
                </li>
        	</ul>
		</li>
		<li>
            <div><p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">�����</a></p></div>
            <ul>
                
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">������� �����</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">�����</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">��������</a>
                         </p></div></li>
                    </ul>
                </li>
            </ul>
        </li>
		<li>
            <div><p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">������ �����</a></p></div>
            <ul>
                
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">������� �����</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">��������</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">������</a>
                         </p></div></li>
                    </ul>
                </li>
            </ul>
        </li>
        
        
    
        <li>
            <div><p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">�������� �����</a></p></div>
            <ul>
                
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">������� �������� �����</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">�����, ���������</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">����� �������</a>
                         </p></div></li>
                        <li><div><p>
                                    <a href="#">�����-������</a>
                        </p></div></li>
                    </ul>
                </li>
            </ul>
        </li>
        
        
        <li>
            <div><p>
            	<a href="#" class="sc" onclick="return UnHide(this)">&#9660;</a>
                <a href="#">����������</a></p></div>
            <ul>
                <li class="cl">
                    <div>
                        <p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">�� ������</a>
                        </p>

                    </div>
                    <ul>
                        <li><div><p>
                                    <a href="#">�����</a>
                        </p></div></li>
                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">�� ���</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">���� �����</a>
                         </p></div></li>
                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">�� �����</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">�������</a>
                        </p></div></li>
                         <li><div><p>
                                    <a href="#">������</a>
                        </p></div></li>
                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">�� ����</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">����</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">������</a>
                         </p></div></li>
                    </ul>
                </li>
                <li class="cl">
                    <div><p>
                            <a href="#" class="sc" onclick="return UnHide(this)">&#9658;</a>
                            <a href="#">� �����</a>
                    </p></div>
                    <ul>
                        <li><div><p>
                                    <a href="#">������, ��������</a>
                        </p></div></li>
                        <li><div><p>
                                    <a href="#">�����, ������� ��� ��������</a>
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