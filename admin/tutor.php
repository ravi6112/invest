<?php
require_once 'conf/smarty-conf.php';
include 'functions/inventory_functions.php';
include 'functions/user_functions.php';

$module_no=2;

if ($_SESSION['login']==1){

		
		if($_REQUEST['job']=='add'){
			if($_REQUEST['ok']=='Save'){
				unset($_SESSION['product_id']);
				
				$product_name=addslashes($_POST['product_name']);
				$product_id=$_POST['product_id'];
				$short_des=$_POST['short_des'];
				$barcode=$_POST['barcode'];
				$item_type=$_POST['item_type'];
				$qty=$_POST['qty'];
				$measure_type=$_POST['measure_type'];
				$exp_date=date("Y-m-d");
				$label=$_POST['label'];
				$size=$_POST['size'];
				$weight=$_POST['weight'];
				$color=$_POST['color'];
				$servings=$_POST['servings'];
				$safety=$_POST['safety'];
				$alergic_info=$_POST['alergic_info'];
				$howto=$_POST['howto'];
			
			
				$product_id=get_product_id($item_type);
				$serial_no=get_serial_no($item_type);
			
				
				$filename = stripslashes ($_FILES['cover'] ['name']);
				if($filename){
					$file_name=$product_id.'.'.$filename;
					$cover="cover/".$file_name;
					$copied = copy($_FILES['cover']['tmp_name'],$cover);
				}
				else{
					$cover="";
				}
					
				
				save_product($product_name, $product_id, $short_des , $barcode, $item_type, $qty, $measure_type, $exp_date, $size, $weight, $servings, $safety, $alergic_info, $howto ,$cover, $serial_no);
				
				$nlabel = count($label);
				 
				for($i=0; $i < $nlabel; $i++)
				{
					add_item_has_label($product_id, $label[$i]);
				}
				
				$ncolor = count($color);
				 
				for($i=0; $i < $ncolor; $i++)
				{
					add_item_has_color($product_id, $color[$i]);
				}
				
				
				$info=get_inventory_info_by_product_id($product_id);
				$smarty->assign('product_id',$info['product_id']);
				$smarty->assign('id',$info['id']);
				$smarty->assign('product_name',$info['product_name']);
				$smarty->assign('short_des',$info['short_des']);
				$smarty->assign('barcode',$info['barcode']);
				$smarty->assign('item_type',$info['item_type']);
				$smarty->assign('qty',$info['qty']);
				$smarty->assign('measure_type',$info['measure_type']);
				$smarty->assign('exp_date',$info['exp_date']);
				$smarty->assign('measure_type',$info['measure_type']);
				$smarty->assign('label',$info['label']);
				$smarty->assign('size',$info['size']);
				$smarty->assign('weight',$info['weight']);
				$smarty->assign('color',$info['color']);
				$smarty->assign('servings',$info['servings']);
				$smarty->assign('safety',$info['safety']);
				$smarty->assign('alergic_info',$info['alergic_info']);
				$smarty->assign('howto',$info['howto']);

				
				$_SESSION['product_id']=$product_id;
				
				$smarty->assign('user_name',"$_SESSION[user_name]");
				$smarty->assign('page',"Inventory");
				$smarty->display('inventory/details.tpl');
			}
			else{
				$id=$_SESSION['id'];
				$product_name=addslashes($_POST['product_name']);
				$product_id=$_POST['product_id'];
				$short_des=$_POST['short_des'];
				$barcode=$_POST['barcode'];
				$item_type=$_POST['item_type'];
				$qty=$_POST['qty'];
				$measure_type=$_POST['measure_type'];
				$exp_date=date("Y-m-d");
				$label=$_POST['label'];
				$size=$_POST['size'];
				$weight=$_POST['weight'];
				$color=$_POST['color'];
				$servings=$_POST['servings'];
				$safety=$_POST['safety'];
				$alergic_info=$_POST['alergic_info'];
				$howto=$_POST['howto'];
			
			
				$product_id=get_product_id($item_type);
				$serial_no=get_serial_no($item_type);
			
				
				$filename = stripslashes ($_FILES['cover'] ['name']);
				if($filename){
					$file_name=$product_id.'.'.$filename;
					$cover="cover/".$file_name;
					$copied = copy($_FILES['cover']['tmp_name'],$cover);
				}
				else{
					$cover="";
				}
					
					
				if($cover){
					update_product($id, $product_name, $short_des,  $barcode, $item_type, $qty, $measure_type, $exp_date, $size, $weight, $servings, $safety, $alergic_info, $howto ,$cover);
						
					}
					else{
						update_product_without_cover($id, $product_name, $short_des,  $barcode, $item_type, $qty, $measure_type, $exp_date, $size, $weight, $servings, $safety, $alergic_info, $howto);

					}
					
				$nlabel = count($label);
				 
				for($i=0; $i < $nlabel; $i++)
				{
					add_item_has_label($product_id, $label[$i]);
				}
				
				$ncolor = count($color);
				 
				for($i=0; $i < $ncolor; $i++)
				{
					add_item_has_color($product_id, $color[$i]);
				}
				
				unset($_SESSION['id']);
				
				$info=get_product_info($id);
				$smarty->assign('product_id',$info['product_id']);
				$smarty->assign('id',$info['id']);
				$smarty->assign('product_name',$info['product_name']);
				$smarty->assign('short_des',$info['short_des']);
				$smarty->assign('barcode',$info['barcode']);
				$smarty->assign('item_type',$info['item_type']);
				$smarty->assign('qty',$info['qty']);
				$smarty->assign('measure_type',$info['measure_type']);
				$smarty->assign('exp_date',$info['exp_date']);
				$smarty->assign('measure_type',$info['measure_type']);
				$smarty->assign('label',$info['label']);
				$smarty->assign('size',$info['size']);
				$smarty->assign('weight',$info['weight']);
				$smarty->assign('color',$info['color']);
				$smarty->assign('servings',$info['servings']);
				$smarty->assign('safety',$info['safety']);
				$smarty->assign('alergic_info',$info['alergic_info']);
				$smarty->assign('howto',$info['howto']);
			
			
				
				$smarty->assign('user_name',"$_SESSION[user_name]");
				$smarty->assign('page',"Inventory");
				$smarty->display('inventory/details.tpl');
			}
		}
		elseif($_REQUEST['job']=='search'){
			$_SESSION['search']=$_POST['search'];

			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('search',"$_SESSION[search]");
			$smarty->assign('search_mode',"on");
			$smarty->assign('page',"Inventory");
			$smarty->display('inventory/inventory.tpl');
		}
		
		elseif ($_REQUEST ['job'] == "view") {
			$_SESSION ['product_id'] = $_REQUEST ['product_id'];
				
			$info = get_inventory_info_by_product_id ( $_SESSION ['product_id'] );
				
			$_SESSION ['id'] = $info ['product_id'];
				
			$smarty->assign('page',"Inventory");
				$smarty->display('inventory/details.tpl');
		}
		
		
		elseif ($_REQUEST['job']=='edit'){
			$info=get_product_info($_REQUEST['id']);
			$_SESSION['id']=$_REQUEST['id'];

			$smarty->assign('product_id',$info['product_id']);
				$smarty->assign('id',$info['id']);
				$smarty->assign('product_name',$info['product_name']);
				$smarty->assign('short_des',$info['short_des']);
				$smarty->assign('barcode',$info['barcode']);
				$smarty->assign('item_type',$info['item_type']);
				$smarty->assign('qty',$info['qty']);
				$smarty->assign('measure_type',$info['measure_type']);
				$smarty->assign('exp_date',$info['exp_date']);
				$smarty->assign('measure_type',$info['measure_type']);
				$smarty->assign('label',$info['label']);
				$smarty->assign('size',$info['size']);
				$smarty->assign('weight',$info['weight']);
				$smarty->assign('color',$info['color']);
				$smarty->assign('servings',$info['servings']);
				$smarty->assign('safety',$info['safety']);
				$smarty->assign('alergic_info',$info['alergic_info']);
				$smarty->assign('howto',$info['howto']);
				
			
			$smarty->assign('parent_catagorys',list_parent_catagory());
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('edit',"Product");
			$smarty->assign('edit_mode',"on");
			$smarty->assign('page',"Inventory");
			$smarty->display('inventory/add_new.tpl');
		}
		elseif ($_REQUEST['job']=='delete'){
		
			if (check_access($module_no, $_SESSION['user_id'])==1){
				cancel_product($_REQUEST['id']);

				$smarty->assign('parent_catagorys',list_parent_catagory());
				$smarty->assign('user_name',"$_SESSION[user_name]");
				$smarty->assign('page',"Inventory");
				$smarty->display('inventory/inventory.tpl');
			}
			else{
				$user_name=$_SESSION['user_name'];
				$smarty->assign('user_name',"$_SESSION[user_name]");
				$smarty->assign('error_report',"on");
				$smarty->assign('error_message',"Dear $user_name, you don't have permission to DELETE an item.");
				$smarty->assign('page',"Access Error");
				$smarty->display('user_home/access_error.tpl');
			}
		}
		
		
		
		
		elseif($_REQUEST['job']=='add_new'){
			unset($_SESSION['id']);
			$smarty->assign('parent_catagorys',list_parent_catagory());
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('page',"Add New");
			$smarty->display('inventory/add_new.tpl');
		}
		
		else{
			$smarty->assign('parent_catagorys',list_parent_catagory());
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('page',"Inventory");
			$smarty->display('inventory/inventory.tpl');
		}
	}

else{
	$smarty->assign('error',"<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}