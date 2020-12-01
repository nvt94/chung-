<!DOCTYPE html>
<html lang="en">
<head>
  <title>Viên ngậm tengsu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/image/logo.ico" type = "image/x-icon"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap&subset=vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap&subset=vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap&subset=vietnamese" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flipclock.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css?ver=2.5">
  <script src="./assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/js/flipclock.js"></script>
  <script type="text/javascript" src="./assets/js/wow.min.js"></script>
   </script>
     <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N7WXPN8');</script>
    <!-- End Google Tag Manager -->

    <!-- Hotjar Tracking Code for https://eway.vn -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1029235,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <script type="text/javascript">
    function ladiViewport() {
      var width = (window.outerWidth > 0) ? window.outerWidth : screen.width;
      var content = "";
      if (width < 420) {
        content = "user-scalable=no , width=414";
      }else{
        content = 'width=device-width, initial-scale=1'
      }
      var meta = document.querySelector('meta[name="viewport"]');
      if (meta == undefined) {
        meta = document.createElement('meta');
        meta.name = 'viewport';
        document.head.prepend(meta);
      }
      meta.content = content;
    };
    ladiViewport();
  </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7WXPN8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="ladi-tengsu">
  <div class="sec-head">
    <div class="d-flex align-items-center">
      <div class="box-sale ">
        <h5>ƯU ĐÃI ĐẶC BIỆT: MUA 2 TẶNG 1</h5>
        <div class="price">
          <p><sub>Chỉ còn </sub><span>790.000VNĐ</span>/HỘP</p>
        </div>
      </div>
      <div class="box-clock flex-fill " id="timer">
        <h6>ƯU ĐÃI ĐẶC BIỆT CÒN</h6>
          <div class="time days">
             <div class="day">
              <span>0</span>
              <span>1</span>
              <sub>Ngày</sub>
             </div>
          </div>
          <div class="time hours">
             <div class="hour">
              <span>0</span>
              <span>1</span>
              <sub>Giờ</sub>
             </div>
          </div>
          <div class="time mins">
             <div class="min">
              <span>0</span>
              <span>1</span>
              <sub>phút</sub>
             </div>
          </div>
      </div>
      <div class="btn-scoll flex-fill">
        <button type="submit" class="btn btn-block  animated infinite pulse" data-scroll="#box-form">Đặt hàng ngay</button>
      </div>
    </div>
  </div>
  <div class="sec1">
    <div class="container ladi">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="box-show">
            <h1>tengsu</h1>
            <p>Viên NGẬM TĂNG CƯỜNG SINH LÝ <br> SẢN PHẨM HOÀN HẢO CHO PHÁI MẠNH</p>
            <div class="box-slogan">
              <img src="./assets/image/slogan.png" class="img-fluid d-block mx-auto">
              <div class="h2">
                <p>NÀNG CẦU XIN THA</p>
                <p>RÊN LA LÊN ĐỈNH</p>
              </div>
            </div>
            <div class="box-sp">
              <img src="./assets/image/sp.png" class="img-fluid d-block ">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec2">
    <div class="container ladi">
      <div class="box-show">
        <div class="box-form">
          <div class="box-order d-flex">
            <div class="box-sp align-self-center">
              <div class="wow" data-wow-duration="1s" data-wow-delay="1s"><img src="./assets/image/spe.png" class="img-fluid d-block mx-auto"></div>
              <div class="price">
                <p>1.580.000 VNĐ/HỘP</p>
                <p><sub>Chỉ còn</sub><span> 790.000 VNĐ</span>/HỘP</p>
              </div>
            </div>
            <div class="order">
              <h2>đăng ký ngay <br> nhận ngàn ƯU ĐÃI</h2>
              <form action="order.php?fb_pixel_id=<?php echo (string)htmlspecialchars(@$_GET['fb_pixel_id'], ENT_QUOTES, 'utf-8'); ?>" method="POST" >
                <input type="hidden" name="click_id" value="<?php echo (string)@$_GET['click_id']; ?>">
                <input type="hidden" name="adf_source" value="">
                <input type="hidden" name="country_code" value="VN">
                <input type="hidden" name="ip_country" value="VN">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Họ tên *" name="name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Số điện thoại *" name="phone">
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="2" placeholder="Địa chỉ" name="address"></textarea>
                </div>
                <button type="submit" class="btn btn-block js_submit  animated infinite pulse">Đặt hàng ngay</button>
              </form>
            </div>
          </div>
        </div>
        <h2>TENGSU ĐEM ĐẾN LÀ BÍ QUYẾT "BÁCH CHIẾN BÁCH THẮNG" CỦA CÁNH MÀY RÂU NHẬT BẢN</h2>
        <div class="row">
          <div class="col-md-3 col-6">
            <div class="item wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
              <div><img src="./assets/image/v1.png" class="img-fluid d-block mx-auto"></div>
              <p>Đẩy "cậu nhỏ" <br> lên ngay lập tức</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="item wow slideInUp" data-wow-duration="1s" data-wow-delay="0.25s">
              <div><img src="./assets/image/v2.png" class="img-fluid d-block mx-auto"></div>
              <p>Kéo dài thời gian quan <br> hệ gấp 3 lần hiện tại</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="item wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div><img src="./assets/image/v3.png" class="img-fluid d-block mx-auto"></div>
              <p>Tăng kích thước thêm <br> 3-5cm. Đạt độ cương <br>cứng tối đa</p>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="item wow slideInUp" data-wow-duration="1s" data-wow-delay="1s">
              <div><img src="./assets/image/v4.png" class="img-fluid d-block mx-auto"></div>
              <p>Đạt đỉnh cực khoái <br> tuyệt vời</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec3"> 
    <div class="container">
      <div class="box-show">
        <h2>những thành phần vạn năng <br> có trong viên ngậm tengsu</h2>
        <p>Chiết xuất 100% từ tự nhiên, đặc biệt có <span>Cao quy bản</span> <br> được mệnh danh là thần dược nghìn năm dành cho nam giới</p>
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <div class="box-card wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div> <img src="./assets/image/tp1.jpg" class="img-fluid d-block mx-auto"></div>
              <h3>Dương dâm hoắc</h3>
              <p>Giúp bổ thân tráng dương, tăng cương ham muốn, tăng cường miễn dịch</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="box-card wow slideInUp" data-wow-duration="1s" data-wow-delay="0.25s">
              <div> <img src="./assets/image/tp2.jpg" class="img-fluid d-block mx-auto"></div>
              <h3>khiếm thực nam</h3>
              <p>Tăng cường ham muốn và cải thiện hiện tượng yếu sinh lý</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="box-card wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
              <div> <img src="./assets/image/tp3.jpg" class="img-fluid d-block mx-auto"></div>
              <h3>tang phiêu tiêu</h3>
              <p>Tác dụng ích thận, cố tinh, khỏe thận dương, bổ thận âm, chuyên trị các chứng di tinh, đái dắt, liệt dương, kinh nguyệt bế, đau thắt lưng.</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="box-card wow slideInUp" data-wow-duration="1s" data-wow-delay="0.25s">
              <div> <img src="./assets/image/tp4.jpg" class="img-fluid d-block mx-auto"></div>
              <h3>Ba kích</h3>
              <p>Ba kích có vị cay, hơi ngọt, công dụng trợ dương bổ thận; trị thận hư, liệt dương, di tinh, mộng tinh</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="box-card wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div> <img src="./assets/image/tp5.jpg" class="img-fluid d-block mx-auto"></div>
              <h3>L-tryptophan</h3>
              <p>Là 1 loại axit amin thiết yếu giúp tổng hợp protein và truyền dẫn tín hiệu đến hệ thần kinh trung ương hỗ trợ chức năng sinh lý hiệu quả</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-6 col-sm-12">
            <div class="box-sp wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">

              <img src="./assets/image/sp2.png" class="img-fluid d-block mx-auto">
              <h3>Viên ngậm tengsu</h3>
            </div>
          </div>
          <div class="col-md-12 col-sm-6 wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="tp">
              <img src="./assets/image/quyban.png" class="img-fluid d-block mx-auto">
            </div>
            <div class="box-border">
              <div class="d-flex">
                <div class="box-item  flex-fill align-self-center">
                  <div class="d-flex">
                    <img src="./assets/image/tp6.jpg" class="img-fluid d-block">
                    <span class="align-self-center">Cao <br> quy <br>  bản</span>
                  </div>
                </div>
                <div class="box-i flex-fill align-self-center">
                  <p>Cao quy bản được làm từ yếm rùa phơi khô cực kì quý hiếm - không phải ai cũng có thể sở hữu, vị mặn, tính hàn có tác dụng bổ thận tráng dương, điều huyết và tăng cường sinh khí cho nam giới.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-scoll ">
          <button type="submit" class="btn btn-block  animated infinite pulse" data-scroll="#box-form">Đặt hàng ngay</button>
      </div>
      </div>
    </div>
  </div>
  <div class="sec4">
    <div class="container ladi">
      <div class="box-show">
        <h3>Bình luận về sản phẩm</h3>
        <div class="fb-comm">

          <div class="fb-head d-flex">
            <div class="fb-num">31 bình luận</div>
            <div class="flex-fill text-right">
              <span>Sắp xếp theo</span>
              <span>Mới nhất</span>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/damdung.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Mạnh Dũng</p>
              <p>Ngậm chưa tan kẹo đã phải cuống cuồng tìm vợ vì không thể kìm hãm được...</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>3 phút</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/vandai.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Văn Đại</p>
              <p>Thiết kế nhỏ gọn, rất kín đáo, nhìn qua tưởng chỉ là kẹo thơm miệng thông thường. Dùng thật sự hiệu quả.</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>5 phút</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/phuluong.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Phú Lương</p>
              <p>Tôi làm ở công ty Nhật và đồng nghiệp nam cũng hay rỉ tai nhau về loại Viên ngậm này.</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>8 phút</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/xuanquy.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Quý Xuân</p>
              <p>Tôi không biết phải tả thế nào, nhưng chỉ cần vừa ngậm xong tôi đã hoàn toàn biến thành người khác, nóng bức, rộn rạo trong người, bắt buộc phải quan hệ ngay lập tức...</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>15 phút</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/huongly.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Hương Ly </p>
              <p>Từ khi cho ny dùng Tengsu, em không bao giờ phải lo về con c "yếu đuối" của anh y nữa. Giờ nó hung hãn như con hổ bất trị rồi.</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>32 phút</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/thanhdat.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Thành Đạt</p>
              <p>50 tuổi đầu mới biết làm vợ "sướng", tất cả là nhờ Tengsu. Thật tuyệt!</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>46 phút</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/ducchien.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Đức Chiến</p>
              <p>Kẹo ngâm vị dễ chịu, không có tác dụng phụ, rất an tâm.</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>1 giờ</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/quangninh.jpg?ver=1" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Quang Ninh</p>
              <p>Vợ em thắc mắc sao dạo này "khoẻ" thế, nhìn viên  ngậm Tengsu thì nào đoán ra nổi, bao bì nhìn khác gì viên ngậm thơm miệng cai thuốc lá đâu.</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>1 giờ</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/congvinh.jpg?ver=1" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Công Vinh</p>
              <p>Hàng này tốt thật sự anh em ạ, ông nào yếu thì thử đi nhé!</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>1 giờ</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/tuanh.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Anh Tú</p>
              <p>Nhận gói hàng bọc cẩn thận, mở ra trong hộp có 12 viên, chắc dùng được 1 tuần, nhưng hoá ra ngậm lần đầu đã có tác dụng luôn rồi.</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>2 giờ</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/duynguyen.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Duy Nguyễn</p>
              <p>Một phát lên đỉnh, nghe vợ rên mới biết phê cỡ nào... Hoá ra dùng bao loại, bồi bổ các kiểu cũng chả bằng viên  ngậm bé tẹo này.</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>2 giờ</span></p>
            </div>
          </div>
          <div class="fb-body d-flex">
            <div class="fb-av flex-fill">
              <img src="./assets/image/thuquynh.jpg" class="d-block img-fluid mx-auto">
            </div>
            <div class="flex-fill fb-i">
              <p class="name">Thu Quỳnh</p>
              <p>Đời em chả biết "sướng" bao giờ cho đến khi tự mua Tengsu cho chồng ngậm, giờ thì hạnh phúc đ chịu nổi. Hiiiii</p>
              <p><span>Thích</span>&nbsp;·&nbsp;<span>Phản hồi</span>&nbsp;·&nbsp;<span>2 giờ</span></p>
            </div>
          </div>
          <div class="fb-foodter ">
            <button type="button" class="btn btn-block animated infinite pulse fb" data-scroll="#box-form">ĐẶT HÀNG NGAY</button>
            <p>Plugin bình luận trên Facebook</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec5">
    <div class="container">
      <div class="box-show">
        <h2>VÌ SAO Viên NGẬM TENGSU LUÔN LÀ LỰA CHỌN HÀNG ĐẦU <br> TRONG TRỊ TRƯỜNG SẢN PHẨM TĂNG CƯỜNG SINH LÝ?</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="box-item d-flex left  wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.25s">
              <div class="flex-fill "><img src="./assets/image/ext1.png" class="img-fluid d-block mx-auto"></div>
              <p class="align-self-center">Viên ngậm tan ngay trong miệng, tác dụng ngay lập tức, kích thích bản năng nhục dục trỗi dậy</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-item d-flex right  wow slideInRight" data-wow-duration="1s" data-wow-delay="0.25s">
              <div class="flex-fill"><img src="./assets/image/ext4.png" class="img-fluid d-block mx-auto"></div>
              <p class="align-self-center">Vị kẹo the ngọt, không hề khó chịu, ngậm xong để lại hương thơm trong miệng, không ai có thể phát hiện</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-item d-flex left  wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="flex-fill "><img src="./assets/image/ext2.png" class="img-fluid d-block mx-auto"></div>
              <p class="align-self-center">Viên ngậm đóng gói nhỏ gọn, tiện lợi, theo bạn đi bất cứ đấu, cực kì kín đáo và an toàn</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-item d-flex right  wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="flex-fill"><img src="./assets/image/ext5.png" class="img-fluid d-block mx-auto"></div>
              <p class="align-self-center">Tăng cường sinh lý phái mạnh, tăng cường ham muốn, cho người dùng "khoẻ" từ bên trong</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-item d-flex left  wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.75s">
              <div class="flex-fill "><img src="./assets/image/ext3.png" class="img-fluid d-block mx-auto"></div>
              <p class="align-self-center">Chiết xuất 100% thiên nhiên, đặc biệt có sự hiện diện của Cao Quy Bản - Thảo dược quý giá nghìn năm với công dụng sinh lý tuyệt vời</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-item d-flex right  wow slideInRight" data-wow-duration="1s" data-wow-delay="0.75s">
              <div class="flex-fill"><img src="./assets/image/ext6.png" class="img-fluid d-block mx-auto"></div>
              <p class="align-self-center">Bổ sung chất oxy hoá có tác dụng chống các gốc tự do, làm chất quá trình lão hoá, kéo dài tình trạng sung mãn sinh lý</p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="box-sp">
              <img src="./assets/image/sp3.png" class="img-fluid d-block mx-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec6">
    <div class="container">
      <div class="box-show">
        <div class="row">
          <div class="col-md-5">
            <div class="box-sp">
              <img src="./assets/image/sp3.png" class="img-fluid d-block mx-auto">
            </div>
          </div>
          <div class="col-md-7">
            <div class="box-i">
              <ul>
                <li>- Dùng 1 viên/lần</li>
                <li>- Ngậm 1-2 lần/ngày</li>
                <li>- Ngậm hoặc nhai trước khi nuốt</li>
              </ul>
              <h4>lưu ý</h4>
              <p>- Không sử dụng cho người dưới 18 tuổi</p>
              <p>- Không sử dụng cho người có tiền sử bệnh tim mạch, cao huyết áp, nhồi máu cơ tim</p>
              <p>- Dùng quá liều có thể gây cương cứng lâu, ảnh hưởng đến đời sống sinh hoạt</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec7">
    <div class="container ladi">
      <div class="box-show">
        <h2>VIÊN NGẬM SINH LÝ TENGSU <br> CAM KẾT TỪ NHÀ SẢN XUẤT</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="box-sp">
              <img src="./assets/image/gp.png" class="img-fluid d-block mx-auto">
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="box-i">
              <p class="wow slideInRight" data-wow-duration="1s" data-wow-delay="0.25s">Sản phẩm chính hãng <br> Bộ Y Tế cấp phép</p>
              <p class="wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">Không có tác dụng phụ</p>
              <p class="wow slideInRight" data-wow-duration="1s" data-wow-delay="0.75s">Chuyên gia nam học luôn <br> đồng hành cùng người dùng</p>
              <p class="wow slideInRight" data-wow-duration="1s" data-wow-delay="1s">Bảo mật thông tin khách hàng tối ưu</p>
              <p class="wow slideInRight" data-wow-duration="1s" data-wow-delay="1.25s">Hiệu quả ngay từ lần dùng đầu tiên</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec7 seca">
    <div class="container ladi">
      <div class="box-show">
        <h2>HỘI THẢO QUỐC TẾ: CẬP NHẬP GIẢI PHÁP MỚI TRONG HỖ TRỢ TĂNG CƯỜNG SINH LỰC NAM GỌI TÊN VIÊN NGẬM TENGSU</h2>
        <p>Dượng ơi Thanh Bình, tài tử điện ảnh Hải Anh... cùng các chuyên gia trong và ngoài nước hào hứng với viên ngậm sinh lý thế hệ mới Tengsu</p>
        <div class="row">
          <div class="col-md-6">
            <div class="box-photo">
              <img src="./assets/image/4f5ad6f4a8d5538b0ac415.webp?ver=1" class="img-fluid d-block mx-auto">
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-photo">
              <img src="./assets/image/6b5f54cc2aedd1b388fc11.webp?ver=1" class="img-fluid d-block mx-auto">
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-photo">
              <img src="./assets/image/32fb176e694f9211cb5e8.webp?ver=1" class="img-fluid d-block mx-auto">
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-photo">
              <img src="./assets/image/457facd4d2f529ab70e423.webp?ver=1" class="img-fluid d-block mx-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec8">
    <div class="container ladi">
      <div class="row">
        <div class="col-lg-6 ">
          <div class="box-show">
            <h1>tengsu</h1>
            <p>Viên NGẬM TĂNG CƯỜNG SINH LÝ <br> SẢN PHẨM HOÀN HẢO CHO PHÁI MẠNH</p>
            
            <div class="box-sp">
              <img src="./assets/image/sp4.png" class="img-fluid d-block mx-auto">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box-form" id="box-form">
             <div class="f-head">
                 <h2>đặt mua ngay </h2>
                 <p>số lượng sản phẩm có hạn</p>
             </div>
             <div class="f-body">
                  <div class="coutdown">
                      <div class="clock">
                          <div id="coutdown"></div>
                      </div>
                  </div>
                  <div class="f-order">
                      <form  action="order.php?fb_pixel_id=<?php echo (string)htmlspecialchars(@$_GET['fb_pixel_id'], ENT_QUOTES, 'utf-8'); ?>" method="POST" >
                          <input type="hidden" name="click_id" value="<?php echo (string)@$_GET['click_id']; ?>">
                          <input type="hidden" name="adf_source" value="">
                          <input type="hidden" name="country_code" value="VN">
                          <input type="hidden" name="ip_country" value="VN">
                          <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên *">
                          </div>
                          <div class="form-group">            
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại *">
                          </div>
                          <div class="form-group">            
                            <textarea class="form-control" rows="2" id="address" name="address" placeholder="Địa chỉ"></textarea>
                          </div>
                          <div class="price">
                              <div class="p-o">Giá cũ 1580.000 VND/hộp</div>
                              <div class="p-s">MUA 2 TẶNG 1</div>
                              <div class="p-n"><sub>chỉ còn</sub> 790.000 VND/hộp</div>
                              
                          </div>
                          <button type="submit" class="btn btn-block js_submit  animated infinite pulse">Đặt hàng ngay</button>
                      </form>
                  </div>
             </div>
           </div>
           <p>** Sản phẩm không phải là thuốc không thay thế thuốc  chữa bệnh <br>
           Tác dụng nhanh hay chậm tùy thuộc vào cơ địa của mỗi người</p>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Cookie-popup-wrap -->
    <div class="cookie-popup-wrap">
        <div class="cookie-popup">
            <h2>Để lại thông tin để được mua hàng với giá ưu đãi</h2>
            <form action="order.php?fb_pixel_id=<?php echo (string)htmlspecialchars(@$_GET['fb_pixel_id'], ENT_QUOTES, 'utf-8'); ?>" method="POST" role="form" class="form-order">
                <input type="hidden" name="click_id" value="<?php echo (string)@$_GET['click_id']; ?>">
                <input type="hidden" name="address" value="">
                <input type="hidden" name="adf_source" value="">
                <input type="hidden" name="country_code" value="VN">
                <input type="hidden" name="ip_country" value="VN">
                <div class="content">
                    <div class="form-group">
                        <!-- <label for="">Họ tên *</label> -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên *">
                    </div>
                    <div class="form-group">
                        <!-- <label for="">Số điện thoại *</label> -->
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Số điện thoại *">
                    </div>
                    <div class="form-group">
                       <!--  <label for="">Địa chỉ</label> -->
                        <textarea class="form-control" placeholder="Địa chỉ" name="address" rows="3" placeholder="Địa chỉ"></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-box js_submit">Đặt mua ngay</button>
                </div>
            </form>
            <h6 id="closepopup"><a href="#" style="color: #fff;font-weight: bold;">Đóng</a></h6>
        </div>
    </div>
    
