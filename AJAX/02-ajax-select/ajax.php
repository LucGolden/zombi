<?php 


// 
if (isset($_POST['pays']) && strtolower($_POST['pays']) == 'haïti') {
    echo '<option>Port-au-prince</option><option>Leogane</option><option>Jacmel</option>';
}elseif(isset($_POST['pays']) && strtolower($_POST['pays']) == 'france'){
echo '<option>Paris</option><option>Marseille</option><option>Nantes</option>';
}elseif(isset($_POST['pays']) && strtolower($_POST['pays']) == 'espagne'){
echo '<option>Madrid</option><option>Barcelonne</option><option>Seville</option>';
}else{
    echo '<option>Veuiller choisir un pays...</option>';
}