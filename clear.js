function clearInput(){
    document.getElementsByName("num1")[0].value = "";
    document.getElementsByName("num2")[0].value = "";
    var selectElement = document.getElementsByName("operator")[0];  // Mengembalikan select ke nilai default
    selectElement.selectedIndex = 0;                                // Mengatur indeks opsi pertama (indeks 0) sebagai pilihan default
}