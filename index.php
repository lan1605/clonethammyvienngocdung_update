<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>️️🎊LÀM ĐẸP MÙA LỄ HỘI - BỘI THU TRIỆU DEAL HỜI</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="shortcut icon"
      href="./images/logo-favicon.jpg"
      type="image/x-icon"
    />
  </head>
  <body>
    <?php
      require "./handle/logic.php";  
    ?>
    <div class="wrapper">
      <div class="container">
        <div class="content">
          <!-- Banner -->
          <div class="banner-header">
            <img src="./images/banner-uu-dai-sol.jpg" alt="" />
          </div>
          <!-- Form đăng ký -->
          <form action="index.php" class="form" method="post" id="dang_ky">
            <div class="form-signup">
              <div class="form-content">
                <div class="title-form">Đăng ký nhận ưu đãi tại đây</div>
                <div class="form-item name">
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="input-form"
                  placeholder="*Tên của chị là gì?"
                  required
                />
                </div>
                <div class="form-item phone">
                <input
                  type="text"
                  name="phone"
                  id="phone"
                  class="input-form"
                  placeholder="*Số điện thoại"
                  required
                />
                <span class="noti" id="phone"></span>
                </div>
                <div class="form-item email">
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="input-form"
                  placeholder="*Địa chỉ email"
                  required
                />
                <span class="noti" id="email"></span>
                </div>
                <select
                  name="chi-nhanh"
                  id="chi-nhanh"
                  class="select-form"
                  required
                >
                  <option value="" class="option-form--hidden">
                    Chị chọn chi nhánh gần nhất ở đây ạ.
                  </option>
                  <option
                    class="option-form"
                    value="Trụ sở chính : 33 Nguyễn Bỉnh Khiêm, Đa Kao, Quận 1"
                  >
                    Trụ sở chính : 33 Nguyễn Bỉnh Khiêm, Đa Kao, Quận 1
                  </option>
                  <option
                    class="option-form"
                    value="HCM 1: 32-34-36 Đường 3/2, Phường 12, Quận 10, Hồ Chí Minh"
                  >
                    HCM 1: 32-34-36 Đường 3/2, Phường 12, Quận 10, Hồ Chí Minh
                  </option>
                  <option
                    class="option-form"
                    value="HCM 2: 185-187 Nguyễn Thái Học Phường Phạm Ngũ Lão, Quận 1"
                  >
                    HCM 2: 185-187 Nguyễn Thái Học Phường Phạm Ngũ Lão, Quận 1
                  </option>
                  <option
                    class="option-form"
                    value="HCM 3: 392A Nguyễn Thị Thập, Phường Tân Quy, Quận 7"
                  >
                    HCM 3: 392A Nguyễn Thị Thập, Phường Tân Quy, Quận 7
                  </option>
                  <option
                    class="option-form"
                    value="Hà Nội 1: 106 Phố Huế, Phường Ngô Thì Nhậm, Quận Hai Bà Trưng"
                  >
                    Hà Nội 1: 106 Phố Huế, Phường Ngô Thì Nhậm, Quận Hai Bà
                    Trưng
                  </option>
                  <option
                    class="option-form"
                    value="Hà Nội 2: 65 Trần Duy Hưng, Phường Trung Hòa, Quận Cầu Giấy"
                  >
                    Hà Nội 2: 65 Trần Duy Hưng, Phường Trung Hòa, Quận Cầu Giấy
                  </option>
                  <option
                    class="option-form"
                    value="Hà Nội 3: 8 Khúc Thừa Dụ, Phường Dịch Vọng, Quận Cầu Giấy"
                  >
                    Hà Nội 3: 8 Khúc Thừa Dụ, Phường Dịch Vọng, Quận Cầu Giấy
                  </option>
                  <option
                    class="option-form"
                    value="Hải Phòng: Số 2, Lô 7B, Đường Lê Hồng Phong, Quận Ngô Quyền"
                  >
                    Hải Phòng: Số 2, Lô 7B, Đường Lê Hồng Phong, Quận Ngô Quyền
                  </option>
                  <option
                    class="option-form"
                    value="Quảng Ninh: Lô A1, 15-16 Khu Monbay, Trần Quốc Nghiễn, Thành phố Hạ Long"
                  >
                    Quảng Ninh: Lô A1, 15-16 Khu Monbay, Trần Quốc Nghiễn, Thành
                    phố Hạ Long
                  </option>
                  <option
                    class="option-form"
                    value="Bình Dương: 464 Đại Lộ Bình Dương, Thành phố Thủ Dầu Một"
                  >
                    Bình Dương: 464 Đại Lộ Bình Dương, Thành phố Thủ Dầu Một
                  </option>
                  <option
                    class="option-form"
                    value="Biên Hòa: 220 Đường 30/4, Phường Thanh Bình, Thành phố Biên Hòa"
                  >
                    Biên Hòa: 220 Đường 30/4, Phường Thanh Bình, Thành phố Biên
                    Hòa
                  </option>
                  <option
                    class="option-form"
                    value="Vũng Tàu: 157 Nam Kỳ Khỏi Nghĩa, Phường 3, Thành phố Vũng Tàu"
                  >
                    Vũng Tàu: 157 Nam Kỳ Khỏi Nghĩa, Phường 3, Thành phố Vũng
                    Tàu
                  </option>
                  <option
                    class="option-form"
                    value="Cần Thơ: 234B Trần Hưng Đạo,Phường An Nghiệp, Quận Ninh Kiều"
                  >
                    Cần Thơ: 234B Trần Hưng Đạo,Phường An Nghiệp, Quận Ninh Kiều
                  </option>
                  <option
                    class="option-form"
                    value="Vinh: Số 2 Trần Phú, Phường Hồng Sơn, Thành phố Vinh"
                  >
                    Vinh: Số 2 Trần Phú, Phường Hồng Sơn, Thành phố Vinh
                  </option>
                  <option
                    class="option-form"
                    value="Đà Nẵng: 95 Nguyễn Văn Linh, Phường Nam Dương, Quận Hải Châu"
                  >
                    Đà Nẵng: 95 Nguyễn Văn Linh, Phường Nam Dương, Quận Hải Châu
                  </option>
                  <option
                    class="option-form"
                    value="Nha Trang: 78 Lý Thánh Tôn, Phường Phương Sài, Tp. Nha Trang"
                  >
                    Nha Trang: 78 Lý Thánh Tôn, Phường Phương Sài, Tp. Nha Trang
                  </option>
                  <option
                    class="option-form"
                    value="Buôn Ma Thuột: 2-4 Ngô Quyền, Phường Thắng Lợi, Thành phố Buôn Ma Thuột"
                  >
                    Buôn Ma Thuột: 2-4 Ngô Quyền, Phường Thắng Lợi, Thành phố
                    Buôn Ma Thuột
                  </option>
                  <option
                    class="option-form"
                    value="Phan Thiết: 154 Trần Hưng Đạo, Phường Phú Thủy, Thành phố Phan Thiết"
                  >
                    Phan Thiết: 154 Trần Hưng Đạo, Phường Phú Thủy, Thành phố
                    Phan Thiết
                  </option>
                </select>
                <select
                  name="dich-vu"
                  id="dich-vu"
                  class="select-form"
                  required
                >
                  <option class="option-form--hidden" value="">
                    Chọn dịch vụ yêu thích
                  </option>
                  <option
                    class="option-form"
                    value="1. Vàng trẻ hoá tái tạo da Bio Gold 24k"
                  >
                    1. Vàng trẻ hoá tái tạo da Bio Gold 24k
                  </option>
                  <option
                    class="option-form"
                    value="2. Ủ trắng mặt tinh chất hoa anh đào Skin White"
                  >
                    2. Ủ trắng mặt tinh chất hoa anh đào Skin White
                  </option>
                  <option
                    class="option-form"
                    value="3. Giảm mỡ thần tốc công nghệ từ Mỹ"
                  >
                    3. Giảm mỡ thần tốc công nghệ từ Mỹ
                  </option>
                  <option
                    class="option-form"
                    value="4. Căng trắng da phương pháp điện di tế bào gốc"
                  >
                    4. Căng trắng da phương pháp điện di tế bào gốc
                  </option>
                  <option
                    class="option-form"
                    value="5. Xóa nám tận gốc chỉ sau 1 liệu trình"
                  >
                    5. Xóa nám tận gốc chỉ sau 1 liệu trình
                  </option>
                  <option
                    class="option-form"
                    value="6. Loại bỏ sẹo rỗ mọi cấp độ"
                  >
                    6. Loại bỏ sẹo rỗ mọi cấp độ
                  </option>
                  <option
                    class="option-form"
                    value="7. Triệt sạch vi-ô-lông mọi vùng cơ thể"
                  >
                    7. Triệt sạch vi-ô-lông mọi vùng cơ thể
                  </option>
                  <option
                    class="option-form"
                    value="8. Đánh bay thâm quầng mắt/ Thâm mông/ Thâm mô"
                  >
                    8. Đánh bay thâm quầng mắt/ Thâm mông/ Thâm mô
                  </option>
                </select>
                <div class="checkbox-form">
                  <div class="checkbox-form--title">
                    *Bên em có thể gọi tư vấn cho chị vào giờ nào ạ?
                  </div>
                  <div class="checkbox">
                    <div class="checkbox-item">
                      <input type="checkbox" name="time[]" id="" value="8h-10h" />
                      <span>8h-10h</span>
                    </div>
                    <div class="checkbox-item">
                      <input type="checkbox" name="time[]" id="" value="10h-12h" />
                      <span>10h-12h</span>
                    </div>
                    <div class="checkbox-item">
                      <input type="checkbox" name="time[]" id="" value="12h-14h" />
                      <span>12h-14h</span>
                    </div>
                    <div class="checkbox-item">
                      <input type="checkbox" name="time[]" id="" value="14h-16h" />
                      <span>14h-16h</span>
                    </div>
                    <div class="checkbox-item">
                      <input type="checkbox" name="time[]" id="" value="Giờ khác" />
                      <span>Giờ khác</span>
                    </div>
                  </div>
                </div>
                <?php if (isset($_SESSION['mess'])) :?>
                  <div class="mess-signup">
                    <?php  echo $_SESSION['mess'] ?>
                  </div>
                  <??>
                <?php else :?>

                <?php endif?>
              </div>

            </div>
            <button type="submit"  name="submitform" class="btn-signup">
              <span class="btn">Đăng ký ngay</span>
            </button>
          </form>
          <!-- Countdown -->
          <div class="time-countdown">
            <div class="time-countdown--content">
              <div class="time day">
                <div class="number">00</div>
                <span class="text">Ngày</span>
              </div>
              <div class="time hour">
                <div class="number">00</div>
                <span class="text">Giờ</span>
              </div>
              <div class="time minute">
                <div class="number">00</div>
                <span class="text">Phút</span>
              </div>
              <div class="time second">
                <div class="number">00</div>
                <span class="text">Giây</span>
              </div>
            </div>
          </div>
          <!-- Bình luận -->
          <div class="comment">
            <div class="comment-header">
              <p class="comment-title">Bình luận</p>
              <p class="comment-total">176 bình luận</p>
            </div>
            <div class="comment-content">
              <div class="comment-item">
                <div class="comment-avatar">
                  <img src="./images/thanh-huyen.jpg" alt="" />
                </div>
                <div class="comment-info">
                  <div class="comment-name">Thanh huyền</div>
                  <div class="comment-context">
                    Mình đã đăng ký dịch vụ thâm quầng mắt, 1 liệu trình thấy rõ
                    hiệu quả nhưng Ngọc Dung sale hoài làm mình canh sale làm
                    đẹp mệt nghỉ, sơ hở tí là sale hà!!!
                  </div>
                  <div class="comment-feedback">
                    <div class="comment-feedback--text">
                      Phản hồi -
                      <span class="comment-feedback--time">20 giờ trước</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comment-item">
                <div class="comment-avatar">
                  <img src="./images/le-thi-sinh.jpg" alt="" />
                </div>
                <div class="comment-info">
                  <div class="comment-name">Lê Thị Sinh</div>
                  <div class="comment-context">
                    Triệt lông ở Ngọc Dung rất oke nha, gel lạnh mát đi laser
                    nhẹ nhàng không không đau chút nào luôn, nhân viên làm tỉ mỉ
                    vô cùng cứ hỏi mình cảm thấy thế nào luôn
                  </div>
                  <div class="comment-rated">★★★★★</div>
                  <div class="comment-options">
                    <div class="comment-options--item">
                      <a href="#" class="comment-options--link">Thích</a>
                      <span> - </span>
                      <a href="#" class="comment-options--link">Phản hồi</a>
                    </div>
                    <div class="comment-options--other">
                      <div class="comment-options--like">
                        <img src="./images/ic-like.png" alt="" />
                        <span>6</span>
                      </div>
                      <div class="comment-options--time">1 ngày trước</div>
                    </div>
                  </div>
                  <div class="comment-feedback">
                    <div class="comment-feedback--text">
                      Phản hồi -
                      <span class="comment-feedback--time">2 phút trước</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comment-item">
                <div class="comment-avatar">
                  <img src="./images/tra-my.jpg" alt="" />
                </div>
                <div class="comment-info">
                  <div class="comment-name">Trà My</div>
                  <div class="comment-context">
                    Trị sẹo rỗ rất tốn kém với tốn thời gian, mà quan trọng là
                    tìm được chỗ uy tín nữa. Hên là có Ngọc Dung nha!!!
                  </div>
                  <div class="comment-rated">★★★★★</div>
                  <div class="comment-options">
                    <div class="comment-options--item">
                      <a href="#" class="comment-options--link">Thích</a>
                      <span> - </span>
                      <a href="#" class="comment-options--link">Phản hồi</a>
                    </div>
                    <div class="comment-options--other">
                      <div class="comment-options--like">
                        <img src="./images/ic-like.png" alt="" />
                        <span>2</span>
                      </div>
                      <div class="comment-options--time">1 ngày trước</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dot-loading">
                <div class="dot-content">
                  <div class="dot"></div>
                </div>
              </div>
              <a href="#dang_ky" class="button-signup"> Đăng ký ngay </a>
            </div>
          </div>
          <div class="banner-footer">
            <img src="./images/thong-tin-lien-lac.png" alt="" />
          </div>
          <a href="#dang_ky" class="btn-offer"> NHẬN ƯU ĐÃI</a>
        </div>
        <div class="contact">
          <img src="./images/ic-chat.svg" alt="" class="btn-open block" />
          <img src="./images/close.png" alt="" class="btn-close none" />
        </div>
        <div class="contact-container">
          <div class="contact-header">
            <div class="contact-title">
              <div class="contact-logo">
                <img src="./images/ic-ladichat.svg" alt="logo" />
                <span>Xin chào 👋</span>
              </div>
              <div class="contact-close">x</div>
            </div>
            <div class="contact-desc">
              Chúng tôi rất vui lòng được hỗ trợ bạn. Vui lòng đặt câu hỏi ở
              dưới
            </div>
          </div>
          <div class="contact-content">
            <div class="contact-item chat">
              <div class="chat-title">Chat với chúng tôi</div>
              <div class="chat-desc">
                Hỗ trợ viên đang trực tuyến sẵn sàng hỗ trợ
              </div>
              <div class="chat-action">
                <div class="chat-name">Tg</div>
                <div class="chat-btn">
                  <img src="./images/send.png" alt="" />
                  <span>Bắt đầu chat</span>
                </div>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item--title">
                Liên hệ qua kênh yêu thích của bạn
              </div>
              <div class="contact-item--list">
                <a href="#" class="contact-item--social">
                  <div class="contact-item--info">
                    <img src="./images/phone.svg" alt="" />
                    <span>Phone</span>
                  </div>
                  <img src="./images/right-arrow.png" alt="" class="ic-right" />
                </a>
                <a href="#" class="contact-item--social">
                  <div class="contact-item--info">
                    <img src="./images/zalo.svg" alt="" />
                    <span>Zalo</span>
                  </div>
                  <img src="./images/right-arrow.png" alt="" class="ic-right" />
                </a>
                <a href="#" class="contact-item--social">
                  <div class="contact-item--info">
                    <img src="./images/fb.svg" alt="" />
                    <span>Facebook Page</span>
                  </div>
                  <img src="./images/right-arrow.png" alt="" class="ic-right" />
                </a>
                <a href="#" class="contact-item--social">
                  <div class="contact-item--info">
                    <img src="./images/message.svg" alt="" />
                    <span>Message</span>
                  </div>
                  <img src="./images/right-arrow.png" alt="" class="ic-right" />
                </a>
              </div>
            </div>
          </div>
          <div class="chat-content">
            <div class="chat-close">x</div>
            <div class="chat-context">
              <div class="chat-name">Tg</div>
              <form class="chat-form">
                <div class="chat-item">
                  <label class="chat-label">Họ Tên</label>
                  <input
                    type="text"
                    name=""
                    id=""
                    placeholder="Họ Tên"
                    class="chat-input"
                    required
                  />
                </div>
                <div class="chat-item">
                  <label class="chat-label">Số điện thoại</label>
                  <input
                    type="text"
                    name=""
                    id=""
                    placeholder="Số điện thoại"
                    class="chat-input"
                    readonly
                  />
                </div>
                <button type="submit" class="chat-form--btn">
                  Bắt đầu trò chuyện
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./main.js"></script>
    <script src="./sendEmail.js"></script>
  </body>
</html>

