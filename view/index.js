let quantityInput = document.getElementById("quantityInput");

function increaseQuantity() {
    let quantity = parseInt(quantityInput.value);
    quantityInput.value = quantity + 1;
}

function decreaseQuantity() {
    let quantity = parseInt(quantityInput.value);
    if (quantity > 1) {
        quantityInput.value = quantity - 1;
    }
}

// function addToCart() {
//     let quantity = parseInt(quantityInput.value);
//     // Add your addToCart logic here
//     alert(`Product added to cart. Quantity: ${quantity}`);
// }

//     // Khi trang đã tải xong
//     document.addEventListener('DOMContentLoaded', function () {
//         // Lấy phần tử toast
//         var myToastEl = document.getElementById('myToast');
//         // Khởi tạo toast
//         var myToast = new bootstrap.Toast(myToastEl);

//         // Khi click vào nút "Thêm sản phẩm"
//         document.getElementById('addProductBtn').addEventListener('click', function () {
//             // Hiển thị toast
//             myToast.show();

//             // Tự động ẩn toast sau 1.5 giây
//             setTimeout(function () {
//                 myToast.hide();
//             }, 1500);
//         });
//     });

