if ("serviceWorker" in navigator) {
  navigator.serviceWorker
    .register("../assets/js/service-worker.js")
    .then(registration => {
      
      console.log(
        "App: Achievement unlocked."
      );
    })
    .catch(error => {

      console.error(
        "App: Crash de Service Worker",
        error
      );
    });
}
