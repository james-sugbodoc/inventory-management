class PaymentHandler {
    constructor() {
        this.modal = document.getElementById('paymentModal');
        this.successModal = document.getElementById('successModal');
        this.completeSaleBtn = document.getElementById('completeSaleBtn');
        
        this.init();
    }
    
    init() {
        this.completeSaleBtn.addEventListener('click', () => this.showPaymentModal());
        
        document.querySelectorAll('.payment-method').forEach(btn => {
            btn.addEventListener('click', () => this.selectPaymentMethod(btn));
        });
        
        document.getElementById('confirmPayment').addEventListener('click', () => this.processPayment());
    }
    
    showPaymentModal() {
        this.modal.classList.remove('hidden');
    }
    
    selectPaymentMethod(selectedBtn) {
        document.querySelectorAll('.payment-method').forEach(btn => {
            btn.classList.remove('border-primary', 'bg-blue-50');
        });
        selectedBtn.classList.add('border-primary', 'bg-blue-50');
        
        const confirmBtn = document.getElementById('confirmPayment');
        confirmBtn.disabled = false;
        confirmBtn.textContent = `Pay with ${selectedBtn.dataset.method}`;
    }
    
    processPayment() {
        const confirmBtn = document.getElementById('confirmPayment');
        confirmBtn.disabled = true;
        confirmBtn.innerHTML = 'Processing... <span class="ml-2 inline-block h-4 w-4 border-2 border-white border-t-transparent rounded-full animate-spin"></span>';
        
        setTimeout(() => {
            this.completeTransaction();
        }, 1500);
    }
    
    completeTransaction() {
        this.modal.classList.add('hidden');
        this.showSuccessModal();
        if (window.cartManager) {
            cartManager.clearCart();
        }
    }
    
    showSuccessModal() {
        this.successModal.classList.remove('hidden');
    }
    
    closePaymentModal() {
        this.modal.classList.add('hidden');
    }
    
    closeSuccessModal() {
        this.successModal.classList.add('hidden');
    }
    
    printReceipt() {
        console.log('Printing receipt...');
        alert('Receipt printed!');
        this.closeSuccessModal();

    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    window.paymentHandler = new PaymentHandler();
});