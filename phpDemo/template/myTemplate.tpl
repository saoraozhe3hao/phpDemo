{*�����ļ�*}
{include file="header.tpl"}

{*����������,| �����Ǹ�������| ǰ���Ǻ����Ĳ���*}
{*����ĸ��ѧ,���⻹��lower,upper*}
{$title|capitalize}
{*����,ð�ź����Ǻ����ĵڶ�������*}
{$title|cat:"����"}
{*Ĭ�����*}
{$body|default:"Ĭ��"}
{* htmlת���뻻��ת�� *}
{$title|escape|nl2br}

{*����*}
{if 2 > 1}
    ����
{else}
  ����
{/if}

{*ѭ��*}
<br/>
{section name=key loop=$arr}
    {$arr[key]}
    <br/>
{/section}

{foreach item=value from=$arr}
    {$value}
    <br/>
    {foreachelse}
    $arrΪ��
{/foreach}

{foreach $arr as $item}
    {$item}
    <br/>
{/foreach}