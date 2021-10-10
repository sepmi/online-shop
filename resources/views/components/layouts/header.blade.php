
<?php
use App\Models\User;



$user = User::find('1');

if($user ->is_admin == 0){
    ?>

<x-layouts.user-nav>
    
</x-layouts.user-nav>

<?php
}
 if($user ->is_admin == 1){
?>
    <x-layouts.admin-nav>
    
    </x-layouts.admin-nav>
    
<?php
}
?>










 

