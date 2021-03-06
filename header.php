<?php
/*
 * @author ZIDANI ILYES | ZEROUAL WAIL ALLA EDDINE 
 */
?>
<link rel="stylesheet" href=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/css/style.css\""; ?>>

<div class="topbar-wraper">
    <div class="lang-selec">
        <form method="POST" action=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/core/lang-changer.php\"";?>>
            <select name="wanted_lang" class="select-field">
                <option value="FR">FRA</option>
                <option value="EN">ENG</option>
            </select>
            <input type="submit" value=<?php LANG("BUTTON_CHANGE"); ?> class="btn">
        </form>
    </div>
    <a href=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/auth/logout.php\"";?>><img src=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/css/exit.png\"";?> /></a>
</div>

<div class="sidemenu-wraper">
        <div class="sidemenu-title">
            <h1><?php LANG("MENU_TITLE"); ?></h1>
        </div>

        <?php
            if($_SESSION['admin']->is_ceo) {
                echo "<a href=\"http://{$_SERVER['HTTP_HOST']}/\"/>
                        <div class='sidemenu-btn-icon'>
                            <img src=\"http://{$_SERVER['HTTP_HOST']}/css/admin.png\"/>
                        </div>
                        <div class='sidemenu-btn-label'>
                            <p>" . LANG_R("MENU_ADMINS") ."</p>
                        </div>
                    </a>
                    <hr>";
            }
        ?>
        <a href=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/cars/\""; ?>>
            <div class="sidemenu-btn-icon">
                <img src=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/css/cars.png\"";?> />
            </div>
            <div class="sidemenu-btn-label">
                <p><?php LANG("MENU_CARS"); ?></p>
            </div>
        </a>
        <hr>
        <a href=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/clients/\""; ?>>
            <div class="sidemenu-btn-icon">
                <img src=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/css/customer.png\"";?> />
            </div>
            <div class="sidemenu-btn-label">
                <p><?php LANG("MENU_CLIENTS"); ?></p>
            </div>
        </a>
        <hr>
        <a href=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/rents/\""; ?>>
            <div class="sidemenu-btn-icon">
                <img src=<?php echo "\"http://{$_SERVER['HTTP_HOST']}/css/contract.png\"";?> />
            </div>
            <div class="sidemenu-btn-label">
                <p><?php LANG("MENU_RENT"); ?></p>
            </div>
        </a>
        <hr>
</div>

<div class="botbar-wraper">
    <p> Created by : ZIDANI ILYES | ZEROUAL ALL EDDINE - 2020</p>
</div>