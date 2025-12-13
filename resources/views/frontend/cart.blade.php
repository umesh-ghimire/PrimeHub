{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cart Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body { background-color: #f3efe5; }
    </style>
</head> --}}
<x-frontend-layout>
<body class="min-h-screen">

<!-- top bar -->
<div class="bg-emerald-900 text-white text-center text-sm py-2">
Go and purchase our latest products    <a href="#" class="underline font-semibold">Shopping</a>
    <button onclick="this.parentElement.style.display='none'"
            class="absolute right-2 top-1 text-white hover:text-gray-300 font-bold text-lg">
        &times;
    </button>
</div>
<!-- main container -->
<div class="max-w-6xl mx-auto px-4 py-8 bg-[#f9f6ee]">



    <h1 class="text-3xl font-bold tracking-wide mb-6">YOUR CART</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!--left side -->
        <div id="cart-items" class="lg:col-span-2 bg-white rounded-2xl shadow-sm p-6 space-y-4">

            <!-- Items 1 -->
            <div class="cart-item flex gap-4 items-center border border-gray-100 rounded-xl p-4"
                 data-price="500">
                <img src="/"
                     class="w-20 h-20 rounded-lg object-cover" alt="">
                <div class="flex-1">
                    <p class="item-name font-semibold text-slate-900">Gradient Graphic T-shirt</p>
                    <p class="text-xs text-gray-500">Size: Large</p>
                    <p class="text-xs text-gray-500">Color: White</p>
                    <p class="mt-2 font-semibold text-lg">Rs<span class="item-price">500</span>
                    </p>
                    <span class="item-total">Rs 0</span>

                </div>
                <div class="flex items-center gap-3">
                    <button class="qty-minus w-8 h-8 flex items-center justify-center rounded-full border">
                        -
                    </button>
                    <span class="qty text-base" data-qty="1">1</span>
                    <button class="qty-plus w-8 h-8 flex items-center justify-center rounded-full border">
                        +
                    </button>
                    <button class="remove-item text-red-500 text-lg ml-2" title="Remove">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </div>
                <!-- Items 2 -->
            <div class="cart-item flex gap-4 items-center border border-gray-100 rounded-xl p-4"
                 data-price="800">
                <img src="/"
                     class="w-20 h-20 rounded-lg object-cover" alt="">
                <div class="flex-1">
                    <p class="item-name font-semibold text-slate-900">Checkered Shirt</p>
                    <p class="text-xs text-gray-500">Size: Medium</p>
                    <p class="text-xs text-gray-500">Color: Red</p>
                    <p class="mt-2 font-semibold text-lg">Rs<span class="item-price">800</span></p>
                    <span class="item-total">Rs 0</span>

                </div>
                <div class="flex items-center gap-3">
                    <button class="qty-minus w-8 h-8 flex items-center justify-center rounded-full border">
                        -
                    </button>
                    <span class="qty text-base" data-qty="1">1</span>
                    <button class="qty-plus w-8 h-8 flex items-center justify-center rounded-full border">
                        +
                    </button>
                    <button class="remove-item text-red-500 text-lg ml-2" title="Remove">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </div>
            <!--items 3 -->

            <div class="cart-item flex gap-4 items-center border border-gray-100 rounded-xl p-4"
                 data-price="1200">
                <img src="/"
                     class="w-20 h-20 rounded-lg object-cover" alt="">
                <div class="flex-1">
                    <p class="item-name font-semibold text-slate-900">Skinny Fit Jeans</p>
                    <p class="text-xs text-gray-500">Size: Large</p>
                    <p class="text-xs text-gray-500">Color: Blue</p>
                    <p class="mt-2 font-semibold text-lg">Rs<span class="item-price">1200</span></p>
                    <span class="item-total">Rs 0</span>

                </div>
                <div class="flex items-center gap-3">
                    <button class="qty-minus w-8 h-8 flex items-center justify-center rounded-full border">
                        -
                    </button>
                    <span class="qty text-base" data-qty="1">1</span>
                    <button class="qty-plus w-8 h-8 flex items-center justify-center rounded-full border">
                        +
                    </button>
                    <button class="remove-item text-red-500 text-lg ml-2" title="Remove">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- Right side-->
        <div class="bg-white rounded-2xl shadow-sm p-20 flex flex-col justify-between">
            <div>
                <h2 class="text-lg font-semibold mb-4">Order Summary</h2>

                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span>Subtotal</span>
                        <span class="font-semibold">Rs<span id="subtotal">2500</span></span>
                    </div>
                    <div class="flex justify-between text-red-500">
                        <span>Discount (-20%)</span>
                        <span>- Rs<span id="discount">500</span></span>
                    </div>
                    <div class="flex justify-between">
                        <span>Delivery Fee</span>
                        <span>Rs<span id="delivery">100</span></span>
                    </div>
                </div>

                <div class="border-t mt-4 pt-4 flex justify-between items-center">
                    <span class="font-semibold text-base">Total</span>
                    <span class="font-bold text-xl">Rs<span id="total">2100</span></span>
                </div>
            </div>

            <button
                class="mt-6 w-full rounded-full bg-black text-white py-3 font-semibold flex items-center justify-center gap-2">
                Go to Checkout
                <span>→</span>
            </button>
        </div>

    </div>

    <!-- stay connected section -->
    <div class="mt-10 bg-emerald-900 text-white rounded-3xl p-8 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
        <div class="max-w-md">
            <h3 class="text-2xl font-semibold mb-2">
                STAY CONNECTED ABOUT OUR LATEST OFFERS
            </h3>
            <p class="text-sm text-emerald-100">
                Be the first to know about new arrivals, sales, and exclusive offers.
            </p>
        </div>

        <div class="w-full md:w-80 space-y-3">
            <input
                type="email"
                placeholder="Enter your email address"
                class="w-full rounded-full px-4 py-2 text-sm text-gray-900"
            >
            <button class="w-full rounded-full bg-white text-emerald-900 py-2 font-bold text-sm">
             connected with us
            </button>
        </div>
    </div>

