
  <nav class="nav-1" id="nav-1">
    <li><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsiveFun()">&#9776;</a></li>
    <li onclick="myFunction()"><a class="" >บันชีผู้ใช้ <i class="arrow down"></i></a></li>
    <li><a href="#news">วิชลิสส์ของฉัน</a></li>
    <li><a href="#contact">เปรียบเทียบ</a></li>
    <li><a class="lang" href="#lang">ภาษาไทย <i class="arrow down"></i></a></li>
    <li><a class="vender" href="#vender"> Vender <i class="arrow down"></i></a></li>

  </nav>

  <picture>
    <source class="logo col-2 col-s-2" media="(min-width: 600px)" srcset="/img/logo_78.png">
    <img class="logo col-2 col-s-2" src="/img/logo.png"/>
</picture>
<picture>
    <source class="basket col-025 col-s-025" media="(min-width: 600px)" srcset="/img/smart-cart.svg">
    <img class="basket col-025 col-s-025" src="/img/smart-cart.svg"/>
</picture>

    {{-- <img class="logo col-2 col-s-2"  src="/img/logo_78.png" alt=""> --}}
    {{-- <img class="logo col-2 col-s-2"  src="/img/logo.png" alt=""> --}}
    {{-- <img src="/img/smart-cart.svg" class="basket col-025 col-s-025"> --}}
    <img src="/img/notification.svg" class="notification col-025 col-s-025">
  <nav class="nav-2 responsive" id="nav-2">
    <li class="nav-li-2" style="width: 60%"><input type="text" class="search"  name="search" placeholder="ค้นหา"></li>
  </nav>


  <div id="myDropdown" class="dropdown-content" >
      <h2>ยินดีต้อนรับ</h2>
      <div class="row">
        <input type="button" name="login" class="button btn1" value="เข้าสู่ระบบ">
        <form action="https://www.shopteenii.com/home/login_set/registration" style="float: right">
            <input type="submit"  class="button btn2" value="สมัครสมาชิก">
        </form>
      </div>
      <div class="row">
        <input type="button" class="button btn3" value="เข้าระบบด้วย Facebook">
      </div>
      <div class="row">
        <input type="button" class="button btn4" value="เข้าระบบด้วย Gmail">
      </div>
      <hr style="margin-top: 20px; opacity: 0.3;">
      <div class="row">
        <input type="button" class="button btn4" value="เข้าระบบด้วย Gmail">
      </div>
      <div class="row">
          <h3>คำสั่งซื้อของฉัน</h3>
          <h3>คูปองของฉัน</h3>
          <h3>วิชลิสต์ของฉัน</h3>
          <h3>เปรียบเทียบ</h3>
      </div>
    </div>

  <script>
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  function responsiveFun() {
  var nav1 = document.getElementById("nav-1");
  var nav2 = document.getElementById("nav-2");
  var nav3 = document.getElementById("nav-2-2");
  if (nav1.className === "nav-1") {
    nav1.className += " responsive";
  } else {
    nav1.className = "nav-1";
  }
  if (nav2.className === "nav-2") {
    nav2.className += " responsive";
  } else {
    nav2.className = "nav-2";
  }
//   if (nav3.className === "nav-2") {
//     nav3.className += " responsive";
//   } else {
//     nav3.className = "nav-2";
//   }

}

  </script>
