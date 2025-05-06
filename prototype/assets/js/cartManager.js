class CartManager {
    constructor() {
        this.cart = [];
        this.cartItemsContainer = document.getElementById('cartItems');
        this.emptyCartMessage = document.getElementById('emptyCartMessage');
        this.orderSummary = document.getElementById('orderSummary');
        
        this.init();
    }
    
    init() {
        this.loadCart();
        this.setupEventListeners();
    }
    
    setupEventListeners() {
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const item = {
                    id: button.dataset.id,
                    name: button.dataset.name,
                    dosage: button.dataset.dosage,
                    price: parseFloat(button.dataset.price),
                    quantity: 1
                };
                this.addToCart(item);
            });
        });
    }
    
    addToCart(item) {
        const existingItem = this.cart.find(i => i.id === item.id);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            this.cart.push(item);
        }
        
        this.saveCart();
        this.renderCart();
    }
    
    removeFromCart(itemId) {
        this.cart = this.cart.filter(item => item.id !== itemId);
        this.saveCart();
        this.renderCart();
    }
    
    updateQuantity(itemId, newQuantity) {
        const item = this.cart.find(i => i.id === itemId);
        if (item) {
            item.quantity = newQuantity;
            this.saveCart();
            this.renderCart();
        }
    }
    
    saveCart() {
        localStorage.setItem('pharmacyCart', JSON.stringify(this.cart));
    }
    
    loadCart() {
        const savedCart = localStorage.getItem('pharmacyCart');
        if (savedCart) {
            this.cart = JSON.parse(savedCart);
        }
        this.renderCart();
    }
    
    clearCart() {
        this.cart = [];
        this.saveCart();
        this.renderCart();
    }
    
    renderCart() {
        this.cartItemsContainer.innerHTML = '';
        
        if (this.cart.length === 0) {
            this.emptyCartMessage.classList.remove('hidden');
            return;
        }
        
        this.emptyCartMessage.classList.add('hidden');
        
        this.cart.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.className = 'flex justify-between items-center border-b pb-2';
            itemElement.innerHTML = `
                <div>
                    <p class="font-medium">${item.name} <span class="text-xs bg-blue-100 text-blue-800 px-2 py-0.5 rounded ml-1">${item.dosage}</span></p>
                    <p class="text-sm text-gray-500">${item.price.toFixed(2)} × ${item.quantity}</p>
                    <p class="text-xs text-gray-400">NDC: ${item.id}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="remove-item text-gray-500 hover:text-danger" data-id="${item.id}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="flex items-center border rounded">
                        <button class="decrease-quantity px-2 text-gray-500 hover:text-primary" data-id="${item.id}">-</button>
                        <span class="quantity px-2">${item.quantity}</span>
                        <button class="increase-quantity px-2 text-gray-500 hover:text-primary" data-id="${item.id}">+</button>
                    </div>
                </div>
            `;
            this.cartItemsContainer.appendChild(itemElement);
        });
        
        this.addCartItemEventListeners();
        this.renderOrderSummary();
    }
    
    addCartItemEventListeners() {
        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', () => {
                this.removeFromCart(button.dataset.id);
            });
        });
        
        document.querySelectorAll('.decrease-quantity').forEach(button => {
            button.addEventListener('click', () => {
                const item = this.cart.find(i => i.id === button.dataset.id);
                if (item && item.quantity > 1) {
                    this.updateQuantity(item.id, item.quantity - 1);
                }
            });
        });
        
        document.querySelectorAll('.increase-quantity').forEach(button => {
            button.addEventListener('click', () => {
                const item = this.cart.find(i => i.id === button.dataset.id);
                if (item) {
                    this.updateQuantity(item.id, item.quantity + 1);
                }
            });
        });
    }
    
    renderOrderSummary() {
        const subtotal = this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        const discount = document.getElementById('scPwdDiscount').checked ? subtotal * 0.2 : 0;
        const vat = (subtotal - discount) * 0.12;
        const total = subtotal - discount + vat;
        
        this.orderSummary.innerHTML = `
            <div class="flex justify-between">
                <span class="text-gray-600">Subtotal:</span>
                <span class="font-medium">₱${subtotal.toFixed(2)}</span>
            </div>
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <input type="checkbox" id="scPwdDiscount" class="mr-2">
                    <label for="scPwdDiscount" class="text-sm text-gray-600">Senior Citizen/PWD Discount (20%)</label>
                </div>
                <span class="font-medium text-red-600">-₱${discount.toFixed(2)}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-gray-600">VATable Amount:</span>
                <span>₱${(subtotal - discount).toFixed(2)}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-gray-600">VAT (12%):</span>
                <span>₱${vat.toFixed(2)}</span>
            </div>
            <div class="flex justify-between font-bold text-lg mt-2">
                <span>Total:</span>
                <span>₱${total.toFixed(2)}</span>
            </div>
        `;
        
        document.getElementById('scPwdDiscount').addEventListener('change', () => {
            this.renderOrderSummary();
        });
    }
    
    getCartTotal() {
        const subtotal = this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        const discount = document.getElementById('scPwdDiscount').checked ? subtotal * 0.2 : 0;
        const vat = (subtotal - discount) * 0.12;
        return subtotal - discount + vat;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    window.cartManager = new CartManager();
});