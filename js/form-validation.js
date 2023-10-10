document.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('biodataForm');
  var result = document.getElementById('result');

  form.addEventListener('submit', function (event) {
    event.preventDefault(); // Mencegah pengiriman formulir secara default

    // Validasi formulir di sini
    var isValid = validateForm();

    if (isValid) {
      // Data berhasil divalidasi
      // Simpan data ke server atau lakukan tindakan lain yang diperlukan di sini

      // Tampilkan hasil data di dalam elemen "result"
      displayFormData();

      // Tampilkan pesan popup
      window.alert('Data berhasil disimpan!');

      // Anda juga dapat menghapus atau mereset formulir setelah data berhasil disimpan
      form.reset();
    } else {
      result.innerHTML = 'Ada kesalahan dalam formulir. Periksa kembali.';
    }
  });

  function validateForm() {
    // Fungsi validasi formulir Anda di sini
    // Pastikan semua data yang Anda butuhkan telah divalidasi dengan benar
    return true; // Gantilah dengan logika validasi sesuai kebutuhan Anda
  }

  function displayFormData() {
    // Mengambil nilai-nilai dari input formulir
    var name = document.getElementById('name').value;
    var nim = document.getElementById('nim').value;
    var birthdate = document.getElementById('birthdate').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var gender = document.querySelector('input[name="gender"]:checked').value;
    var status = document.getElementById('status').value;
    var major = document.getElementById('major').value;
    var campus = document.getElementById('campus').value;
    var hobbies = document.getElementById('hobbies').value;
    var favoriteFoods = [];
    var favoriteDrinks = [];
    var foodCheckboxes = document.querySelectorAll('input[name="food"]:checked');
    var drinkCheckboxes = document.querySelectorAll('input[name="drink"]:checked');
    var favoriteColor = document.getElementById('favorite-color').value;

    // Mengambil nilai-nilai dari checkbox yang dipilih
    foodCheckboxes.forEach(function (checkbox) {
      favoriteFoods.push(checkbox.value);
    });

    drinkCheckboxes.forEach(function (checkbox) {
      favoriteDrinks.push(checkbox.value);
    });

    // Menampilkan hasil data di dalam elemen "result"
    result.innerHTML = `
        <h2>Hasil Data Biodata:</h2>
        <p><strong>Nama:</strong> ${name}</p>
        <p><strong>NIM:</strong> ${nim}</p>
        <p><strong>Tanggal Lahir:</strong> ${birthdate}</p>
        <p><strong>Nomor Telepon:</strong> ${phone}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Alamat:</strong> ${address}</p>
        <p><strong>Jenis Kelamin:</strong> ${gender}</p>
        <p><strong>Status:</strong> ${status}</p>
        <p><strong>Jurusan:</strong> ${major}</p>
        <p><strong>Kampus:</strong> ${campus}</p>
        <p><strong>Hobi:</strong> ${hobbies}</p>
        <p><strong>Makanan Favorit:</strong> ${favoriteFoods.join(', ')}</p>
        <p><strong>Minuman Favorit:</strong> ${favoriteDrinks.join(', ')}</p>
        <p><strong>Warna Kesukaan:</strong> ${favoriteColor}</p>
      `;
  }
});