</div>

<!-- js  -->
<script>

function recalcTotals() {
    let subtotal = 0;

    document.querySelectorAll(".cart-item").forEach(item => {
        const price = parseInt(item.dataset.price, 10);
        const qty = parseInt(item.querySelector(".qty").dataset.qty, 10);

        // NEW: calculate item total (price × qty)
        const itemTotal = price * qty;

        // NEW: update item total text in UI
        const itemTotalElement = item.querySelector(".item-total");
        if (itemTotalElement) {
            itemTotalElement.innerText = "Rs " + itemTotal;
        }

        subtotal += itemTotal;
    });

    let discountPercent = 20;
    let discountAmount = (subtotal * discountPercent) / 100;
    let deliveryFee = subtotal > 0 ? 100 : 0;
    let total = subtotal - discountAmount + deliveryFee;

    document.getElementById("subtotal").innerText = subtotal;
    document.getElementById("discount").innerText = discountAmount;
    document.getElementById("delivery").innerText = deliveryFee;
    document.getElementById("total").innerText = total;
}


// Handle +, -, and delete buttons
document.getElementById("cart-items").addEventListener("click", (e) => {

    const item = e.target.closest(".cart-item");
    if (!item) return;

    const qtySpan = item.querySelector(".qty");
    let qty = parseInt(qtySpan.dataset.qty);

    // Increase quantity
    if (e.target.classList.contains("qty-plus")) {
        qty++;
    }

    // Decrease quantity
    else if (e.target.classList.contains("qty-minus")) {
        qty = Math.max(1, qty - 1);
    }

    // Remove item
    else if (e.target.closest(".remove-item")) {
        item.remove();
        recalcTotals();
        return;
    }

    qtySpan.dataset.qty = qty;
    qtySpan.textContent = qty;

    recalcTotals();
});


// Initial calculation
recalcTotals();

</script>

</body>
</x-frontend-layout>
{{-- </html> --}}
