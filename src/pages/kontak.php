<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran PAUD MUTIARA</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header>
        <h1>PAUD MUTIARA</h1>
        <p>Pendidikan Anak Usia Dini</p>
    </header>
    <?php include('../components/navbar.php');?>
    
    <div class="container">
        <!--Form Login-->
        <form action="../php/login.php" method="post">
            <h2>Login</h2>
            <Label for="email">Email:</Label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>

    </div>

    <main>
        
    </main>
    <footer>
        <p>&copy; 2023 Sekolah PAUD MUTIARA<br>
         Jam: <br>
            Tutup ⋅ Buka Senin-Sabtu pukul 08.00-selesai<br></p>
    </footer>
</body>
</html>
