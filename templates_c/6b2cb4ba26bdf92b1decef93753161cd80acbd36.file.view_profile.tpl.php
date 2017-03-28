<?php /* Smarty version Smarty-3.0.8, created on 2017-03-10 12:20:48
         compiled from "./templates/seeker/view_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1526106658c24cc8965db4-45774105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b2cb4ba26bdf92b1decef93753161cd80acbd36' => 
    array (
      0 => './templates/seeker/view_profile.tpl',
      1 => 1474352836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526106658c24cc8965db4-45774105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("seeker_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<section class="content-header">
	<h1>
	  Profile
	  <small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
	  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">Profile</li>
	</ol>
</section>


<style>
	.fa:hover {
		color: #3B5998;
	}
	
</style>

<!-- Page Content -->
<div id="page-wrapper">
	<section class="content">
	`	<div class="nav-tabs-custom">
			<div class="container-fluid">
				<div class="row" style="margin-top: 20px;">

			<div class="col-lg-3">
                <?php if ($_smarty_tpl->getVariable('image')->value){?>
					<img src="<?php echo $_smarty_tpl->getVariable('image')->value;?>
" class="img-responsive"/>
				<?php }else{ ?>
					<img src="images/users.png" class="img-responsive img-thumbnail"/>
				<?php }?>
				<a href="seeker_profile.php?job=edit_profile_pic" class="btn btn-lg btn-danger btn-block" style="margin-top: 10px; font-size: 14px;"><i class="fa fa-pencil-square-o fa-lg"></i> Eidt Profile Picture</a>
			</div>
			<div class="col-lg-9">
				<table class="table table-hover" style="font-size: 14px;">
				
				<tr>
					<td colspan="2" style="background-color: #C63D2D;"><h4 style="color: #fff; margin-bottom: -5px; margin-top: -1px;">Personal Details</h4></td>
			  	</tr>
				
				<tr>
					<td><i class="fa fa-user fa-lg" aria-hidden="true"></i> Full name</td>
					<td contenteditable="true" onBlur="updateFeild(this,'full_name')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('full_name')->value;?>
</td>
			  
				</tr>
				<tr>
					<td><i class="fa fa-envelope lg" aria-hidden="true"></i> Email </td>
					<td contenteditable="true" onBlur="updateFeild(this,'email')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('email')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> Telephone</td>
					<td contenteditable="true" onBlur="updateFeild(this,'mobile')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('mobile')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-home fa-lg" aria-hidden="true"></i> Address</td>
					<td contenteditable="true" onBlur="updateFeild(this,'address')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('address')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Facebook</td>
					<td contenteditable="true" onBlur="updateFeild(this,'fb')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('fb')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i> Twitter</td>
					<td contenteditable="true" onBlur="updateFeild(this,'twitter')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('twitter')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> Linkedin</td>
					<td contenteditable="true" onBlur="updateFeild(this,'linkedin')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('linkedin')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i> Google+</td>
					<td contenteditable="true" onBlur="updateFeild(this,'google_plus')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('google_plus')->value;?>
</td>
				</tr>
				
				<tr>
					<td colspan="2" style="background-color: #C63D2D;"><h4 style="color: #fff; margin-bottom: -5px; margin-top: -1px;">Company Details</h4></td>
			  	</tr>
				<tr>
					<td><i class="fa fa-building fa-lg" aria-hidden="true"></i> Company Name</td>
					<td contenteditable="true" onBlur="updateFeild(this,'company')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('company')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i> Designation</td>
					<td contenteditable="true" onBlur="updateFeild(this,'designation')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('designation')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> Telephone</td>
					<td contenteditable="true" onBlur="updateFeild(this,'company_telephone')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('company_telephone')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> E-mail</td>
					<td contenteditable="true" onBlur="updateFeild(this,'company_email')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('company_email')->value;?>
</td>
				</tr>
				<tr>
					<td><i class="fa fa-building fa-lg" aria-hidden="true"></i> Company Address</td>
					<td contenteditable="true" onBlur="updateFeild(this,'company_address')" onClick="showEdit(this);"><?php echo $_smarty_tpl->getVariable('company_address')->value;?>
</td>
				</tr>
			</table>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3" ></div>
		</div>
			
			
			
			



			<!-- /.col-lg-12 -->
				</div>
		<!-- /.row -->
			</div>
	<!-- /.container-fluid -->
		</div>
<!--nav-tabs-custom-->
	</div>
<!--content-->
</section>
<!-- /#page-wrapper -->

</div>

<?php $_template = new Smarty_Internal_Template("js_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>