<?php
/* Smarty version 4.3.0, created on 2023-02-24 06:36:14
  from 'C:\xampp\htdocs\Learningsmarty\smartylearning\Template\initial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f84cce0fd4e9_13737838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d72255de28e80c4ba7773e832369aeccdf2edbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Learningsmarty\\smartylearning\\Template\\initial.tpl',
      1 => 1677216970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f84cce0fd4e9_13737838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Learningsmarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->compiled->nocache_hash = '88903331063f84ccdb2e0e3_59917877';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
    <h4><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</h4>
    <p><b>My name is :</b> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
    <p><b>My profile is :</b> <?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
</p>
    <p><b>Brief Information :</b> <?php echo $_smarty_tpl->tpl_vars['para']->value;?>
</p>
    <h3>Fav. Characters :</h3>
    <?php echo json_encode($_smarty_tpl->tpl_vars['arr1']->value);?>

    <h3>MY Skills :</h3>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['skills']->value, 'myskill');
$_smarty_tpl->tpl_vars['myskill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['myskill']->value) {
$_smarty_tpl->tpl_vars['myskill']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['myskill']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <h3>MY Contact :</h3>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
       <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    
    <h3>For loop</h3>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

    <?php }} else { ?>
       loop is not working 
        <?php }
?>
    
    <ul>
    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
        <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
    <?php }
}
?>
    </ul>

    <ul>
    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
        <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
    <?php }} else { ?>
      no iteration
    <?php }
?>
    </ul>

    <h3>If Else Condition Check</h3>
    <?php if ($_smarty_tpl->tpl_vars['fname']->value == 'Peter') {?>
    Welcome Sir.
    <?php } elseif ($_smarty_tpl->tpl_vars['fname']->value == 'Julia') {?>
        Welcome Ma'am.
    <?php } else { ?>
        Welcome, whatever you are.
    <?php }?>

    <br><br>
    <?php if (!(1 & $_smarty_tpl->tpl_vars['number']->value)) {?>
    Wow... You Choose Even Number
    <?php }?>

    <br><br>
    <?php
$__section_jump_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['end']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_jump_0_start = (int)@$_smarty_tpl->tpl_vars['init']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['init']->value + $__section_jump_0_loop) : min((int)@$_smarty_tpl->tpl_vars['init']->value, $__section_jump_0_loop);
$__section_jump_0_total = min(ceil(($__section_jump_0_loop - $__section_jump_0_start)/ 2), $__section_jump_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_jump'] = new Smarty_Variable(array());
if ($__section_jump_0_total !== 0) {
for ($__section_jump_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_jump']->value['index'] = $__section_jump_0_start; $__section_jump_0_iteration <= $__section_jump_0_total; $__section_jump_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_jump']->value['index'] += 2){
?>
    <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_jump']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_jump']->value['index'] : null);?>

    <?php
}
}
?>

    <h3>While Loop</h3>
    <?php
 while ($_smarty_tpl->tpl_vars['wloop']->value > 0) {?>
        <i><del><?php echo $_smarty_tpl->tpl_vars['wloop']->value--;?>
</del></i>
    <?php }?>


    <h3>Mathematics Addition</h3>
    <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['height']->value,'y'=>$_smarty_tpl->tpl_vars['width']->value),$_smarty_tpl);?>



    

</body>
</html><?php }
}
