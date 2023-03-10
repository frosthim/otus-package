# Процессор строк 

Краткое описание проекта 

## Требования 

 -PHP 7.4
 
## Установка 

```bash 
$ composer require dgibadullin/otus-cpmposer-package 
```
## Использование

```php
<?php 
$processor = new StringProcessor();
echo $processor->getLenght('my string'); // 9
```