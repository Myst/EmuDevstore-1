<?php
/**
* WoltLab Community Framework
* Template: headerMenu
* Compiled at: Tue, 13 Aug 2013 11:36:42 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'headerMenu';
?>

	<div id="mainMenu" class="mainMenu">
		<div class="mainMenuInner"><?php $this->assign('menuItemCounter', 0); ?><?php $this->assign('menuItemCount', count($this->v['this']->getPageMenu()->getMenuItems())); ?><ul><?php
if (count($this->v['this']->getPageMenu()->getMenuItems()) > 0) {
foreach ($this->v['this']->getPageMenu()->getMenuItems() as $this->v['item']) {
?><?php $this->assign('menuItemCounter', $this->v['menuItemCounter']+1); ?><li id="mainMenuItem<?php echo $this->v['item']['menuItemID']; ?>"<?php if ($this->v['item']['activeMenuItem'] || $this->v['menuItemCounter'] == 1 || $this->v['menuItemCounter'] == $this->v['menuItemCount']) { ?> class="<?php if ($this->v['menuItemCounter'] == 1) { ?>first<?php } elseif ($this->v['menuItemCounter'] == $this->v['menuItemCount']) { ?>last<?php } ?><?php if ($this->v['item']['activeMenuItem']) { ?><?php if ($this->v['menuItemCounter'] == 1 || $this->v['menuItemCounter'] == $this->v['menuItemCount']) { ?>Active<?php } else { ?>active<?php } ?><?php } ?>"<?php } ?>><a href="<?php echo StringUtil::encodeHTML($this->v['item']['menuItemLink']); ?>" title="<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo $this->v['item']['menuItem']; ?><?php $_lang031cc0013cc88756b3a8f28aae3783491f94e04c = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang031cc0013cc88756b3a8f28aae3783491f94e04c, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>"><?php if ($this->v['item']['menuItemIconM']) { ?><img src="<?php echo StringUtil::encodeHTML($this->v['item']['menuItemIconM']); ?>" alt="" /> <?php } ?><span><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo $this->v['item']['menuItem']; ?><?php $_lang84512a0ae0188c4059e2c97a3889f0fdeb8b2633 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang84512a0ae0188c4059e2c97a3889f0fdeb8b2633, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></span></a></li><?php } } ?></ul>
		</div>
	</div>