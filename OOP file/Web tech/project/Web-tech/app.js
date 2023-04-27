const productsEl = document.querySelector(".product");
const cartnumber = document.querySelector(".total-items-in-cart");

function renderProdcuts() {
  products[0][fname].forEach((product) => {
    productsEl.innerHTML += `
      <div class="item-container">
        <img class="img" src="${product.imgSrc}">
        <div class="text1">${product.name}</div>
        <div class="text2">${product.price}</div>
        <button data-addCart class="button button-add-cart" onclick="addToCart(${product.id})" ><span>Add To Cart</span></button>
      </div>
          `;
  });
}
renderProdcuts();


//cart array
let cart = JSON.parse(localStorage.getItem("CART")) || [];
updateCart();

function addToCart(id) {
  var success = true;
  if (cart.some((item) => item.id === id)) {
    success = false;
  }
  else {
    success = true;
    $('[data-addCart]').click(function() {
      $(this).addClass('is-adding');
      setTimeout(function() {
        $('[data-addCart]').removeClass('is-adding');
      }, 2500);
    });
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