<!--End .cookie-popup-->
<style>
    div.cookie-popup-wrap {
        position: relative;
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(0, 0, 0, 0.6);
        top: 0;
        left: 0;
        display: none;
        z-index: 99999;
        /*padding: 15px;*/
    }

    div.cookie-popup {
        font-family: "Roboto";
        max-width: 340px;
        margin: 10% auto;
        background-color: #323437;
        padding: 10px 20px;
        z-index: 1000;
        border: 2px solid #fed203;
        border-radius: 5px;
    }

    div.cookie-popup form {
        width: 100%;
        margin: 5% auto;
        background-color: #323437;
        padding: 0;
        border: none;
    }

    div.cookie-popup h2 {
        margin-bottom: 20px;
        font-size: 22px;
        text-align: center;
        color: #fff;
        text-transform: uppercase;
        line-height: 1.35;
    }

    div.cookie-popup .form-order .content{
        background-color: #323437;
    }

    div.cookie-popup p {
        text-align: right;
        font-size: 12px;
        margin-top: 20px;
        padding-top: 5px;
    }

    div.cookie-popup h6 a {
        color: #888;
        text-decoration: none;
    }

    div.cookie-popup h6 {
        border-top: 1px solid #DDDDDD;
        text-align: right;
        font-size: 12px;
        margin-top: 20px;
        padding-top: 10px;
    }

    div.cookie-popup h6 a {
        color: #888;
        text-decoration: none;
    }

    div.cookie-popup input {
        width: 100%;
        height: 35px;
        margin: 7px auto;
        text-indent: 5px;
        font-size: 15px;
        line-height: 35px;
        font-family: "RobotoRegular", sans-serif;
        color: #8b8b8b;
        background-color: #ffffff;
        border: none;
        outline: none;
        display: block;
    }

    div.cookie-popup label {
        color: #fff;
        font-size: 17px;
        font-weight: normal;
        margin-bottom: unset;
    }

    div.cookie-popup .js_submit {
        text-align: center;
        color: #fff;
        font-size: 22px;
        margin-top: 5px;
        width: 100%;
        text-transform: uppercase;
        background: linear-gradient(to top,#b80630,#b80630);
    }

    div.cookie-popup .text-popup {
        display: block;
        width: 240px;
        margin: 15px auto;
        padding: 10px;
    }

    div.cookie-popup-wrap .cookie-popup .form-order .content {
        padding: 0;
        border: none;
    }

    </style>
    <!-- End.cookie-popup-wrap -->
  <!-- Connect -->
<script type="text/javascript">
  var clock;
  clock = $('#coutdown').FlipClock({
      clockFace: 'DailyCounter',
      autoStart: false,
      showSeconds: false,
      language: 'vi-vi',
  });      
  clock.setTime(160650);
  clock.setCountdown(true);
  clock.start();
  function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));

      return {
        'total': t,
        'days': days < 10 ? '0'+days : ''+days ,
        'hours': hours < 10 ? '0'+hours : ''+hours ,
        'minutes': minutes < 10 ? '0'+minutes : ''+minutes,
        'seconds': seconds < 10 ? '0'+seconds : ''+seconds,
      };
    }

    function initializeClock(id, endtime) {
      var clock = document.getElementById(id);
      var daysSpan = clock.querySelector('.day');
      var hoursSpan = clock.querySelector('.hour');
      var minutesSpan = clock.querySelector('.min');
      // var secondsSpan = clock.querySelector('.timer__seconds');

      function updateClock() {
        var t = getTimeRemaining(endtime) 
        daysSpan.innerHTML = `<span>${t.days.slice(0,1)}</span><span>${t.days.slice(1,2)}</span><sub>Ngày</sub>`;
        hoursSpan.innerHTML = `<span>${t.hours.slice(0,1)}</span><span>${t.hours.slice(1,2)}</span><sub>Giờ</sub>`;
        minutesSpan.innerHTML =  ` <span>${t.minutes.slice(0,1)}</span><span>${t.minutes.slice(1,2)}</span><sub>phút</sub>`;
        // console.log(t.seconds)
        if (t.total <= 0) {
          clearInterval(timeinterval);
        }
      }
      
      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    }
     var deadline = new Date(Date.parse(new Date()) +  160650 * 1000);
    initializeClock('timer', deadline);
    wow = new WOW().init()
