# Modal DB Connect

>사용한 프레임워크 : codeigniter 3, bootstrap 4<br>
>사용한 언어 : php7, css3, javascript, SQL<br>
>사용한 DB : MariaDB<br>
>사용한 DBMS : phpMyAdmin<br>
>사용한 서버 : apache server<br>
>사용한 Tool : Visual Studio Code<br>
<br>

### 주의사항
<ul>
  <li>codeIgniter3 에서 Index 죽이기 작업을 하고 진행했습니다. 위의 코드를 실행시키려면 먼저 Index 죽이기 작업을 하셔야 합니다.</li>
   <li><a href="https://gold9ine.tistory.com/entry/CodeIgniter-%EC%BD%94%EB%93%9C%EC%9D%B4%EA%B7%B8%EB%82%98%EC%9D%B4%ED%84%B0-indexphp-%EC%A3%BD%EC%9D%B4%EA%B8%B0-Not-Found-error">index.php remove 방법 블로그 글</a></li>
  <li>my 폴더는 아래의 이미지처럼 위치 해야 합니다.</li>
   <kbd>
    <img src="https://user-images.githubusercontent.com/74585673/153512814-370120a3-735b-4730-869e-a6f7a24387e0.PNG">
  </kbd>
</ul>
<br>

<b>제작한 이유</b> : DB에 있는 값 하나를 페이지에 띄우거나 여러 개의 값을 띄우는 것은 가능하나 modal 창에 각자 다른 값을 나타내려고 하면 하나의 값은 일반적으로 출력하면 되고 여러 개의 값이지만 한정적이면 modal을 하나하나 만들어서 각자 다른 값을 넣으면 됩니다, 하지만 여러 개의 값이고 나중에 추가할 가능성이 있으면 자연스럽게 foreach문을 사용하여 계속 출력시켜야 합니다, 이럴 경우 modal창으로 띄우면 가장 먼저 가져온 값만 modal창에 나오는 문제가 있었습니다, 이 를 해결하고자 제작하였습니다.
<br><br>

<a href="https://juniorprogram.tistory.com/53">Modal DB Connect 설명 포스트</a>
