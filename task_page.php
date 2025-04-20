<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas Donezo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&family=Itim&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Itim", cursive;
            margin: 0;
            padding: 0;
            background-color: #4D4D4D;
            color: #000000;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background-color: #FFE9BA;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-family: "Jacques Francois Shadow", serif;
            font-size: 26px;
        }
        .search-bar {
            flex-grow: 1;
            margin: 0 20px;
            max-width: 400px;
        }
        .search-bar input {
            font-family: "Itim", cursive;
            width: 100%;
            padding: 10px 15px;
            border: none;
            border-radius: 20px;
            background-color: #C2C2C2;
            font-size: 16px;
        }
        .greeting {
            font-family: "Jacques Francois Shadow", serif;
            font-size: 20px;
        }
        .nav-button {
            font-family: "Itim", cursive;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 8px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 15px;
        }
        .edit-form-container {
            background-color: #C2C2C2;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .edit-form-title {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }
        .form-group label {
            width: 150px;
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }
        .form-group input, .form-group textarea, .form-group select {
            flex-grow: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-family: "Itim", cursive;
        }
        .form-group textarea {
            min-height: 100px;
            resize: vertical;
        }
        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .tambah-button {
            font-family: "Itim", cursive;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 8px 25px;
            font-size: 16px;
            cursor: pointer;
        }
        .batal-button {
            font-family: "Itim", cursive;
            background-color: white;
            color: black;
            border: none;
            border-radius: 15px;
            padding: 8px 25px;
            font-size: 16px;
            cursor: pointer;
        }
        .tambah-tugas-btn {
            font-family: "Itim", cursive;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 8px 25px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
            display: inline-block;
        }
        .tasks-table {
            width: 100%;
            border-collapse: collapse;
            color: black;
        }
        .tasks-table th {
            padding: 12px 15px;
            text-align: left;
            background-color: #333;
            color: white;
        }
        .tasks-table td {
            padding: 12px 15px;
            text-align: left;
        }
        .tasks-table tbody tr {
            background-color: #9a9a9a;
        }
        .tasks-table tbody tr:nth-child(even) {
            background-color: #828282;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .edit-btn {
            background-color: white;
            color: black;
            border: none;
            border-radius: 15px;
            padding: 5px 15px;
            cursor: pointer;
        }
        .delete-btn {
            background-color: black;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 5px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">DONEZO</div>
        <div class="search-bar">
            <input type="text" placeholder="Search....">
        </div>
        <div style="display: flex; align-items: center;">
            <div class="greeting">Hello, guys!</div>
            <a href="login.php" id="logoutLink" class="nav-button">Logout</a>
        </div>
    </header>

    <div class="container">
        <button id="showFormButton" class="tambah-tugas-btn">Tambah Tugas</button>
        
        <div id="editFormContainer" class="edit-form-container" style="display: none;">
            <h2 class="edit-form-title">Tambah Tugas</h2>
            <form id="taskForm">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" required></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" required>
                        <option value="Belum Dimulai">Belum Dimulai</option>
                        <option value="Dalam Proses">Dalam Proses</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal-mulai">Tanggal mulai</label>
                    <input type="date" id="tanggal-mulai" name="tanggal-mulai" required>
                </div>
                <div class="form-group">
                    <label for="tanggal-selesai">Tanggal selesai</label>
                    <input type="date" id="tanggal-selesai" name="tanggal-selesai" required>
                </div>
                <div class="button-group">
                    <button type="button" class="batal-button" id="batalButton">Batal</button>
                    <button type="submit" class="tambah-button" id="submitButton">Tambah</button>
                </div>
            </form>
        </div>
        
        <table class="tasks-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tasksTableBody">
                <!-- Task rows go here -->
            </tbody>
        </table>
    </div>

    <script>
        const showFormButton = document.getElementById('showFormButton');
        const editFormContainer = document.getElementById('editFormContainer');
        const batalButton = document.getElementById('batalButton');
        const taskForm = document.getElementById('taskForm');
        const tasksTableBody = document.getElementById('tasksTableBody');
        const formTitle = document.querySelector('.edit-form-title');
        const submitButton = document.getElementById('submitButton');

        let isEditing = false;
        let editingId = null;

        // Load tasks when page loads
        document.addEventListener('DOMContentLoaded', loadTasks);

        function loadTasks() {
            fetch('get_tasks.php')
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        tasksTableBody.innerHTML = '';
                        data.tasks.forEach((task, index) => {
                            const row = createTaskRow(task, index + 1);
                            tasksTableBody.appendChild(row);
                        });
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        function createTaskRow(task, index) {
            const row = document.createElement('tr');
            row.dataset.taskId = task.id;
            row.innerHTML = `
                <td>${index}</td>
                <td>${task.title}</td>
                <td>${task.description}</td>
                <td>${task.status}</td>
                <td>${formatDate(task.start_date)}</td>
                <td>${formatDate(task.end_date)}</td>
                <td>
                    <div class="action-buttons">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Hapus</button>
                    </div>
                </td>
            `;
            
            row.querySelector('.edit-btn').addEventListener('click', () => handleEdit(task));
            row.querySelector('.delete-btn').addEventListener('click', () => handleDelete(task.id));
            return row;
        }

        showFormButton.addEventListener('click', function () {
            editFormContainer.style.display = 'block';
            formTitle.textContent = 'Tambah Tugas';
            submitButton.textContent = 'Tambah';
            taskForm.reset();
            isEditing = false;
            editingId = null;
        });

        batalButton.addEventListener('click', function () {
            editFormContainer.style.display = 'none';
            taskForm.reset();
            isEditing = false;
            editingId = null;
        });

        taskForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData();
            formData.append('judul', document.getElementById('judul').value);
            formData.append('deskripsi', document.getElementById('deskripsi').value);
            formData.append('status', document.getElementById('status').value);
            formData.append('tanggal-mulai', document.getElementById('tanggal-mulai').value);
            formData.append('tanggal-selesai', document.getElementById('tanggal-selesai').value);

            if (isEditing) {
                formData.append('id', editingId);
                fetch('update_task.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        loadTasks();
                        taskForm.reset();
                        editFormContainer.style.display = 'none';
                        isEditing = false;
                        editingId = null;
                    } else {
                        alert('Error updating task: ' + data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            } else {
                fetch('add_task.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        loadTasks();
                        taskForm.reset();
                        editFormContainer.style.display = 'none';
                    } else {
                        alert('Error adding task: ' + data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });

        function handleEdit(task) {
            editingId = task.id;
            isEditing = true;

            document.getElementById('judul').value = task.title;
            document.getElementById('deskripsi').value = task.description;
            document.getElementById('status').value = task.status;
            document.getElementById('tanggal-mulai').value = task.start_date;
            document.getElementById('tanggal-selesai').value = task.end_date;

            formTitle.textContent = 'Edit Tugas';
            submitButton.textContent = 'Update';
            editFormContainer.style.display = 'block';
        }

        function handleDelete(taskId) {
            if (confirm('Yakin ingin menghapus tugas ini?')) {
                const formData = new FormData();
                formData.append('id', taskId);

                fetch('delete_task.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        loadTasks();
                    } else {
                        alert('Error deleting task: ' + data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        }

        function formatDate(dateStr) {
            const date = new Date(dateStr);
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            return `${day}-${month}-${year}`;
        }

        // Event untuk tombol Logout
        document.getElementById('logoutLink').addEventListener('click', function (e) {
            e.preventDefault();
            if (confirm('Yakin ingin logout?')) {
                window.location.href = 'login.php';
            }
        });
    </script>
</body>
</html>
