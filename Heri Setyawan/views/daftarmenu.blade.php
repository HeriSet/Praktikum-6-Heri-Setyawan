<!DOCTYPE html>
<html>
 <head>
  <title>Daftar Menu</title>
 </head>
 <body>
  
 <b>Daftar Menu</b> <br><br>
   <table border="2px" style="border-color: cyan; width: 450px; border-collapse:collapse; ">
<tr style ="background-color: cyan; color: black;">
    <th>Makanan</th>
    <th>Minuman</th>
</tr>
<tr>
    <td>1. Nasi & Ikan Nila Bakar</td> 
    <td>1. Es Teh</td>
</tr>
<tr>
    <td>2. Nasi & Ikan Lele Bakar</td> 
    <td>2. Es Jeruk</td>
</tr>
<tr>
    <td>3. Nasi & Ayam Goreng</td> 
    <td>3. Jeruk Panas</td>
</tr>
<tr>
    <td>4. Nasi & Bebek Goreng</td> 
    <td>4. Teh Panas</td>
</tr>
</table> <br> <br>
<b>Masukkan Pesanan Anda : </b>
<form action="/formulir" method="POST">
  @csrf
        <br>
        <label>Makanan</label>
        <br>
        <input type="text" name="makanan">
        <br>
        <label>Minuman</label>
        <br>
        <input type="text" name="minuman">
        <br><br>
        <input type="submit" style="border-color: cyan; border-radius:5px;background-color: cyan; color: black;" value="Simpan">
    </form>
</body>
</html>

