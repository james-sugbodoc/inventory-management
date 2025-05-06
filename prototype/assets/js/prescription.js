document.addEventListener('DOMContentLoaded', function() {
    // View panel elements
    const viewPanel = document.getElementById('viewPanel');
    const closeViewPanel = document.getElementById('closeViewPanel');
    const viewButtons = document.querySelectorAll('.view-item');
    const viewPrescriptionModal = document.getElementById('viewPrescriptionModal');
    const closeViewPrescriptionModal = document.getElementById('closeViewPrescriptionModal');

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
            
            // Get prescription data from the clicked row (static example)
            const row = this.closest('tr');
            const prescriptionData = {
                id: row.querySelector('td:nth-child(1)').textContent,
                patient: row.querySelector('td:nth-child(2)').textContent,
                doctor: row.querySelector('td:nth-child(3)').textContent,
                date: row.querySelector('td:nth-child(4)').textContent,
                status: row.querySelector('td:nth-child(5) span').textContent
            };
            
            // Update view panel with prescription data (in a real app, this would come from your database)
            document.querySelector('#viewPanel [data-field="id"]').textContent = prescriptionData.id;
            document.querySelector('#viewPanel [data-field="patient"]').textContent = prescriptionData.patient;
            document.querySelector('#viewPanel [data-field="doctor"]').textContent = prescriptionData.doctor;
            document.querySelector('#viewPanel [data-field="date"]').textContent = prescriptionData.date;
            document.querySelector('#viewPanel [data-field="status"]').innerHTML = `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${
                prescriptionData.status === 'Filled' ? 'bg-green-100 text-green-800' : 
                prescriptionData.status === 'Pending' ? 'bg-yellow-100 text-yellow-800' : 
                'bg-gray-100 text-gray-800'
            }">${prescriptionData.status}</span>`;
        });
    });

    // Close view panel
    closeViewPanel.addEventListener('click', function() {
        viewPanel.classList.add('translate-x-full');
        document.body.style.overflow = '';
    });

    // Close view prescription modal
    closeViewPrescriptionModal.addEventListener('click', function() {
        viewPrescriptionModal.classList.add('hidden');
        document.body.style.overflow = '';
    });

    // Close when clicking outside view panel
    viewPanel.addEventListener('click', function(e) {
        if (e.target === viewPanel) {
            viewPanel.classList.add('translate-x-full');
            document.body.style.overflow = '';
        }
    });

    // Print prescription button
    document.getElementById('printPrescription')?.addEventListener('click', function() {
        window.print();
    });

    // Change status button
    document.getElementById('changeStatusBtn')?.addEventListener('click', function() {
        //this would open a status change modal
        alert('Status change functionality would go here');
    });

    // Edit prescription button
    document.getElementById('openEditModal')?.addEventListener('click', function() {
        // Close view panel and open edit panel
        viewPanel.classList.add('translate-x-full');
        document.getElementById('editPrescriptionForm').classList.remove('translate-x-full');
    });
            
});