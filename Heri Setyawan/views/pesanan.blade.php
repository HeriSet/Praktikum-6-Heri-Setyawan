<!DOCTYPE html>
<html>
 <head>
  <title>Pesanan</title>
 </head>
 <body>
  
 <h3>Daftar Pesanan Anda</h3>
   <table border="2px" style="border-color: cyan; width: 450px; border-collapse:collapse;">
<tr style ="background-color: cyan; color: black;">
    <th>Makanan</th>
    <th>Minuman</th>
</tr>
<tr>
    <td>{{ $makan }}</td> 
    <td>{{ $minum }}</td>
</tr>
</table>
</body>
</html>