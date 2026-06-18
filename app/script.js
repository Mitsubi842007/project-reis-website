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
  //er word een laadscherm gemaakt door de code 

  window.addEventListener("load", function () {
    if (!loader) {
      return;
          //De code wacht totdat de hele website klaar is met laden.
    }
    //stel hij is geladen dan gaat die langzaam weg 
    loader.classList.add("loaded");
    setTimeout(function () {
      if (loader.parentNode) {
        loader.parentNode.removeChild(loader);
      }
    }, 300);
  });
})(); 
