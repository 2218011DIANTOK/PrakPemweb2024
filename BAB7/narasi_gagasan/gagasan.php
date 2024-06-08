<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "jonegoro_jengker";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM gagasan";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - gagasan</title>
    <link rel="stylesheet" href="../style/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li><a href="../admin.php"><i class="bx bxs-dashboard"></i><span>Dashboard</span></a></li>
            <li class="active"><a href="gagasan.php"><i class="bx bxs-objects-vertical-bottom"></i><span>Jonegoro Jengker</span></a></li>
            <li><a href="input.php"><i class="bx bx-notepad"></i><span>Input Data</span></a></li>
            <li><a href="../Petisi/petisi.php"><i class="bx bxs-message-dots"></i><span>Petisi dan Kampanye</span></a></li>
            <li><a href="#"><i class="bx bxs-log-out"></i><span>Logout</span></a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <span>Jonegoro Jengker</span>
                <span>Dashboard</span>
            </div>
            <div class="user-info">
                <div class="search">
                    <i class="bx bx-search-alt"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="../image/government64px.png" alt="">
            </div>
        </div>
        <div class="tabel-wrapper">
            <h3 class="main-title">Jonegoro Jengker</h3>
            <div class="button-container">
                <button class="move-button" onclick="window.location.href='input.php'">Input Data</button>
            </div>
            <div class="tabel-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Gagasan</th>
                            <th>Narasi gagasan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0):                         ?>
                            <?php
                                $no = 1;
                                
                                while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row["judul_gagasan"]; ?></td>
                                    <td><?php echo $row["narasi_gagasan"]; ?></td>
                                    <td>
                                        <?php if ($row["foto_dokumen"]): ?>
                                            <img src="../foto/<?php echo basename($row["foto_dokumen"]); ?>" alt="Foto Dokumen" style="width: 100px;">
                                        <?php else: ?>
                                            Tidak ada foto
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <span class="status status-<?php echo strtolower($row["status"]); ?>">
                                            <?php echo $row["status"]; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="button-container">
                                            <a href="edit.php?id=<?php echo $row["id_gagasan"]; ?>" class="edit-button">Edit</a>
                                            <form id="removeForm_<?php echo $row["id_gagasan"]; ?>" action="remove.php" method="post">
                                                <input type="hidden" name="id_remove" value="<?php echo $row["id_gagasan"]; ?>">
                                                <button type="button" class="remove-button" onclick="confirmRemove('<?php echo $row['id_gagasan']; ?>')">Remove</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">Tidak ada data</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">Total Task: <?php echo $result->num_rows; ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
    function confirmRemove(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            document.getElementById('removeForm_' + id).submit();
        }
    }
</script>
</body>
</html>

<?php
$conn->close();
?>
