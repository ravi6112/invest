<?php /* Smarty version Smarty-3.0.8, created on 2017-03-08 12:26:41
         compiled from "./templates/seeker/edit_profile_picture.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183945358658bfab297e5908-52619871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c43d12f575d115f143de3562ac4c10bccaaf08aa' => 
    array (
      0 => './templates/seeker/edit_profile_picture.tpl',
      1 => 1476439336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183945358658bfab297e5908-52619871',
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
	  New Profile
	  <small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
	  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">New Profile</li>
	</ol>
</section>

<section class="content">
	<div class="nav-tabs-custom">
	<div class="row">
		<div class="col-lg-12">
			<div class="nav-tabs-custom">
				<h1 class="section-heading">Upload New Profile Picture</h1>
				</div>
				<div class="row">
					<form name="form1" enctype="multipart/form-data" method="post" action="seeker_profile.php?job=save_pic">
							<section class="content">
									<div class="form-group">
								<input id="file-1" name="profile_pic" type="file"  data-overwrite-initial="false" data-min-file-count="1">
							</div>
							
							</section>
					</form>
					

			</div>
		
			<!-- /.col-lg-12 -->
	</div>
		<!-- /.row -->
	</div>
	<!-- nav-tabs-custom-->
</div>
	<!--content-->
</section>

<?php $_template = new Smarty_Internal_Template("js_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>