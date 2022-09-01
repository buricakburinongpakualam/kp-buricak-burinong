
<div class="site-footer" id="kontak">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h4 class="text-white">Kontak</h4>
            <address>Dsn. Cisema, Pakualam, Kec. Darmaraja, Kabupaten Sumedang, Jawa Barat 45372</address>
            <ul class="list-unstyled links">
              <li>
                <a href="mailto:buricakburinongpakualam@gmail.com">buricakburinongpakualam@gmail.com</a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <div class="col-8">
          <div class="ratio ratio-21x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.156842780215!2d108.06724321451743!3d-6.871802769145171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2d204bac8977%3A0xc834e02642833be!2sKampung%20Buricak%20Burinong!5e0!3m2!1sid!2sid!4v1661925977454!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-12 text-center">

          <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            . &mdash; Dibuat Oleh Informatic19

          </p>
          <div>
            Disalurkan oleh
            <a href="https://themewagon.com/" target="_blank">FT YPKP</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.site-footer -->


<script>
  (function(){

'use strict'


var siteMenuClone = function() {
  var jsCloneNavs = document.querySelectorAll('.js-clone-nav');
  var siteMobileMenuBody = document.querySelector('.site-mobile-menu-body');
  


  jsCloneNavs.forEach(nav => {
    var navCloned = nav.cloneNode(true);
    navCloned.setAttribute('class', 'site-nav-wrap');
    siteMobileMenuBody.appendChild(navCloned);
  });

  setTimeout(function(){

    var hasChildrens = document.querySelector('.site-mobile-menu').querySelectorAll(' .has-children');

    var counter = 0;
    hasChildrens.forEach( hasChild => {
      
      var refEl = hasChild.querySelector('a');

      var newElSpan = document.createElement('span');
      newElSpan.setAttribute('class', 'arrow-collapse collapsed');

      // prepend equivalent to jquery
      hasChild.insertBefore(newElSpan, refEl);

      var arrowCollapse = hasChild.querySelector('.arrow-collapse');
      arrowCollapse.setAttribute('data-bs-toggle', 'collapse');
      arrowCollapse.setAttribute('data-bs-target', '#collapseItem' + counter);

      var dropdown = hasChild.querySelector('.dropdown');
      dropdown.setAttribute('class', 'collapse');
      dropdown.setAttribute('id', 'collapseItem' + counter);

      counter++;
    });

  }, 1000);


  // Click js-menu-toggle

  var menuToggle = document.querySelectorAll(".js-menu-toggle");
  var mTog;
  menuToggle.forEach(mtoggle => {
    mTog = mtoggle;
    mtoggle.addEventListener("click", (e) => {
      if ( document.body.classList.contains('offcanvas-menu') ) {
        document.body.classList.remove('offcanvas-menu');
        mtoggle.classList.remove('active');
        mTog.classList.remove('active');
      } else {
        document.body.classList.add('offcanvas-menu');
        mtoggle.classList.add('active');
        mTog.classList.add('active');
      }
    });
  })



  var specifiedElement = document.querySelector(".site-mobile-menu");
  var mt, mtoggleTemp;
  document.addEventListener('click', function(event) {
    var isClickInside = specifiedElement.contains(event.target);
    menuToggle.forEach(mtoggle => {
      mtoggleTemp = mtoggle
      mt = mtoggle.contains(event.target);
    })

    if (!isClickInside && !mt) {
      if ( document.body.classList.contains('offcanvas-menu') ) {
        document.body.classList.remove('offcanvas-menu');
        mtoggleTemp.classList.remove('active');
      }
    }

  });

}; 
siteMenuClone();


})()
</script>