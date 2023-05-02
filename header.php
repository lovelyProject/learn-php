<div class="container">         <nav id="navigation">
            <ul class="navigation__list">
            <li class="navigation__list-item"><a href="index.php">Главная</a></li>
            <li class="navigation__list-item"><a href="#">О нас</a></li>
            <li class="navigation__list-item"><a href="register.php">Войти</a></li>
         </ul>
        </nav></div>

        <style>
                .navigation__list {
        display: flex;
        list-style: none;
        justify-content: flex-end;
    }

    .navigation__list-item:not(:first-child) {
        margin-left: 30px;
    }
    .navigation__list-item a {
        text-decoration: none;
        color: black;
        font-size: 18px;
    }
    .navigation__list-item a:hover {
        opacity: 0.7;
    }
        </style>