</script>
<!-- Data scroll -->
    <script>
        $(function() {
            $('[data-scroll]').click(function() {
                var target = $(this).data('scroll');
                $('html,body').animate({
                    scrollTop: $(target).offset().top
                }, 700);
                return false;
            });
        });
    </script>
</script>
  <!-- Connect -->
    <script type="text/javascript" src="https://d2uk0m3iwj5j1z.cloudfront.net/epage-1.9.3.js"></script>
    <script type="text/javascript">
        Epage.init({
            offer_id: 'tengsu-vn',
            hint_phone: '0164567890',
            hint_name: 'Lê Ngọc Minh',
            popup_time: 45000
        });
    </script>

    <!-- Data scroll -->
    <script>
        $(function() {
            $('[data-scroll]').click(function() {
                var target = $(this).data('scroll');
                $('html,body').animate({
                    scrollTop: $(target).offset().top
                }, 700);
                return false;
            });
        });
    </script>
    <!-- Fb Pixel -->
    <?php
        $fbPixel = htmlspecialchars(@$_GET['fb_pixel_id'], ENT_QUOTES, 'utf-8');
        if (isset($fbPixel) && $fbPixel !== '') {
        echo "<script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '$fbPixel');
        fbq('track', \"PageView\");
        </script>
        <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
        src=\"https://www.facebook.com/tr?id=$fbPixel&ev=PageView&noscript=1\"
        /></noscript>";
        }
    ?>
  <!-- Facebook Pixel Code -->
<script src="./assets/js/fbp.js"></script>
<!-- End Facebook Pixel Code -->
</body>
</html>
