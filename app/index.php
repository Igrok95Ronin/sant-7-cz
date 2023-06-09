<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Čištění potrubí'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="cz">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 containerP0">
                    <div class="header__box">
                        <div class="header__left">
                            <div class="header__imgW">
                                <img class="header__img" src="assets/img/img139.jpg" alt="" >
                            </div>
                            <h1 class="header__title"><?= $title ?></h1>
                       </div> 
                       <div class="header__right">
                        <ul class="header__ul">
                            <li>Sanace kanalizace</li>
                            <li>Prasklina potrubí</li>
                            <li>Montáž WC</li>
                            <li>Televizní inspekce potrubí</li>
                            <li>Čištění vysokým tlakem</li>
                        </ul>
                        <p class="header__txt">Nabízíme vám <b>24hodinovou pohotovostní</b>  službu pro ucpané potrubí, ať už jde o ucpanou  toaletu nebo kanál. Naši vysoko kvalifikovaní a  spolehliví technici jsou k dispozici kdykoliv a  jsou na místě do 30 až 60 minut.</p>
                        <div class="header__btnW">
                            <a class="header__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                        </div>
                       </div> 
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class='installationService'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='installationService__box'>
                            <div class="installationService__left">
                                <div class="installationService__inner">
                                    <p class="installationService__commit">Měl jsem ucpaný odtok umyvadla, voda  odtékala velmi pomalu. Avšak díky  <b>pohotovostní instalatérské</b> službě se teď  zase všechno funguje jak má. Navíc byli v čas  a velmi slušní. Velice milý mladý pán přijel v  dohodnutý čas. Práce odvedená k plné naší  spokojenosti. Nadto byla účtována skutečně  cena, na které jsme se dohodli. Děkujeme.
                                    </p>
                                    <div class="installationService__imgW">
                                        <img class="installationService__img" src="assets/img/star.png" alt=""> 
                                    </div>
                                </div>
                            </div>
                            <div class="installationService__right">
                                <div class="installationService__img2W">
                                    <img class="installationService__img2" src="assets/img/img143.jpg" alt="" >
                                </div>
                                <h2 class="installationService__title">Instalační služba</h2>
                                <p class="installationService__txt">Pokud máte problém s ucpanými  potrubími, odpady  nebo <b>kanalizací</b>, neváhejte a kontaktujte  zkušeného <b>instalatéra</b>. Specializujeme se na  oblast potrubí, odpadu a kanalizace, a dokážeme  Vám v této oblasti poskytnout profesionální pomoc,  tedy rychle a efektivní řešení Vašeho problému. Neváhejte a zavolejte dnes!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='clogged'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='clogged__box'>
                            <div class="clogged__left">
                                <div class="clogged__imgW">
                                    <img class="clogged__img" src="assets/img/img146.jpg" alt="" >
                                </div>
                                <h2 class="clogged__title">Zanášené WC Hledáte instalatéra?</h2>
                            </div>
                            <div class="clogged__right">
                                <p class="clogged__txt">Pokud hledáte <b>profesionálního instalatéra</b>, který  Vám pomůže s problémem <b>zanášeného WC</b>,  nemusíte hledat dál. Náš tým zkušených odborníků  Vám s tímto problémem rád pomůže.</p>
                                <p class="clogged__txt"><b>Zanášené WC</b> může být velkým problémem, který  si často neumíme vyřešit sami. Proto je důležité  najít spolehlivého <b>instalatéra</b>, který se na toto téma  specializuje. Náš tým má mnoho let zkušeností s  řešením podobných problémů a může Vám  poskytnout kvalitní služby za přijatelnou cenu.</p>
                                <div class="clogged__btnW">
                                    <a class="clogged__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='ours'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='ours__box'>
                            <div class="ours__left">
                                <div class="ours__imgW">
                                    <img class="ours__img" src="assets/img/img149.jpg" alt="" >
                                </div>
                            </div>
                            <div class="ours__right">
                                <p class="ours__txt">Naše služby jsou poskytovány v souladu s  nejnovějšími normami a předpisy, což zaručuje  vysokou kvalitu práce a spokojenost našich  zákazníků. Navíc jsme k dispozici 24 hodin denně  7 dní v týdnu, takže nás můžete kontaktovat,  kdykoli budete potřebovat.
                                </p>
                                <p class="ours__txt">
                                    Čeká-li nás spolupráce, očekavejte kvalitní práci  od začátku až do konce. Jsme tu proto, abychom  Vám pomohli s jakýmkoli problémem zanášeného  WC a zajistili, že Vaše toaleta bude znovu plně  funkční.</p>
                                <p class="ours__txt">
                                    Nechte práci na nás a užijte si klidný a  bezproblémový provoz svého WC. Kontaktujte nás  ještě dnes a objednejte si naše služby!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='forms'>
        <div class='forms__wrapper'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <h2 class='forms__title'>Kontaktuj nás</h2>
                    <div class='forms__box'>
                        <form id='jq_form' class='mb-0 mt-3'>
                            <div class='my-0'>
                                <input class='form-control' placeholder='Jméno' name='jq_name' type='text'>
                                <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                            </div>
                            <div class='my-4'>
                                <input class='form-control' placeholder='Telefon' name='jq_phone' type='text'>
                                <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                            </div>
                            <div class='my-4'>
                                <input class='form-control' placeholder='Ulice' name='jq_street' type='text'>
                                <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                            </div>
                            <div class='my-4'>
                                <input class='form-control' placeholder='PSČ / Město' name='jq_city' type='text'>
                                <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                            </div>
                            <div class='my-4'>
                                <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                            </div>
                            <div class='my-4'>
                                <textarea rows='3' class='form-control' name='jq_text' placeholder='Zprávy'></textarea>
                                <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                            </div>
                            <div>
                                <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Poslat'>
                            </div>
                            <div id='jq_success' style='display:none'>Díky za vaši zprávu. Byla odeslána.</div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        
        <section class='btnFixedD'>
            <div class='btnFixedD__box'>
                <a class="btnFixedD__btn" href="<?= $phone_href ?>" ><img class="btnFixedD__img" src="assets/icons/telephone-fill.svg" alt=""></a>
            </div>
        </section>
        <section class='btnFixed'>
            <div class='btnFixed__box'>
                <a class="btnFixed__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2023</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>