<?php
/**
* WoltLab Community Framework
* language: it
* encoding: UTF-8
* category: wbb.global
* generated at Thu, 15 Aug 2013 01:21:50 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wbb.global.changeStyle'] = 'Cambia stile';
$this->items[$this->languageID]['wbb.global.copyright'] = '<a href="http://www.woltlab.com">Forum Software: <strong>Burning Board&reg;{if SHOW_VERSION_NUMBER} {@PACKAGE_VERSION}{/if}</strong>, sviluppato da <strong>WoltLab&reg; GmbH</strong></a>';
$this->dynamicItems[$this->languageID]['wbb.global.copyright'] = '<a href="http://www.woltlab.com">Forum Software: <strong>Burning Board&reg;<?php if (SHOW_VERSION_NUMBER) { ?> <?php echo PACKAGE_VERSION; ?><?php } ?></strong>, sviluppato da <strong>WoltLab&reg; GmbH</strong></a>';
$this->items[$this->languageID]['wbb.global.evaluation'] = 'Questo software è una versione di test. E&apos; possibile utilizzarlo fino alla data <strong>{@EVALUATION_END|fulldate}</strong>{if EVALUATION_END > TIME_NOW} ({@TIME_NOW|datediff:EVALUATION_END}){/if}. Dopo tale data, per un uso legale del software stesso è necessario <a href="http://www.woltlab.com">acquistare una licenza</a> in caso contrario dovrete immediatamente rimuovere il software dal vostro sistema.';
$this->dynamicItems[$this->languageID]['wbb.global.evaluation'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierFulldate\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierFulldate.class.php\');
$this->pluginObjects[\'TemplatePluginModifierFulldate\'] = new TemplatePluginModifierFulldate;
}
if (!isset($this->pluginObjects[\'TemplatePluginModifierDatediff\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierDatediff.class.php\');
$this->pluginObjects[\'TemplatePluginModifierDatediff\'] = new TemplatePluginModifierDatediff;
}
?>Questo software è una versione di test. E&apos; possibile utilizzarlo fino alla data <strong><?php echo $this->pluginObjects[\'TemplatePluginModifierFulldate\']->execute(array(EVALUATION_END), $this); ?></strong><?php if (EVALUATION_END > TIME_NOW) { ?> (<?php echo $this->pluginObjects[\'TemplatePluginModifierDatediff\']->execute(array(TIME_NOW,EVALUATION_END), $this); ?>)<?php } ?>. Dopo tale data, per un uso legale del software stesso è necessario <a href="http://www.woltlab.com">acquistare una licenza</a> in caso contrario dovrete immediatamente rimuovere il software dal vostro sistema.';
$this->items[$this->languageID]['wbb.global.offline'] = 'I forums sono al momento offline{if OFFLINE_MESSAGE != \'\'} per la(e) seguente(i) ragione(i):{else}.{/if}';
$this->dynamicItems[$this->languageID]['wbb.global.offline'] = 'I forums sono al momento offline<?php if (OFFLINE_MESSAGE != \'\') { ?> per la(e) seguente(i) ragione(i):<?php } else { ?>.<?php } ?>';
?>