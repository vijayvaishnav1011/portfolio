     
        </div>
      </div>
    </div>
  </div>
</section>


<footer class="site-footer text-center small">
  © <?php echo date('Y'); ?> Vijay Vaishnav
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const scroller = document.getElementById('contentScroll');
  const OFFSET = 120; 

  document.querySelectorAll('#topMenu a.nav-link[href^="#"]').forEach(a => {
    a.addEventListener('click', function (e) {
      const id = this.getAttribute('href');
      const target = document.querySelector(id);
      if (!target) return; 
      e.preventDefault();
      const y = target.offsetTop - OFFSET;
      scroller.scrollTo({ top: y, behavior: 'smooth' });

      document.querySelectorAll('#topMenu .nav-link').forEach(x => x.classList.remove('active'));
      this.classList.add('active');
      history.replaceState(null, '', id); 
    });
  });

  const ss = new bootstrap.ScrollSpy(scroller, { target: '#topMenu' });
  setTimeout(()=>{ ss.refresh?.(); }, 400);
});
</script>

</body>
</html>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const menu = document.getElementById('mobileTopMenu');
  const offcanvasEl = document.getElementById('mobileMenu');
  let hash = null;

  const mobOffset = () => {
    const v = getComputedStyle(document.documentElement).getPropertyValue('--mobile-topbar-h');
    const n = parseInt(v, 10);
    return isNaN(n) ? 56 : n;
  };

  function smoothScrollTo(el) {

    el.scrollIntoView({ behavior: 'smooth', block: 'start' });

    setTimeout(() => {
      const y = el.getBoundingClientRect().top + window.pageYOffset - mobOffset();
      window.scrollTo({ top: y, behavior: 'smooth' });
    }, 0);
  }

  if (menu) {
    menu.addEventListener('click', function (e) {
      if (window.innerWidth > 991) return; 
      const a = e.target.closest('a[href^="#"]');
      if (!a) return;
      const tgt = document.querySelector(a.getAttribute('href'));
      if (!tgt) return;

      e.preventDefault();     
      hash = a.getAttribute('href');

      if (offcanvasEl && window.bootstrap?.Offcanvas && offcanvasEl.classList.contains('show')) {
        const off = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);
        const onHidden = () => {
          offcanvasEl.removeEventListener('hidden.bs.offcanvas', onHidden);
          smoothScrollTo(tgt);
          history.replaceState(null, '', hash);
          hash = null;
        };
        offcanvasEl.addEventListener('hidden.bs.offcanvas', onHidden);
        off.hide();
      } else {
        smoothScrollTo(tgt);
        history.replaceState(null, '', hash);
        hash = null;
      }
    });
  }
});
</script>
<script>
(function () {
  const pre = document.getElementById('preloader');
  const scroller = document.getElementById('contentScroll');

  function isMobile(){ return window.innerWidth <= 991; }

  function cssVar(name, fallback){
    const v = getComputedStyle(document.documentElement).getPropertyValue(name);
    const n = parseInt(v, 10);
    return isNaN(n) ? fallback : n;
  }
  function topOffset(){
    return isMobile()
      ? cssVar('--mobile-topbar-h', 56)
      : cssVar('--sticky-h', 84);
  }

  function scrollToHash(hash){
    const el = document.querySelector(hash);
    if (!el) return;

    if (isMobile() || !scroller) {

      const y = el.getBoundingClientRect().top + window.pageYOffset - topOffset();
      window.scrollTo({ top: y, behavior: 'smooth' });
    } else {

      const rect = el.getBoundingClientRect();
      const sRect = scroller.getBoundingClientRect();
      const current = scroller.scrollTop;
      const y = (rect.top - sRect.top) + current - topOffset();
      scroller.scrollTo({ top: y, behavior: 'smooth' });
    }

    history.replaceState(null, '', hash);
  }

  window.addEventListener('load', function () {

    if (location.hash) {

      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          setTimeout(() => scrollToHash(location.hash), 60);
        });
      });
    }

    if (pre) pre.classList.add('hidden');
  });
})();
</script>