<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
                

            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Akademik</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li class="submenu-item  ">
                        <a href="prodi" class="submenu-link">Prodi</a>
                        
                    </li>
                    
                    <li class="submenu-item  ">
                        <a href="fakultas" class="submenu-link">Fakultas</a>
                        
                    </li>
                    
                    <li class="submenu-item  ">
                        <a href="<?= Url::to(['/mahasiswa']) ?>" class="submenu-link">Mahasiswa</a>
                        
                    </li>

                    <li class="submenu-item  ">
                        <a href="<?= Url::to(['/data-mahasiswa']) ?>" class="submenu-link"> Data Mahasiswa</a>
                        
                    </li>
                                        
                </ul>
                

            </li>

             <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span></span>Tentang Kami
                </a>

                <ul class="submenu ">

                <li class="submenu-item  ">
                        <a href="<?= Url::to(['/page']) ?>" class="submenu-link"> Visi & Misi</a>
                </li>

                <li class="submenu-item  ">
                        <a href="<?= Url::to(['/page2']) ?>" class="submenu-link"> Sejarah</a>
                </li>

                </ul>
            </li>
            
        </ul>
    </div>
    <div class="logout-button">
    
    </div>