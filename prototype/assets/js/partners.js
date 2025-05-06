document.addEventListener('DOMContentLoaded', function() {
    // Partner modal elements
    const partnerModal = document.getElementById('partnerModal');
    const addPartnerBtn = document.getElementById('add_partner');
    const closePartnerModal = document.getElementById('closePartnerModal');
    const cancelPartner = document.getElementById('cancelPartner');
    const partnerForm = document.getElementById('partnerForm');

    // Open partner modal
    addPartnerBtn.addEventListener('click', function() {
        partnerModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });

    // Close partner modal
    [closePartnerModal, cancelPartner].forEach(btn => {
        btn.addEventListener('click', function() {
            partnerModal.classList.add('hidden');
            document.body.style.overflow = '';
            partnerForm.reset(); // Reset form when closed
        });
    });

    // Close when clicking outside
    partnerModal.addEventListener('click', function(e) {
        if (e.target === partnerModal) {
            partnerModal.classList.add('hidden');
            document.body.style.overflow = '';
            partnerForm.reset(); // Reset form when closed
        }
    });

    // Handle form submission
    partnerForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = {
            name: document.getElementById('partnerName').value,
            type: document.getElementById('partnerType').value,
            email: document.getElementById('email').value,
            contactPerson: document.getElementById('contactPerson').value,
            phoneNumber: document.getElementById('phoneNumber').value,
            address: document.getElementById('address').value,
            city: document.getElementById('city').value,
            region: document.getElementById('region').value,
            postalCode: document.getElementById('postalCode').value,
            status: document.getElementById('status').value
        };
        
        // Here you would typically send the data to your backend
        console.log('Form submitted:', formData);
        
        // For demo purposes, just show an alert and close the modal
        alert('Partner added successfully!');
        partnerModal.classList.add('hidden');
        document.body.style.overflow = '';
        partnerForm.reset();
        
        // In a real application, you would:
        // 1. Send data to your API
        // 2. On success, close modal and refresh the partner list
        // 3. Handle any errors
    });

    // View panel elements
    const viewPanel = document.getElementById('viewPanel');
    const closeViewPanel = document.getElementById('closeViewPanel');
    const viewButtons = document.querySelectorAll('.view-item');

    // Edit form elements
    const editForm = document.getElementById('editForm');
    const editButtons = document.querySelectorAll('.edit-item');
    const closeEditForm = document.getElementById('closeEditForm');
    const cancelEdit = document.getElementById('cancelEdit');

    // Delete modal elements
    const deleteModal = document.getElementById('deleteModal');
    const deleteButtons = document.querySelectorAll('.delete-item');
    const cancelDelete = document.getElementById('cancelDelete');
    const confirmDelete = document.getElementById('confirmDelete');

    // Store reference to item being deleted
    let itemToDelete = null;

    // Open delete modal
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
        deleteModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        
        // Get item details (you would typically get this from your data)
        const row = this.closest('tr');
        itemToDelete = {
            id: row.dataset.itemId,
            name: row.querySelector('td:first-child').textContent
        };
        });
    });

    // Cancel delete
    cancelDelete.addEventListener('click', function() {
        deleteModal.classList.add('hidden');
        document.body.style.overflow = '';
        itemToDelete = null;
    });

    // Confirm delete
    confirmDelete.addEventListener('click', function() {
        if (itemToDelete) {
        // Perform delete action here (API call, DOM removal, etc.)
        console.log('Deleting item:', itemToDelete);
        alert(`Successfully deleted ${itemToDelete.name}`);
        
        // Close modal
        deleteModal.classList.add('hidden');
        document.body.style.overflow = '';
        itemToDelete = null;
        }
    });

    // Close modal when clicking outside
    deleteModal.addEventListener('click', function(e) {
        if (e.target === deleteModal) {
        deleteModal.classList.add('hidden');
        document.body.style.overflow = '';
        itemToDelete = null;
        }
    });


    // Open edit form 
    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            editForm.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
            // Load the data here

        });
        });
    
    // Close edit form
    [closeEditForm, cancelEdit].forEach(btn => {
    btn.addEventListener('click', function() {
        editForm.classList.add('translate-x-full');
        document.body.style.overflow = '';
    });
    });

    // View Requests modal elements
    const viewRequestsModal = document.getElementById('viewRequestsModal');
    const openViewRequestsModal = document.getElementById('openViewRequestsModal');
    const closeViewRequestsModal = document.getElementById('closeViewRequestsModal');

    // Open view requests modal
    openViewRequestsModal.addEventListener('click', function(e) {
        e.preventDefault();
        viewRequestsModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });
    
    // Close view requests modal
    closeViewRequestsModal.addEventListener('click', function() {
        viewRequestsModal.classList.add('hidden');
        document.body.style.overflow = '';
    });
    
    // Close when clicking outside
    viewRequestsModal.addEventListener('click', function(e) {
        if (e.target === viewRequestsModal) {
        viewRequestsModal.classList.add('hidden');
        document.body.style.overflow = '';
        }
    });

    // Open view panel when View is clicked
    viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            viewPanel.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close view panel
    closeViewPanel.addEventListener('click', function() {
        viewPanel.classList.add('translate-x-full');
        document.body.style.overflow = '';
    });
 
});