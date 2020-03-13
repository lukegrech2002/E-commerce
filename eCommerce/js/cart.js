//Loading Cart
window.onload = loadProducts;

//Getting cart or creating one if it does not exist
function getCart(){
    let cart;
    if(sessionStorage.cart === undefined || sessionStorage.cart === ""){
        cart = [];
    }
    else {
        cart = JSON.parse(sessionStorage.cart);
    }
    return cart;
}

//AJAX to load Cart
function loadProducts(){
    let request = new XMLHttpRequest();

    //Creating event handler that specifies what should happen when server responds
    request.onload = () => {
        //Checking HTTP status
        if(request.status === 200){
            //Adding data from server to page
            loadCart(request.responseText);
        }
        else
            alert("Error communicating with server: " + request.status);
    };

    //Setting up request and sending it
    request.open("GET", "cart.php");
    request.send();
}

//Displays cart in page
function loadCart(){
    var retrievedCurrentUser = JSON.parse(sessionStorage.getItem("currentUser"));
    let cardContent = document.getElementById('card');
    let notLoggedIn = '';

    if(retrievedCurrentUser == null){
        notLoggedIn +=
            "<div class='cart-product'>"+
                "<div class='col s12 m7'>" +
                    "<div class='card horizontal'>" +
                        "<div class='card-stacked'>" +
                            "<div class='card-content'>" +
                                "<span class='price'>Please Log In to View Cart</span>" +
                            "</div>" + 
                        "</div>" + 
                    "</div>" + 
                "</div>" + 
            "</div>";
        cardContent.innerHTML = notLoggedIn;
        document.getElementById("totalCost").innerHTML = "";
    }else{
        calcPrice(); //Calculating total cost
        newCard(); //Creating a new card for every item in the cart
        proceedToCheckout(); //Checkout form
    }
}

function proceedToCheckout(){
    var prodIDs = JSON.parse(sessionStorage.getItem('prodIDs'));
    var totalCost = JSON.parse(sessionStorage.getItem('totalCost'));
    let purchaseCart = document.getElementById('proceedToCheckout');

    //Using POST Form instead of GET for security
    let cartProducts = "<form action='checkout.php' method='post'>";
        
    var retrievedCurrentUser = JSON.parse(sessionStorage.getItem("currentUser"));
    var id = retrievedCurrentUser[0].$oid;

    //Add hidden field to form that contains stringified version of product IDs
    cartProducts += "<input type='hidden' name='prodIDs' value='" + JSON.stringify(prodIDs) + "'>";
    cartProducts += "<input type='hidden' name='customerID' value='" + JSON.stringify(id) + "'>";
    cartProducts += "<input type='hidden' name='totalCost' value='" + JSON.stringify(totalCost) + "'>";

    //Checkout button
    cartProducts += "<input type='submit' value='Proceed to Checkout'></form>";
    purchaseCart.innerHTML = cartProducts;
    document.querySelector("#proceedToCheckout > form > input[type=submit]").className="waves-effect waves-light btn modal-trigger";
}

function newCard(){
    let cart = getCart();

    let cardData = '';
    let cardContent = document.getElementById('card');

    let prodIDs = []; //Products array
    
    if (cart.length ===0){
        cardData +=
            "<div class='cart-product'>"+
                "<div class='col s12 m7'>" +
                    "<div class='card horizontal'>" +
                        "<div class='card-stacked'>" +
                            "<div class='card-content'>" +
                                "<span class='price'>Your cart is empty</span>" +
                            "</div>" + 
                        "</div>" + 
                    "</div>" + 
                "</div>" + 
            "</div>";
    }else{
        for(let i=0; i < cart.length; i++){
            //Displaying all products in cart
            cardData +=
            "<div class='cart-product'>"+
                "<div class='col s12 m7'>" +
                    "<div class='card horizontal'>" +
                        "<div class='card-image'>" +
                            "<img src ='" + cart[i].image + "'>"+
                        "</div>" +
                        "<div class='card-stacked'>" +
                            "<div class='card-content'>" +
                                "<span class='card-title'>" + cart[i].name + "</span>"+
                                "<span class='price'> Price: </span>" +
                                "<p class='pricep'>£" + cart[i].price + "</p>" + 
                                "<span class='platform'>Platform: </span>" +
                                "<p class='platformp'>" + cart[i].platform + "</p>" +
                            "</div>" + 
                        "</div>" + 
                    "</div>" + 
                "</div>" + 
            "</div>";
            prodIDs.push({product_id: cart[i].product_id, name: cart[i].name, count: 1, price: cart[i].price, platform: cart[i].platform}); //Adding to product array
        }
    }
    cardContent.innerHTML = cardData;
    sessionStorage.setItem('prodIDs', JSON.stringify(prodIDs));
}


//Function to calculate total price
function calcPrice(){
    let cart = getCart();

    var totalCost = 0;
    for (var i = 0; i < cart.length; i++) {
      totalCost += +cart[i].price; //+ before price turns the string into an integer
    }
    
    document.getElementById("price").innerHTML = "£" + totalCost; //Displaying
    sessionStorage.setItem('totalCost', JSON.stringify(totalCost));
}

//Adding an item to the cart
function addToCart(prodID, prodName, prodImage, prodPrice, prodPlatform){
    let cart = getCart(); //Load or create cart
    
    //Add product to cart
    cart.push({product_id: prodID, name: prodName, image: prodImage, price: prodPrice, platform: prodPlatform});
    
    //Store in local storage
    sessionStorage.cart = JSON.stringify(cart);    
}

//Function to delete all roducts from cart
function emptyCart(){
    //Clearing Cart
    sessionStorage.removeItem('cart');
    loadCart();
    location.reload();
}