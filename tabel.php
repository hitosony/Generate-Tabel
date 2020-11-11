<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-1.2.3.min.js"></script>
    <title>Document</title>
</head>

<body>

    <h3 align="center">Menghaslkan Tabel</h3>

    <div align="center">

        <table>

            <tr>

                <td><label>Kolom</label></td>

                <td>

                    <input name="k" type="text" id="k" />

                </td>

            </tr>

            <tr>

                <td>Baris</td>

                <td>

                    <input name="b" type="text" id="b" />

                </td>

            </tr>

            <tr>

                <td><input type="submit" value="Tampil" onclick="generate();" /></td>

                <td><input type="reset" value="Hapus" onclick="location.reload();" /></td>

            </tr>

        </table>

    </div>

    <br>

    <br>

    <div>

        <div id="detail">

        </div>

    </div>

    <script language="JavaScript" type="text/javascript">
        function generate() {
            var b = parseInt(document.getElementById('b').value); // Mengambil value baris
            var k = parseInt(document.getElementById('k').value); // Mengambil value kolom
            var total = b * k; // Rumus untuk mengetahui jumlah sel

            $.ajax({
                type: 'POST', //Metode untuk mengirimkan data
                url: "gen.php", //Nama file untuk menghasilkan tabel
                data: {
                    b: b,
                    k: k,
                    total: total
                }, //Data yang akan dikirim ke file gen.php
                success: function(data) {
                    $('#detail').html(data); //Mengirimkan data ke id detail
                    document.getElementById("k").value = ""; //Menghapus value kolom
                    document.getElementById("b").value = ""; //Menghapus value baris
                }
            })
            return false;
        };
    </script>

</body>

</html>