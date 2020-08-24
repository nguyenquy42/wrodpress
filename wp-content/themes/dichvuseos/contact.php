<?php
/*
 Template Name: Contact
 */

 ?>

<?php get_header(); ?>
 
  <!-- main-content Area Start -->
  <main id="main-content">
    <!-- Banner Area Start -->
    <section id="common-banner" class="contact-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="common-text-banner">
              <h2>Hãy cho chúng tôi biết bạn đang nghĩ gì</h2>
              <p>Chúng tôi rất mong nhận được hồi âm từ bạn!</p>
              <a href="#!" class="btn btn-theme">Cầu tư vấn miễn phí</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner Area End -->

    <!-- Conatct-Content Area Start -->
    <section id="contact-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="contact-top-area text-center">
              <h2>Tại Lptech, chúng tôi đã giúp khách hàng dễ dàng liên hệ với chúng tôi và nhận giải pháp của họ</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-12">
            <div class="customer-service">
              <div class="customer-suport-box">
                <div class="customer-heading">
                  <h3>Trung tâm tư vấn:</h3>
                </div>
                <div class="wrapper-customer">
                  <div class="customer-icon">
                    <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/customer-service.svg" alt="img">
                  </div>
                  <div class="customer-link">
                    <a href="tel:0963 400 885">0963 400 885</a>
                  </div>
                </div>
              </div>
              <div class="customer-suport-box">
                <div class="customer-heading">
                  <h3>Skype:</h3>
                </div>
                <div class="wrapper-customer">
                  <div class="customer-icon">
                    <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/skype.svg" alt="img">
                  </div>
                  <div class="customer-link">
                    <a href="skype:lptech?call">lptech</a>
                  </div>
                </div>
              </div>
              <div class="customer-suport-box">
                <div class="customer-heading">
                  <h3>Gửi Email:</h3>
                </div>
                <div class="wrapper-customer">
                  <div class="customer-icon">
                    <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/email.svg" alt="img">
                  </div>
                  <div class="customer-link">
                    <a href="mailto:ceo@levanphu.info">ceo@levanphu.info</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="main-contact-from">
              <div class="error-form">
                <h3>NHẬN BÁO GIÁ / LIÊN HỆ VỚI CHUYÊN GIA CỦA CHÚNG TÔI</h3>
                <form action="#!" id="error-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email Address" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone Number" required="">
                  </div>
                  <div class="form-group">
                    <textarea rows="4" class="form-control" placeholder="Your Message" required=""></textarea>
                  </div>
                  <div class="button-error">
                    <button type="submit" class="btn btn-theme"> Gữi </button>
                  </div>
                </form>
              </div>
              <div class="contact-form-bottm">
                <p>Chúng tôi đảm bảo bảo mật 100% thông tin của bạn</p>
                <p>Chúng tôi sẽ không chia sẻ chi tiết bạn cung cấp ở trên với bất kỳ ai. Email của bạn sẽ không được sử dụng để gửi thư rác.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="map-location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6783.713285851115!2d106.70010606817333!3d10.827319587453639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc291fc9fb44ef214!2zQ8O0bmcgdHkgVGhp4bq_dCBr4bq_IHdlYnNpdGUgdsOgIFNFTyBjaHV5w6puIG5naGnhu4dwIExQIFRlY2g!5e0!3m2!1svi!2s!4v1598255423107!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Conatct-Content Area End -->

  </main>
  <!-- main-content Area End -->
 
 <?php get_footer(); ?>