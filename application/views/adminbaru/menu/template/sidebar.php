
    <div class="d-flex align-items-stretch">
     
      <?php

$role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`,`menu`
                  FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                   WHERE `user_access_menu`.`role_id`= $role_id 
                
                  ORDER BY `user_access_menu`.`menu_id` ASC
                
";

    $menu=$this->db->query($queryMenu)->result_array();
   

?>

    <!-- looping menu-->
    <div id="sidebar" class="sidebar py-3">
    <?php foreach($menu as $m):?>

      
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">
       <?= $m['menu'] ?>
      </div>


<!-- query sub menu menu-->
          <?php
          $menuid = $m['id'];
          $querySubmenu ="SELECT *
                            FROM `user_sub_menu` JOIN `user_menu` 
                              ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                          WHERE `user_sub_menu`.`menu_id` = $menuid
                          AND `user_sub_menu`.`is_active` = 1
                          ";

        $submenu  =$this->db->query($querySubmenu)->result_array();
          
          ?>

       <?php foreach($submenu as $s):?> 
        <li class="sidebar-list-item">
      <a  class="sidebar-link text-muted" href="<?= base_url($s['url']);?>">
        <i class="<?= $s['icon'];?>"></i>
        <span><?= $s['title']?></span></a>
    </li>  

       <?php endforeach;?>

          <!-- Divider -->
          <ul class="sidebar-menu list-unstyled">


    <?php endforeach;?>


    
 

   

   

    
        
       
        </ul>
      </div>