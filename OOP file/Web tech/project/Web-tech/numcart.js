    let cart = JSON.parse(localStorage.getItem("CART")) || [];
    const cartnumber = document.querySelector(".total-items-in-cart");
    updateCart();
    function updateCart() {
      let finalnum = 0;
      for (i = 0; i < cart.length; i++) {
        finalnum += cart[i].numberOfUnits;
      }
      cartnumber.innerHTML = finalnum;
      localStorage.setItem("CART", JSON.stringify(cart));
    }