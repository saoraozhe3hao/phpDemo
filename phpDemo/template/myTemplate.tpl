{*引入文件*}
{include file="header.tpl"}

{*变量调节器,| 后面是个函数，| 前面是函数的参数*}
{*首字母大学,另外还有lower,upper*}
{$title|capitalize}
{*连接,冒号后面是函数的第二个参数*}
{$title|cat:"标题"}
{*默认填充*}
{$body|default:"默认"}
{* html转义与换行转换 *}
{$title|escape|nl2br}

{*条件*}
{if 2 > 1}
    条件
{else}
  否则
{/if}

{*循环*}
<br/>
{section name=key loop=$arr}
    {$arr[key]}
    <br/>
{/section}

{foreach item=value from=$arr}
    {$value}
    <br/>
    {foreachelse}
    $arr为空
{/foreach}

{foreach $arr as $item}
    {$item}
    <br/>
{/foreach}