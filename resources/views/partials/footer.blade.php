<footer class="footer">
    <div class="footer__container-top container">
        <div class="footer__menu">
            <ul class="footer__list">
                <li>
                    <h3>dc comics</h3>
                </li>
                @foreach ($headerMenu as $item)
                    <li>
                        <a href="">{{ $item['text'] }}</a>
                    </li> 
                @endforeach  
            </ul>
            <ul class="footer__list">
                <li>
                    <h3>dc</h3>
                </li>
                @foreach ($footerMenu as $item)
                    <li>
                        <a href="">{{ $item['text'] }}</a>
                    </li> 
                @endforeach 
            </ul>
            <ul class="footer__list">
                <li>
                    <h3>sites</h3>
                </li>
                @foreach ($footerSecondMenu as $item)
                    <li>
                        <a href="">{{ $item['text'] }}</a>
                    </li>
                @endforeach
            </ul>
            <ul class="footer__list">
                <li>
                    <h3>shop</h3>
                </li>
                <li>
                    <a href="">Shop DC</a>
                </li>
                <li>
                    <a href="">Shop DC Collectibles</a>
                </li>
            </ul>
        </div>
        <div class="footer__logo">
            <img src="{{ asset('images/dc-logo-bg.png') }}" alt="">
        </div>
    </div>
    <div class="footer__container-bottom container">
      <div class="footer__button">
          <a href="">sign-up now!</a>
      </div>
      <div class="footer__social">
          <span>follow us</span>
          <img src="{{ asset('images/footer-facebook.png') }}" alt="">
            <img src="{{ asset('images/footer-twitter.png') }}" alt="">
            <img src="{{ asset('images/footer-youtube.png') }}" alt="">
            <img src="{{ asset('images/footer-pinterest.png') }}" alt="">
            <img src="{{ asset('images/footer-periscope.png') }}" alt="">
      </div>
  </div>
</footer>
