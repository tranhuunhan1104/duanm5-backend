<style>
    *{
     margin:0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Roboto', sans-serif;
 }

 section{
     position: relative;
     width: 100%;
     height: 100vh;
     display: flex;
 }

 section .img-bg{
     position: relative;
     width: 50%;
     height: 100%;
 }



 section .img-bg img{
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     object-fit: cover;
 }
 section .noi-dung{
     display: flex;
     justify-content: center;
     align-items: center;
     width: 50%;
     height: 100%;
 }

 section .noi-dung .form{
     width: 50%;
 }


 section .noi-dung .form h2{
     color: #607d8b;
     font-weight: 500;
     font-size: 1.5em;
     text-transform: uppercase;
     margin-bottom: 20px;
     border-bottom: 4px solid #6694e9;
     display: inline-block;
     letter-spacing: 1px;
 }
 section .noi-dung .form .input-form{
      margin-bottom: 20px;
  }
 section .noi-dung .form .input-form span{
      font-size: 16px;
      margin-bottom: 5px;
      display: inline-block;
      color: #607db8;
      letter-spacing: 1px;
       }
 section .noi-dung .form .input-form input{
      width: 100%;
      padding: 10px 20px;
      outline: none;
      border: 1px solid #607d8b;
      font-size: 16px;
      letter-spacing: 1px;
      color: #607d8b;
      background: transparent;
      border-radius: 30px;
      }

  section .noi-dung .form .input-form input[type="submit"]{
      background: #6694e9;
      color: #fff;
      outline: none;
      border: none;
      font-weight: 500;
      cursor: pointer;
      box-shadow: 0 1px 1px rgba(0,0,0,0.12),
                 0 2px 2px rgba(0,0,0,0.12),
                 0 4px 4px rgba(0,0,0,0.12),
                0 8px 8px rgba(0,0,0,0.12),
                0 16px 16px rgba(0,0,0,0.12);
  }
 section .noi-dung .form .input-form input[type="submit"]:hover{
      background: #f59c9c;
  }
  section .noi-dung .form .nho-dang-nhap{
      margin-bottom: 10px;
      color: #607d8b;
      font-size: 14px;
  }
  section .noi-dung .form .input-form p{
      color: #607d8b;
  }
 section .noi-dung .form .input-form p a{
      color: #f59c9c;
  }

 section .noi-dung .form h3{
      color: #607d8b;
      text-align: center;
      margin: 80px 0 10px;
      font-weight: 500;
  }
 section .noi-dung .form .icon-dang-nhap{
      display: flex;
      justify-content: center;
      align-items: center;
  }
 section .noi-dung .form .icon-dang-nhap li{
      list-style: none;
      cursor: pointer;
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
  }
  section .noi-dung .form .icon-dang-nhap li:nth-child(1){
      color: #3b5999;
  }
  section .noi-dung .form .icon-dang-nhap li:nth-child(2){
      color: #dd4b39;
  }
  section .noi-dung .form .icon-dang-nhap li:nth-child(3){
      color: #55acee;
  }
  section .noi-dung .form .icon-dang-nhap li i{
      font-size: 24px;
  }

 @media (max-width: 768px){
     section .img-bg{
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
     }
     section .noi-dung{
         display: flex;
         justify-content: center;
         align-items: center;
         width: 100%;
         height: 100%;
         z-index: 1;
     }
     section .noi-dung .form{
         width: 100%;
         padding: 40px;
         background: rgba(255 255 255 / 0.9);
         margin: 50px;
     }
     section .noi-dung .form h3{
         color: #607d8b;
         text-align: center;
         margin: 30px 0 10px;
         font-weight: 500;
     }
 }

 </style>
 <section>
     <!--B???t ?????u Ph???n H??nh ???nh-->
     <div class="img-bg">
         <img src="https://niemvuilaptrinh.ams3.cdn.digitaloceanspaces.com/tao_trang_dang_nhap/hinh_anh_minh_hoa.jpg" alt="H??nh ???nh Minh H???a">
     </div>
     <!--K???t Th??c Ph???n H??nh ???nh-->
     <!--B???t ?????u Ph???n N???i Dung-->
     <div class="noi-dung">
         <div class="form">
             <h2>L???y L???i M???t Kh???u</h2>
             <form action="{{ route('posttakepassword') }}" method="POST" >
                @csrf
                 <div class="input-form">
                     <span>Email</span>
                     <input type="text" name="email">
                        @if ($errors->any())
                                <p style="color:red">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div id="" class="form-check-label">
                       <p style="color: rgb(98, 96, 96)">M???t kh???u s??? ???????c g???i v??? Email li??n k???t <p style="color: red">Kh??ng ???????c chia s??? ??i???u n??y v???i b???t k?? ai!</p></p>
                     </div>
                     <br>
                 <div class="input-form">
                    <span>
                        <input type="submit" value="Duy???t">
                    </span>
                    <span  >
                        <p class="text-center">???? C?? T??i Kho???n? <a href="{{ route('login') }}">????ng Nh???p</a></p>
                    </span>
                 </div>
             </form>
         </div>
     </div>
     <!--K???t Th??c Ph???n N???i Dung-->
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
    @php
    if(Session::has('saiemail')){
    @endphp
    Swal.fire({
         icon: 'error',
         title: '???i!',
         text: "Email c???a b???n kh??ng t???n t???i tr??n h??? th???ng! ki???m tra l???i nh??",
         showClass: {
         popup: 'swal2-show'
             }
         })
     @php
    }
     @endphp
     </script>
 </section>
