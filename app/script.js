(function () {
  function createLoader() {
    const loader = document.createElement("div");
    loader.id = "page-loader";
    const ring = document.createElement("div");
    ring.className = "loader-ring";
    loader.appendChild(ring);
    document.body.appendChild(loader);
    return loader;
  }

  const loader = createLoader();

  window.addEventListener("load", function () {
    if (!loader) {
      return;
    }
    loader.classList.add("loaded");
    setTimeout(function () {
      if (loader.parentNode) {
        loader.parentNode.removeChild(loader);
      }
    }, 300);
  });
})();
