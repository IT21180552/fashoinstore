let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        name: 'MENS TROUSER',
        tag: 'mens trouser',
        price: 2790,
        inCart: 0
    },
    {
        name: 'MEN CHINO PANT',
        tag: 'men chino pant',
        price: 1990,
        inCart: 0
    },
    {
        name: 'MENS COTTON TROUSER',
        tag: 'mens cotton trouser',
        price: 2390,
        inCart: 0
    },
    {
        name: 'MENS STRETCH DENIM',
        tag: 'mens stretch denim',
        price: 5290,
        inCart: 0
    },
    {
        name: 'CASUAL T-SHIRT',
        tag: 'casual t-shirt',
        price: 1590,
        inCart: 0
    },
    {
        name: 'WOMENS DRESS',
        tag: 'womens dress',
        price: 1490,
        inCart: 0
    },
    {
        name: 'STRIPED LONG TOP',
        tag: 'striped long top',
        price: 1200,
        inCart: 0
    },
    {
        name: 'WOMENS LEGGINGS',
        tag: 'womens leggings',
        price: 2290,
        inCart: 0
    },
    {
        name: 'KIDS TOP',
        tag: 'kids top',
        price: 590,
        inCart: 0
    },
    {
        name: 'GIRLS JUMPSUIT',
        tag: 'girls jumpsuit',
        price: 890,
        inCart: 0
    },
    {
        name: 'GIRLS LEGGING',
        tag: 'girls legging',
        price: 700,
        inCart: 0
    },
    {
        name: 'GIRLS SHIRT',
        tag: 'girls shirt',
        price: 500,
        inCart: 0
    },
    
    

]

for (let i=0; i < carts.length; i++) {
    carts[i].addEventListener('click',() => {
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers) {
    document.querySelector('.header1 span').textContent = productNumbers;
    }
}

function cartNumbers(product){
    
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if( productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.header1 span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.header1 span').textContent = 1;
    }

   setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null) {

        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]:product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
    }
    }
    
    localStorage.setItem("productsInCart", JSON.stringify (cartItems ));
}

function totalCost(product) {
    let cartCost = localStorage.getItem('totalCost');
    
    /*console.log("My cartCost is", cartCost);
    console.log(typeof cartCost);*/

    if(cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }

    
}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse (cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');
   


    /*console.log(cartItems);*/
    if( cartItems && productContainer ){
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class ="product">
                <ion-icon name="close-circle" class="remove"></ion-icon>
                <img src="../images/products/${item.tag}.jpg">
                <span>${item.name}</span>
            </div>
            <div class="price">Rs.${item.price}</div>
            <div class="quantity">
                <ion-icon name="chevron-back-circle"></ion-icon>
                <span>${item.inCart}</span>
                <ion-icon name="chevron-forward-circle"></ion-icon>
            </div>
            <div class="total">
                Rs.${item.inCart * item.price},00
            </div>
            `;
        });

        productContainer.innerHTML += `
            <div class="cartTotalContainer">
                <h4 class="cartTotalTitle">
                    Cart Total  
                  </h4>
                  <h4 class="cartTotal">
                    Rs.${cartCost},00
                  </h4>

        `

    }
}
onLoadCartNumbers();
displayCart();