const carditemsEl = document.querySelector(".cart-items");
const cartnumber = document.querySelector(".total-items-in-cart");
const countnum = document.querySelector(".count");
const subtotalEl = document.querySelector(".subtotal");
const totalEl = document.querySelector(".total");
const discountEl = document.querySelector(".discount");


//cart array
let cart = JSON.parse(localStorage.getItem("CART")) || [];
updateCart();

function addToCart(id) {
  if (cart.some((item) => item.id === id)) {
    changeNumberOfUnits("plus", id);
  }
  else {
    $('[data-addCart]').click(function() {
      $(this).addClass('is-adding');
      setTimeout(function() {
        $('[data-addCart]').removeClass('is-adding');
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Item added to cart.',
          showConfirmButton: false,
          timer: 3000
        })
      }, 2500);
    });
    const item = products[0][fname].find((product) => product.id === id);
    cart.push({
      ...item,
      numberOfUnits: 1,
    });
  }
  updateCart();
}

function updateCart() {
  let finalnum = 0;
  renderCartItems();
  for (i = 0; i < cart.length; i++) {
    finalnum += cart[i].numberOfUnits;
  }
  cartnumber.innerHTML = finalnum;
  countnum.innerHTML = finalnum + " items in the bag";
  console.log(cart);
  localStorage.setItem("CART", JSON.stringify(cart));
  renderSubtotal();
}
//render cart items
function renderCartItems() {
  carditemsEl.innerHTML = "";
  cart.forEach((item) => {
    carditemsEl.innerHTML += `
      <div class="product">
          <img src="${item.imgSrc}">
          <div class="product-info">
            <h3 class="product-name">${item.name}</h3>
            <h2 class="product-price">
            <span class="amount">${item.price}</span>
            </h2>
            <div class="units">
                <div class="btn minus" onclick="changeNumberOfUnits('minus', ${item.id})">-</div>
                <div class="quantity">${item.numberOfUnits}</div>
                <div class="btn plus" onclick="changeNumberOfUnits('plus', ${item.id})">+</div>         
            </div>
            <p class="product-remove" onclick="removeItemFromCart(${item.id})">
              <i class="fa fa-trash" aria-hidden="true"></i>
              <span class="remove">Remove</span>
            </p>
          </div>
        </div>
    `;
  });
}

//change number item
function changeNumberOfUnits(action, id) {
  cart = cart.map((item) => {
    let numberOfUnits = item.numberOfUnits;

    if (item.id === id) {
      if (action === "minus" && numberOfUnits > 1) {
        numberOfUnits--;
      }
      else if (action === "plus") {
        numberOfUnits++;
      }
    }
    return {
      ...item,
      numberOfUnits,
    };
  });
  updateCart();
}
// remove item from cart
function removeItemFromCart(id) {
  cart = cart.filter((item) => item.id !== id);
  updateCart();
}

// calculate total
function renderSubtotal() {
  let totalPrice = 0, taxPrice = 0, finalprice = 0, discount = 0;
  cart.forEach((item) => {
    totalPrice += parseInt(item.price) * item.numberOfUnits;
  });
  console.log(totalPrice);
  if (totalPrice < 500) {
    taxPrice = totalPrice + (totalPrice * 0.05);
    subtotalEl.innerHTML = `${totalPrice} Baht`;
    discountEl.innerHTML = `${discount}`;
    totalEl.innerHTML = `${taxPrice} Baht`;
  }
  else if ((totalPrice >= 500 && totalPrice < 1000)) {
    taxPrice = totalPrice + (totalPrice * 0.05);
    discount = 50;
    finalprice = taxPrice - discount;
    subtotalEl.innerHTML = `${totalPrice} Baht`;
    discountEl.innerHTML = `${discount}`;
    totalEl.innerHTML = `${finalprice} Baht`;
  }
  else if ((totalPrice >= 1000 && totalPrice < 2000)) {
    taxPrice = totalPrice + (totalPrice * 0.05);
    discount = 100;
    finalprice = taxPrice - discount;
    subtotalEl.innerHTML = `${totalPrice} Baht`;
    discountEl.innerHTML = `${discount}`;
    totalEl.innerHTML = `${finalprice} Baht`;
  }
  else if ((totalPrice >= 2000)) {
    taxPrice = totalPrice + (totalPrice * 0.05);
    discount = 500;
    finalprice = taxPrice - discount;
    subtotalEl.innerHTML = `${totalPrice} Baht`;
    discountEl.innerHTML = `${discount}`;
    totalEl.innerHTML = `${finalprice} Baht`;
  }
}
function checkout() {
  Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Payment Successful.',
    showConfirmButton: false,
    timer: 2000
  });
  setTimeout(function() {
    localStorage.clear();
    window.location.reload();
  }, 2000);
}