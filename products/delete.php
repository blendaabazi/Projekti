<?php
include_once '../products/productRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $productRepository = new ProductRepository();
    $productRepository->deleteProduct($id);

    // Pasi te dhenat jane fshire, ridrejto ne faqen kryesore ose ku deshironi.
    header("Location: ../admin/dashboard.php");
    exit();
} else {
    // Nese nuk ka ndonje parameter 'id', kthehu ne faqen kryesore ose ku deshironi.
    header("Location: ../admin/dashboard.php");
    exit();
}
?>
