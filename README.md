Replace String
==============

This filter exposes PHPs `str_replace` to allow you to replace all occurances of a substring with a new string.

    {% set foo = 'foobar' %}
    {{ foo|replacestring('bar','baz') }}

output:
    foobaz

As it's using `str_replace`, you can pass an array for each argument, and it will use them:

    {{ foo|replacestring(['foo','bar'],['doo','baz'])}}

output:
    doobaz

Read more about `str_replace` on PHP.net: http://php.net/manual/en/function.str-replace.php
