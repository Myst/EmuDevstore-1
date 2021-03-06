<?php
/**
* WoltLab Community Framework
* language: en
* encoding: UTF-8
* category: wcf.usersOnline
* generated at Tue, 13 Aug 2013 11:36:40 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.usersOnline.location.help'] = '<a href="index.php?page=Help{SID_ARG_2ND}">Help</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.help'] = '<a href="index.php?page=Help<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Help</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.login'] = 'Login';
$this->items[$this->languageID]['wcf.usersOnline.location.logout'] = 'Logout';
$this->items[$this->languageID]['wcf.usersOnline.location.lostPassword'] = 'Forgot password?';
$this->items[$this->languageID]['wcf.usersOnline.location.register'] = 'Registration';
$this->items[$this->languageID]['wcf.usersOnline.location.usercp'] = 'Editing profile';
$this->items[$this->languageID]['wcf.usersOnline.location.search'] = '<a href="index.php?form=Search{SID_ARG_2ND}">Search</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.search'] = '<a href="index.php?form=Search<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Search</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.mail'] = 'Writing e-mail to &quot;{$user}&quot;';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.mail'] = 'Writing e-mail to &quot;<?php echo StringUtil::encodeHTML($this->v[\'user\']); ?>&quot;';
$this->items[$this->languageID]['wcf.usersOnline.location.membersList'] = '<a href="index.php?page=MembersList{SID_ARG_2ND}">Memberlist</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.membersList'] = '<a href="index.php?page=MembersList<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Memberlist</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.membersSearch'] = '<a href="index.php?form=MembersSearch{SID_ARG_2ND}">Searching for a Member</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.membersSearch'] = '<a href="index.php?form=MembersSearch<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Searching for a Member</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.profile'] = 'User profile of: &quot;{$user}&quot;';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.profile'] = 'User profile of: &quot;<?php echo StringUtil::encodeHTML($this->v[\'user\']); ?>&quot;';
$this->items[$this->languageID]['wcf.usersOnline.location.tagCloud'] = 'Tag cloud';
$this->items[$this->languageID]['wcf.usersOnline.location.taggedObjects'] = 'Results for tag &quot;{$tag}&quot;';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.taggedObjects'] = 'Results for tag &quot;<?php echo StringUtil::encodeHTML($this->v[\'tag\']); ?>&quot;';
$this->items[$this->languageID]['wcf.usersOnline.location.attachmentList'] = 'List of own attachmenst';
$this->items[$this->languageID]['wcf.usersOnline.location.messenger'] = 'Contacting &quot;{$user}&quot; via Messenger';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.messenger'] = 'Contacting &quot;<?php echo StringUtil::encodeHTML($this->v[\'user\']); ?>&quot; via Messenger';
$this->items[$this->languageID]['wcf.usersOnline.guestname'] = 'Name';
$this->items[$this->languageID]['wcf.usersOnline.guests'] = 'There {if $guests|count == 1}is one guest{else}are {#$guests|count} guests{/if} currently online';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.guests'] = 'There <?php if (count($this->v[\'guests\']) == 1) { ?>is one guest<?php } else { ?>are <?php echo StringUtil::formatNumeric(count($this->v[\'guests\'])); ?> guests<?php } ?> currently online';
$this->items[$this->languageID]['wcf.usersOnline.invisible'] = ' (Invisible)';
$this->items[$this->languageID]['wcf.usersOnline.ipAddress'] = 'IP address';
$this->items[$this->languageID]['wcf.usersOnline.lastActivity'] = 'Last activity';
$this->items[$this->languageID]['wcf.usersOnline.location'] = 'Location';
$this->items[$this->languageID]['wcf.usersOnline.location.usersOnline'] = '<a href="index.php?page=UsersOnline{SID_ARG_2ND}">Who is online?</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.usersOnline'] = '<a href="index.php?page=UsersOnline<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Who is online?</a>';
$this->items[$this->languageID]['wcf.usersOnline.marking.friends'] = 'Buddies';
$this->items[$this->languageID]['wcf.usersOnline.marking.legend'] = 'Legend:';
$this->items[$this->languageID]['wcf.usersOnline.members'] = 'There {if $users|count == 1}is one registered user{else}are {#$users|count} registered users{/if} currently online';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.members'] = 'There <?php if (count($this->v[\'users\']) == 1) { ?>is one registered user<?php } else { ?>are <?php echo StringUtil::formatNumeric(count($this->v[\'users\'])); ?> registered users<?php } ?> currently online';
$this->items[$this->languageID]['wcf.usersOnline.spiderName'] = 'Name';
$this->items[$this->languageID]['wcf.usersOnline.spiders'] = 'There {if $spiders|count == 1}is one search engine robot{else}are {#$spiders|count} search engine robots{/if} currently online
({if $detailedSpiderList}<a href="index.php?page=UsersOnline&amp;sortField={$sortField}&amp;sortOrder={$sortOrder}&amp;detailedSpiderList=0{if $additionalParameters|isset}{@$additionalParameters}{/if}{@SID_ARG_2ND}">Disable details</a>{else}<a href="index.php?page=UsersOnline&amp;sortField={$sortField}&amp;sortOrder={$sortOrder}&amp;detailedSpiderList=1{if $additionalParameters|isset}{@$additionalParameters}{/if}{@SID_ARG_2ND}">Enable details</a>{/if})';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.spiders'] = 'There <?php if (count($this->v[\'spiders\']) == 1) { ?>is one search engine robot<?php } else { ?>are <?php echo StringUtil::formatNumeric(count($this->v[\'spiders\'])); ?> search engine robots<?php } ?> currently online
(<?php if ($this->v[\'detailedSpiderList\']) { ?><a href="index.php?page=UsersOnline&amp;sortField=<?php echo StringUtil::encodeHTML($this->v[\'sortField\']); ?>&amp;sortOrder=<?php echo StringUtil::encodeHTML($this->v[\'sortOrder\']); ?>&amp;detailedSpiderList=0<?php if (isset($this->v[\'additionalParameters\'])) { ?><?php echo $this->v[\'additionalParameters\']; ?><?php } ?><?php echo SID_ARG_2ND; ?>">Disable details</a><?php } else { ?><a href="index.php?page=UsersOnline&amp;sortField=<?php echo StringUtil::encodeHTML($this->v[\'sortField\']); ?>&amp;sortOrder=<?php echo StringUtil::encodeHTML($this->v[\'sortOrder\']); ?>&amp;detailedSpiderList=1<?php if (isset($this->v[\'additionalParameters\'])) { ?><?php echo $this->v[\'additionalParameters\']; ?><?php } ?><?php echo SID_ARG_2ND; ?>">Enable details</a><?php } ?>)';
$this->items[$this->languageID]['wcf.usersOnline.title'] = '&quot;Who is online?&quot; List';
$this->items[$this->languageID]['wcf.usersOnline.userAgent'] = 'Browser ID';
$this->items[$this->languageID]['wcf.usersOnline.username'] = 'Username';
$this->items[$this->languageID]['wcf.usersOnline.location.attachment'] = 'Attachment';
$this->items[$this->languageID]['wcf.usersOnline.location.pollOverview'] = 'Poll Overview';
$this->items[$this->languageID]['wcf.usersOnline.location.contact'] = '<a href="index.php?form=Contact{SID_ARG_2ND}">Contact</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.contact'] = '<a href="index.php?form=Contact<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Contact</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.pmNew'] = 'Creating new private message';
$this->items[$this->languageID]['wcf.usersOnline.location.pmView'] = 'Reading private message';
$this->items[$this->languageID]['wcf.usersOnline.location.userGroups'] = 'User groups mamagement';
$this->items[$this->languageID]['wcf.usersOnline.location.userWarn'] = 'Warning user';
$this->items[$this->languageID]['wcf.usersOnline.location.teamPage'] = '<a href="index.php?page=Team{SID_ARG_2ND}">Team-Members</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.teamPage'] = '<a href="index.php?page=Team<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Team-Members</a>';
?>