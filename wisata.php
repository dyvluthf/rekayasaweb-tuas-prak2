<!DOCTYPE html>
<html>
<head>
  <title>Data Landmark</title>
  <style>
    table {
      border-collapse: collapse;
      width: 50%;
      margin: 20px auto;
    }
    th, td {
      border: 1px solid #444;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h2 style="text-align: center;">Tabel Landmark dan Tarif</h2>
  <table id="dataTable">
    <thead>
      <tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>

  <script>
    const data = [
      { kota: "SEMARANG", landmark: "LAWANG SEWU", tarif: 20000 },
      { kota: "YOGYAKARTA", landmark: "PRAMBANAN", tarif: 35000 },
      { kota: "MAGELANG", landmark: "BOROBUDUR", tarif: 45000 },
      { kota: "SURAKARTA", landmark: "PGS", tarif: "GRATIS" }
    ];

    const tbody = document.querySelector("#dataTable tbody");
    data.forEach(item => {
      const row = `<tr>
        <td>${item.kota}</td>
        <td>${item.landmark}</td>
        <td>${item.tarif}</td>
      </tr>`;
      tbody.innerHTML += row;
    });
  </script>
</body>
</html>
