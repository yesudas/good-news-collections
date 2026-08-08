if ('serviceWorker' in navigator) {
  navigator.serviceWorker
    .register('/good-news-collections/sw.js')
    .then(() => console.log('Service Worker Registered'))
    .catch((err) => console.log('Service Worker Failed:', err));
}

document.addEventListener('DOMContentLoaded', () => {
  const installAppBtn = document.getElementById('installAppBtn');
  const navToggle = document.querySelector('[data-nav-toggle]');
  const siteNav = document.querySelector('[data-site-nav]');
  let deferredPrompt;

  if (navToggle && siteNav) {
    navToggle.addEventListener('click', () => {
      const open = siteNav.classList.toggle('is-open');
      navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;

    try {
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.get('f') !== 'app' && installAppBtn) {
        installAppBtn.classList.add('is-visible');
      }
    } catch (err) {
      console.error('Error managing install button visibility:', err);
    }
  });

  if (installAppBtn) {
    installAppBtn.addEventListener('click', async () => {
      if (deferredPrompt) {
        deferredPrompt.prompt();
        const choice = await deferredPrompt.userChoice;
        console.log('User choice:', choice.outcome);
        deferredPrompt = null;
        installAppBtn.classList.remove('is-visible');
      }
    });
  }
});

let currentZoom = 1;

function zoomIn() {
  currentZoom += 0.1;
  applyZoom();
}

function zoomOut() {
  currentZoom = Math.max(0.5, currentZoom - 0.1);
  applyZoom();
}

function resetZoom() {
  currentZoom = 1;
  applyZoom();
}

function applyZoom() {
  const container = document.getElementById('container') || document.querySelector('.container');
  if (container) {
    container.style.zoom = currentZoom;
  }
}
