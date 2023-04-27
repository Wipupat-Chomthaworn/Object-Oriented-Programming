const containerrecomEl = document.querySelector(".container-recom");


function renderProdcuts() {
  products[0][fname].forEach((product) => {
    containerrecomEl.innerHTML += `
            <div class="item" id="card">
                <div class="item-container">
                    <div class="item-img">
                        <img src="${product.imgSrc}" alt="${product.name}">
                    </div>
                    <div class="desc">
                        <h2 class="textname">${product.name}</h2>
                        <h2 class="textprice">${product.price}</h2>
                    </div>
                    <div class="add-to-wishlist">
                        <img src="./icons/heart.png" alt="add to wish list">
                    </div>
                    <div class="add-to-cart" onclick="addToCart(${product.id})">
                        <img src="./icons/bag-plus.png" alt="add to cart">
                    </div>
                </div>
            </div>
        `;
  });
}
renderProdcuts();

function addToCart(id) {
  var success = true;
  if (cart.some((item) => item.id === id)) {
    success = false;
  }
  else {
    success = true;
    const item = products[0][fname].find((product) => product.id === id);
    cart.push({
      ...item,
      numberOfUnits: 1,
    });
    window.localStorage.setItem("CART", JSON.stringify(cart));
  }
  if (success == false) {
    setTimeout(function() {
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Product is already in cart!!',
        showConfirmButton: false,
        timer: 3000
      }), 3000
    });
  }
  else {
    setTimeout(function() {
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Item added to cart.',
        showConfirmButton: false,
        timer: 3000
      }), 3000
    });
  }
  updateCart();
}
function updateCart() {
  let finalnum = 0;
  for (i = 0; i < cart.length; i++) {
    finalnum += cart[i].numberOfUnits;
  }
  cartnumber.innerHTML = finalnum;
  localStorage.setItem("CART", JSON.stringify(cart));
}