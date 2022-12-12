  <footer data-background-color="black">
    <div class="container">
      <div class="pt-4 row">
        <div class="footer-left-col col-md-4"><a href="https://satasenmuutto.fi/" target="_blank" rel="noreferrer">
          <p class="footer-big-font">Satasenmuutto.fi</p>
          </a><br>
          <p class="footer-medium-font">Tammasaarenlaituri 3</p>
          <p class="footer-medium-font">00180 Helsinki</p>
          <p class="footer-medium-font">asiakaspalvelu@satasenmuutto.fi</p>
        </div>
        <?php
            if(function_exists('the_custom_logo')){
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custom_logo_id);
            }
          ?>
        <div class="col-md-4"><img src="<?php echo $logo[0] ?>" style="height: 2rem; width: 2rem; box-shadow: none;" alt="..."></div>
        <div class="footer-right-col col-md-4">
          <p class="footer-big-font">Navigointi</p><br><a href="https://satasenmuutto.fi/">
              <p class="footer-medium-font">Etusivu</p>
          </a><a href="/muuttofirmoille">
              <p class="footer-medium-font">Muuttofirmoille</p>
          </a>
          <p class="footer-medium-font" style="cursor: pointer;">Kirjaudu</p>
        </div>
      </div>
      <div class="mt-4 row">
        <div class="footer-left-col col-md-4"><a href="/kayttoehdot" target="_blank" rel="noreferrer"
                tag="[object Object]">
                <p class="footer-medium-font">Käyttöehdot</p>
            </a></div>
        <div class="footer-copyright col-md-4">
            <div><?php echo date('Y'); ?> &copy <?php bloginfo('name'); ?></div>
        </div>
        <div class="footer-right-social-col col-md-4"><a href="https://www.facebook.com/satasenmuutto"
                target="_blank" rel="noreferrer" class="btn-icon btn-round btn btn-facebook"><i
                    class="fab fa-facebook"></i></a><a href="https://www.linkedin.com/company/satasenmuutto-fi"
                target="_blank" rel="noreferrer" class="btn-icon btn-round btn btn-linkedin"><i
                    class="fab fa-linkedin"></i></a><a href="https://www.instagram.com/satasenmuutto/"
                target="_blank" rel="noreferrer" class="btn-icon btn-round btn btn-instagram"><i
                    class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="/__/firebase/8.6.2/firebase-app.js"></script>
  <script src="/__/firebase/8.6.2/firebase-analytics.js"></script>
  <script src="/__/firebase/init.js"></script>
  <script>!function (e) { function r(r) { for (var n, i, l = r[0], a = r[1], p = r[2], c = 0, s = []; c < l.length; c++)i = l[c], Object.prototype.hasOwnProperty.call(o, i) && o[i] && s.push(o[i][0]), o[i] = 0; for (n in a) Object.prototype.hasOwnProperty.call(a, n) && (e[n] = a[n]); for (f && f(r); s.length;)s.shift()(); return u.push.apply(u, p || []), t() } function t() { for (var e, r = 0; r < u.length; r++) { for (var t = u[r], n = !0, l = 1; l < t.length; l++) { var a = t[l]; 0 !== o[a] && (n = !1) } n && (u.splice(r--, 1), e = i(i.s = t[0])) } return e } var n = {}, o = { 1: 0 }, u = []; function i(r) { if (n[r]) return n[r].exports; var t = n[r] = { i: r, l: !1, exports: {} }; return e[r].call(t.exports, t, t.exports, i), t.l = !0, t.exports } i.m = e, i.c = n, i.d = function (e, r, t) { i.o(e, r) || Object.defineProperty(e, r, { enumerable: !0, get: t }) }, i.r = function (e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, i.t = function (e, r) { if (1 & r && (e = i(e)), 8 & r) return e; if (4 & r && "object" == typeof e && e && e.__esModule) return e; var t = Object.create(null); if (i.r(t), Object.defineProperty(t, "default", { enumerable: !0, value: e }), 2 & r && "string" != typeof e) for (var n in e) i.d(t, n, function (r) { return e[r] }.bind(null, n)); return t }, i.n = function (e) { var r = e && e.__esModule ? function () { return e.default } : function () { return e }; return i.d(r, "a", r), r }, i.o = function (e, r) { return Object.prototype.hasOwnProperty.call(e, r) }, i.p = "/"; var l = this["webpackJsonpnow-ui-kit-pro-react"] = this["webpackJsonpnow-ui-kit-pro-react"] || [], a = l.push.bind(l); l.push = r, l = l.slice(); for (var p = 0; p < l.length; p++)r(l[p]); var f = a; t() }([])
  </script>

  <?php
    wp_footer();
  ?>
</body>
</html>