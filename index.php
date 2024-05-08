
 <!-- Nadia Aqmarina Ghaisany   -->
 <!-- 2202012                   -->
 <!-- RPL 4-B                   -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Link JavaScript tombol clear atau "Hapus" -->
    <script src="clear.js"></script>
    <title>Kalkulator</title>
</head>
<body>
    <div class="flex flex-col justify-center justify-items-center ml-9 mt-10 p-10 w-fit bg-slate-100 rounded-md">
        <h2 class="text-xl font-bold text-slate-950">Kalkulator</h2>
        <p class="text-slate-500">Masukkan angka dan hitung hasilnya</p><br>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Masukkan Angka Pertama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-1" required>
            <select name="operator" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-1">
                <option selected>Pilih Operator</option>
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num2" placeholder="Masukkan Angka Kedua" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required>
            <button type="button" name="clear" onClick="clearInput()" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-44 px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Hapus</button>
            <button type="submit" name="calculate" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 w-48 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mb-4">Hitung</button>
        </form>
    <?php
        // Beri aksi untuk tombol "Hitung"
        if(isset($_POST['calculate'])) {
            // Declare variable dari attribute `name` di HTML
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            $result = 0;
            switch($operator) {
                // Jika operasi penjumlahan
                case 'add':
                    $result = $num1 + $num2;
                    break;
                // Jika operasi pengurangan
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                // Jika operasi perkalian
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                // Jika operasi pembagian
                case 'divide':
                    if($num2 == 0) {
                        echo "Error: Cannot divide by zero!";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                // Jika operasi selain di atas atau tidak terpilih operatornya
                default:
                    echo "Invalid operator";
            }
            // Menampilkan output result
            echo '<p class="bg-slate-200 w-96 pl-5 pt-5 text-base rounded-t-lg">Hasil:</p>';
            echo '<h2 class="bg-slate-200 w-96 pb-5 text-center font-bold text-2xl rounded-b-lg">' . $result . '</h2>';
        }
    ?>
    </div>
</body>
</html>
