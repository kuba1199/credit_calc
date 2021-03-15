<?php
/* Smarty version 3.1.39, created on 2021-03-15 22:46:14
  from 'D:\Program Files\XAMPP\htdocs\smarty_final\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604fd5a690cf73_04585817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db602ac144704ae59d9ff1a5bb59392b4069e7b6' => 
    array (
      0 => 'D:\\Program Files\\XAMPP\\htdocs\\smarty_final\\app\\calc_view.tpl',
      1 => 1615844772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604fd5a690cf73_04585817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1701297642604fd5a68f7849_97299362', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/home.tpl");
}
/* {block 'content'} */
class Block_1701297642604fd5a68f7849_97299362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1701297642604fd5a68f7849_97299362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Nav -->
<div id="all" style="background-color: #282828">
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Home</a></li>
					<li><a href="#work">Calc</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
	
						<div class="col-8 col-7-large col-12-medium">
							<header>
								<h1> <strong>Calculator with smarty </strong></h1>
								
							</header>

						</div>
					</div>
				</div>
			</article>
			
<article id="work" class="wrapper style2">
				<div class="container">
					 <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_count.php#work" method="get">
	<label for="id_kwota">Kwota kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" /><br />
	<label for="id_czas">Czas kredytu: </label>
	<input id="id_czas" type="text" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['czas'];?>
" /><br />
	<label for="id_percent">Oprocentowanie: </label>
	<input id="id_percent" type="text" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['percent'];?>
" /><br />
	<input type = "submit" value="Oblicz" class="pure-button" />
</form>
	
	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


                            
                            <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                                <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
                                    <h4>Wystąpiły błędy: </h4>
                                    <ol class="err">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ol>
                                <?php }?>
                            <?php }?>

                         
                            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                                <h4>Wynik</h4>
                                <p class="result">
                                    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

                                </p>
                            <?php }?>

                        </div>

				
			</article>
			</div>
			</div>
			<?php
}
}
/* {/block 'content'} */
}
