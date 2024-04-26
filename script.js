let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active'); 
}
$(document).ready(function() {
    // When the 'Add to cart' button is clicked
    $(".add-to-cart").click(function() {
        var id = $(this).data("id");

        // Send an AJAX request to cart.php with the product id
        $.ajax({
            url: "cart.php",
            method: "POST",
            data: {id: id},
            success: function(response) {
                // If the item is added to the cart successfully,
                // you can show a success message or perform other actions here
                alert("Item added to cart successfully!");
            },
            error: function(xhr, status, error) {
                // If there's an error, you can show an error message or perform other actions here
                alert("An error occurred while adding the item to the cart. Please try again.");
            }
        });
    });
});