<?php
/* Smarty version 3.1.39, created on 2021-03-28 14:55:50
  from 'D:\Program Files\XAMPP\htdocs\calc_structure\app\views\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60607cd6584072_42204830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '205d0d9bd0117e9a6b84499073ea0cd63b371e0f' => 
    array (
      0 => 'D:\\Program Files\\XAMPP\\htdocs\\calc_structure\\app\\views\\calc_view.html',
      1 => 1616936141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60607cd6584072_42204830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80766377760607cd65776b2_39953265', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125185566060607cd6578159_53740360', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'footer'} */
class Block_80766377760607cd65776b2_39953265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_80766377760607cd65776b2_39953265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_125185566060607cd6578159_53740360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125185566060607cd6578159_53740360',
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
                                    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute#work" method="post">
	<label for="id_kwota">Kwota kredytu: </label>
        <input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" /><br />
	<label for="id_czas">Czas kredytu: </label>
        <input id="id_czas" type="text" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->czas;?>
" /><br />
	<label for="id_percent">Oprocentowanie: </label>
        <input id="id_percent" type="text" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
" /><br />
	<input type = "submit" value="Oblicz" class="pure-button" />
</form>
	
	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


                            
   <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

                            

                           <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
                                <h4>Wynik</h4>
                                <p class="result">
                                    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

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
