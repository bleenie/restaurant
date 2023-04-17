const addform = document.getElementById('addform');
const changeform = document.getElementById('changeform');
const deleteform = document.getElementById('deleteform');

function showAddForm() {
    if (addform.style.display === 'none' || !addform.style.display) {
        addform.style.display = 'block';
        changeform.style.display = 'none';
        deleteform.style.display = 'none';
    }
    else {
        addform.style.display = 'none';
    }
}

function showChangeForm() {
    if (changeform.style.display === 'none' || !changeform.style.display) {
        addform.style.display = 'none';
        changeform.style.display = 'block';
        deleteform.style.display = 'none';
    }
    else {
        changeform.style.display = 'none';
    }
}

function showDeleteForm() {
    if (deleteform.style.display === 'none' || !deleteform.style.display) {
        addform.style.display = 'none';
        changeform.style.display = 'none';
        deleteform.style.display = 'block';
    }
    else {
        deleteform.style.display = 'none';
    }
}

//confirmation for delete button