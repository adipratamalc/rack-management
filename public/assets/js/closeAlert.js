function alertTimeOut() {
  setTimeout(() => {
    $(".alert").alert("close");
  }, 1000);
}

alertTimeOut();
