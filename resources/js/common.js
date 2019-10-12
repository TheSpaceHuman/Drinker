$('.ajax-add-to-basket').click(function (e) {
  e.preventDefault();
  const productId = $(this).attr('data-product-id');
  const productQuantity = $(this).attr('data-product-quantity');

  $.ajax({
    url: `basket/addProduct/${productId}-${productQuantity}`
  }).done(function() {
    console.log('Added item');
    $( this ).addClass('added_to_cart');
    $.growl.notice({ title: "", message: "Товар успешно добален" });
    $('#zoo-add-to-cart-message').addClass('active');
    setTimeout(function () {
      $('#zoo-add-to-cart-message').removeClass('active');
    }, 3000);
  });

});

$('.socials-dropdown__icon').click(function (e) {
  e.preventDefault();
  $('.socials-dropdown').toggleClass('active');
});
// console.log();
var orderBy = window.location.search;
if(orderBy === '?orderby=price-desc') {
  $('.orderby').find('option[value=price-desc]').attr('selected', true);
} else if(orderBy === '?orderby=price-asc') {
  $('.orderby').find('option[value=price-asc]').attr('selected', true);
} else if(orderBy === '?orderby=title') {
  $('.orderby').find('option[value=title]').attr('selected', true);
}
