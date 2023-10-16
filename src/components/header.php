<?php 
namespace components;

class header{
    public static function getHeader() {
        ?>    

        <header class="d-flex header flex-row justify-content-between pt-4 px-4" id="header">
         
                <img src="../../assets/logo.png" alt="T space logo">
                <div class="nav">
                        <a href="#" class="nav-text">Čaj</a>
                        <a href="#" class="nav-text">O nás</a>
                        <a href="#" class="nav-text">Kontakt</a>
                </div>
                <div >
                    <i class="fa-solid fa-basket-shopping nav-icons mr-4"></i>
                    <i class="fa-solid fa-user nav-icons"></i>
                </div>
            
        </header>
        <?php
    }
}
?>