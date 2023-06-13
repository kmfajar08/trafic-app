@extends('layout.main')
@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Masukkan Data</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href='/'>Dashboard</a></div>
          <div class="breadcrumb-item">Import data</div>
        </div>
      </div>
<html>
<head>
  <title>Form Tambah Data</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    .container {
      margin-top: 20px;
    }

    .button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 
      text-align: center;
      text-decoration: none;
      display: inline-block;
      cursor: pointer;
    }

    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>

  <div class="container">
    
    <h5>Delay</h5>
    <form method="post">
      <table>
        <tr>
          <th>Total Delay</th>
          <td><input type="number" name="nama" id='total_delay' required></td>
        </tr>
        <tr>
          <th>Jumlah Data</th>
          <td><input type="number" name="harga" id='jumlah__delay' required></td>
        </tr>
        
        <tr>
          <td colspan="2">
            <button type="button" name="submit" id="btn_count_avarage_delay" class="button">Hitung Nilai</button>
          </td>
        </tr>
      
        <tr>
          <th>Rata-rata</th>
          <td><input type="number" name="rata-rata" id='average_delay' disabled></td>
        </tr>
        
      </table>
    </form>
  </div>

  <div class="container">
  <h5>Jitter</h5>
    <form method="post">
      <table>
        <tr>
          <th>Total</th>
          <td><input type="text" name="nama" id='total_jitter' required></td>
        </tr>
        <tr>
          <th>Jumlah Data</th>
          <td><input type="text" name="harga" id='jumlah_jitter' required></td>
        </tr>
        <tr>
          <td colspan="2">
            <button type="button" name="submit" id="btn_count_avarage_jitter" class="button">Hitung Nilai</button>
          </td>
        </tr>
        <tr>
          <th>Rata-rata</th>
          <td><input type="text" name="rata-rata" id='average_jitter' disabled></td>
        </tr>
        
      </table>
    </form>
  </div>

</html>

<script>
  document.getElementById("btn_count_avarage_delay").addEventListener("click",(e)=>{
    const totalDelay = document.getElementById('total_delay').value;
    const jumlahData = document.getElementById('jumlah__delay').value;

    const averageDelay = +totalDelay / +jumlahData;

    document.getElementById("average_delay").value = averageDelay;
  })

  document.getElementById("btn_count_avarage_jitter").addEventListener("click",(e)=>{
    const totalJitter = document.getElementById('total_jitter').value;
    const jumlahJitter = document.getElementById('jumlah_jitter').value;

    const averageJitter = +totalJitter / +jumlahJitter;

    document.getElementById("average_jitter").value = averageJitter;
  })
</Script>
      
  </div>  

@endsection
