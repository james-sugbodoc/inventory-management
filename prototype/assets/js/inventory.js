document.addEventListener('DOMContentLoaded', function() {
    // Main modal elements
    const modal = document.getElementById('inventoryModal');
    const addSupplyBtn = document.getElementById('add_supply');
    const closeModalBtn = document.getElementById('closeModal');
    
    // Inventory form elements
    const internalOption = document.getElementById('internalInventory');
    const externalOption = document.getElementById('externalInventory');
    const internalForm = document.getElementById('internalForm');
    const externalForm = document.getElementById('externalForm');
    const closeInternalForm = document.getElementById('closeInternalForm');
    const closeExternalForm = document.getElementById('closeExternalForm');
    const cancelInternal = document.getElementById('cancelInternal');
    const cancelExternal = document.getElementById('cancelExternal');
    
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
    
    // Transfer modal elements
    const transferModal = document.getElementById('transferModal');
    const transferButtons = document.querySelectorAll('#openTransferModal'); 
    const closeTransferModal = document.getElementById('closeTransferModal');
    const nextStepBtn = document.getElementById('nextStep');
    const prevStepBtn = document.getElementById('prevStep');
    const stepBtns = document.querySelectorAll('.step-btn');
    const stepContents = document.querySelectorAll('.step-content');
    let currentStep = 1;

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

    // Restock modal elements
    const restockModal = document.getElementById('restockModal');
    const openRestockModal = document.getElementById('openRestockModal');
    const closeRestockModal = document.getElementById('closeRestockModal');

    // Open restock modal 
    openRestockModal.addEventListener('click', function(e) {
        e.preventDefault();
        restockModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });
    
    // Close restock modal
    closeRestockModal.addEventListener('click', function() {
    restockModal.classList.add('hidden');
    document.body.style.overflow = '';
    });
    
    // Close restock modal when clicking outside
    restockModal.addEventListener('click', function(e) {
    if (e.target === restockModal) {
        restockModal.classList.add('hidden');
        document.body.style.overflow = '';
    }
    });

    // Audit log modal elements
    const auditLogModal = document.getElementById('auditLogModal');
    const openAuditLogModal = document.getElementById('openAuditLogModal');
    const closeAuditLogModal = document.getElementById('closeAuditLogModal');

    
    // Open audit log modal 
    openAuditLogModal.addEventListener('click', function(e) {
        e.preventDefault();
        auditLogModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });
      
    // Close audit log modal
    closeAuditLogModal.addEventListener('click', function() {
        auditLogModal.classList.add('hidden');
        document.body.style.overflow = '';
    });
      
      // Close audit log modal when clicking outside
      auditLogModal.addEventListener('click', function(e) {
        if (e.target === auditLogModal) {
          auditLogModal.classList.add('hidden');
          document.body.style.overflow = '';
        }
      });

    // Open inventory modal when Add Supply is clicked
    addSupplyBtn.addEventListener('click', function() {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });
    
    // Close inventory modal
    closeModalBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    });
    
    // Close inventory modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
    });
    
    // Handle internal inventory selection
    internalOption.addEventListener('click', function() {
        modal.classList.add('hidden');
        internalForm.classList.remove('translate-x-full');
        document.body.style.overflow = 'hidden';
    });
    
    // Handle external inventory selection
    externalOption.addEventListener('click', function() {
        modal.classList.add('hidden');
        externalForm.classList.remove('translate-x-full');
        document.body.style.overflow = 'hidden';
    });
    
    // Close internal form
    [closeInternalForm, cancelInternal].forEach(btn => {
        btn.addEventListener('click', function() {
            internalForm.classList.add('translate-x-full');
            document.body.style.overflow = '';
        });
    });
    
    // Close external form
    [closeExternalForm, cancelExternal].forEach(btn => {
        btn.addEventListener('click', function() {
            externalForm.classList.add('translate-x-full');
            document.body.style.overflow = '';
        });
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
    
    // Open transfer modal when Transfer Supply is clicked
    transferButtons.forEach(button => {
        button.addEventListener('click', function() {
            transferModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close transfer modal
    closeTransferModal.addEventListener('click', function() {
        transferModal.classList.add('hidden');
        document.body.style.overflow = '';
        resetSteps();
    });
    
    // Step navigation function
    function showStep(step) {
        stepContents.forEach(content => content.classList.add('hidden'));
        document.getElementById(`step${step}`).classList.remove('hidden');
        
        stepBtns.forEach(btn => {
            btn.classList.remove('text-primary', 'border-primary');
            btn.classList.add('text-gray-500');
        });
        
        document.querySelector(`.step-btn[data-step="${step}"]`).classList.add('text-primary', 'border-primary');
        document.querySelector(`.step-btn[data-step="${step}"]`).classList.remove('text-gray-500');
        
        currentStep = step;
        
        // Update button visibility
        prevStepBtn.classList.toggle('hidden', step === 1);
        nextStepBtn.textContent = step === 4 ? 'Complete Transfer' : 'Next';
    }
    
    // Reset steps function
    function resetSteps() {
        currentStep = 1;
        showStep(1);
    }
    
    // Next button click
    nextStepBtn.addEventListener('click', function() {
        if (currentStep < 4) {
            showStep(currentStep + 1);
        } else {
            // Complete transfer logic here
            transferModal.classList.add('hidden');
            document.body.style.overflow = '';
            resetSteps();
            alert('Transfer completed successfully!');
        }
    });
    
    // Previous button click
    prevStepBtn.addEventListener('click', function() {
        if (currentStep > 1) {
            showStep(currentStep - 1);
        }
    });
    
    // Step button click
    stepBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const step = parseInt(this.getAttribute('data-step'));
            showStep(step);
        });
    });



});