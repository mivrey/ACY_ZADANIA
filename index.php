<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navigation">
        </nav>
    </header>
    <section>
        <div class="form-box">
            <div class="fron-value">
                <form action="reg.php" method="post">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <button type="sumbit">Зарегистрироваться</button>
                    <div class="register">
                        <p>Если есть аккаунт &emsp;&emsp;&emsp; <a href="">ТЫК</a></p>
                    </div>
                </form>
                <form action="login.php">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Запомнить &emsp;&emsp;&emsp;&emsp; <a href="#">Забыл пароль</a></label>
                    </div>
                    <button>Зайти</button>
                    <div class="register">
                        <p>Если нет аккаунта &emsp;&emsp;&emsp; <a href="">ТЫК</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodulesrc="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
