<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Donezo</title>
  <style>
    body { font-family: sans-serif; background: #444; color: #000; }
    .edit-form {
      display: none;
      background: #bbb;
      padding: 20px;
      border-radius: 10px;
      width: 400px;
      margin: 20px auto;
    }
    .edit-form input, .edit-form textarea {
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      border: none;
      border-radius: 5px;
    }
    .edit-form button {
      padding: 8px 16px;
      margin-right: 10px;
      border-radius: 5px;
    }
    .task-table {
      width: 80%;
      margin: 20px auto;
      background: #222;
      color: white;
      border-collapse: collapse;
    }
    .task-table td, .task-table th {
      padding: 10px;
      border: 1px solid #555;
    }
    .task-table tr:nth-child(even) {
      background: #aaa;
      color: black;
    }
    .edit-btn {
      padding: 5px 10px;
      background: white;
      border-radius: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <!-- Tabel Tugas -->
  <table class="task-table">
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
    <tbody>
      <tr>
        <td>1</td>
        <td>Tugas IPA</td>
        <td>Tentang ular</td>
        <td>Selesai</td>
        <td>2025-08-12</td>
        <td>2025-09-12</td>
        <td><button class="edit-btn" onclick="showEditForm(this)">edit</button></td>
      </tr>
    </tbody>
  </table>

  <!-- Form Edit -->
  <div class="edit-form" id="editForm">
    <h2>Edit tugas</h2>
    <label>Judul</label>
    <input type="text" id="editJudul">
    <label>Deskripsi</label>
    <textarea id="editDeskripsi"></textarea>
    <label>Status</label>
    <input type="text" id="editStatus">
    <label>Tanggal Mulai</label>
    <input type="date" id="editMulai">
    <label>Tanggal Selesai</label>
    <input type="date" id="editSelesai">
    <button onclick="simpanEdit()">Simpan</button>
    <button onclick="batalEdit()">Batal</button>
  </div>

  <script>
    function showEditForm(btn) {
      const row = btn.closest('tr');
      const cells = row.getElementsByTagName('td');

      // Isi data ke form
      document.getElementById('editJudul').value = cells[1].innerText;
      document.getElementById('editDeskripsi').value = cells[2].innerText;
      document.getElementById('editStatus').value = cells[3].innerText;
      document.getElementById('editMulai').value = formatTanggal(cells[4].innerText);
      document.getElementById('editSelesai').value = formatTanggal(cells[5].innerText);

      document.getElementById('editForm').style.display = 'block';
    }

    function batalEdit() {
      document.getElementById('editForm').style.display = 'none';
    }

    function simpanEdit() {
      // Di sini kamu bisa tambahin logic untuk simpan ke database / update di array / kirim ke backend
      alert('Tugas berhasil diupdate!');
      document.getElementById('editForm').style.display = 'none';
    }

    function formatTanggal(tanggal) {
      // Ubah dari format dd-mm-yyyy ke yyyy-mm-dd
      const [dd, mm, yyyy] = tanggal.split('-');
      return `${yyyy}-${mm}-${dd}`;
    }
  </script>

</body>
</html>