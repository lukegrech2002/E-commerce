function emptyCart(){
    //Clearing Cart
    sessionStorage.removeItem('cart');
    loadCart();
    location.reload();
}