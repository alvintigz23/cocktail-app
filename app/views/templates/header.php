<?php 
 $lang = isset($_GET['lang'])? $_GET['lang'] : 'EN';
 $search = isset($_GET['search'])? $_GET['search']: 'margarita';
?>
<header class="main-nav">
    <div class="container">
        <h1>Cocktails</h1>
        <div class="nav-inputs">
            <div class="nav-search">
                <form action="/" type="post" id="headerForm">
                    <select id="lang-switcher" name="lang">
                        <option <?= ($lang== 'EN')? 'SELECTED' : ''?> value="EN">EN</option>
                        <option <?= ($lang== 'ES')? 'SELECTED' : ''?> value="ES">ES</option>
                        <option <?= ($lang== 'DE')? 'SELECTED' : ''?> value="DE">DE</option>
                        <option <?= ($lang== 'FR')? 'SELECTED' : ''?> value="FR">FR</option>
                        <option <?= ($lang== 'IT')? 'SELECTED' : ''?> value="IT">IT</option>
                        <option <?= ($lang== 'ZH-HANS')? 'SELECTED' : ''?> value="ZH-HANS">ZH-HANS</option>
                        <option <?= ($lang== 'ZH-HANT')? 'SELECTED' : ''?> value="ZH-HANT">ZH-HANT</option>
                    </select>
                    <input name="search" type="text" placeholder="search" value="<?=  $search ?>">
                </form>
            </div>
        </div>
    </div>
</header>